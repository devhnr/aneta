<?php
namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class Front_productcontroller extends Controller
{
    
    public function product_detail($page_url=''){
        // echo $page_url;exit;
        $data['product_data'] = DB::table('products')->where('page_url',$page_url)->first();
        
        $pid = $data['product_data']->id;
        $data['product_image'] = DB::table('product_image')->where('pid',$pid)->get();
        
        $data['getsizedetail'] = DB::table('product_attribute as sp')
                                    ->select('sp.*', 's.id', 's.name as sizename')
                                    ->leftJoin('sizes as s', 's.id', '=', 'sp.size_id')
                                    ->where('sp.pid', $pid)
                                    ->groupBy('s.id')
                                    ->get();

        $data['package_detail'] = DB::table('product_attribute as sp')                                   
                                    ->where('sp.pid', $pid)
                                    ->get();
        $data['relatedproduct'] = DB::table('products')->where('cat_id',$data['product_data']->cat_id)->where('id','!=',$pid)->get();
        $data['meta_title'] = $data['product_data']->meta_title;
        $data['meta_keyword'] = $data['product_data']->meta_keyword;
        $data['meta_description'] = $data['product_data']->meta_description;

        $data['cat_data'] = DB::table('categories')->where('id',$data['product_data']->cat_id)->first();
        $data['brand_data'] = DB::table('brands')->where('id',$data['product_data']->brand_id)->first();

          //echo "<pre>";print_r($data);echo "</pre>";exit;
        return view('front.product_detail',$data);
    }

    function price_show(){
        $package_detail_id = $_POST['package_detail_id'];
        $p_id = $_POST['p_id'];
       
        $result = DB::table('product_attribute')->where('id',$package_detail_id)->where('pid',$p_id)->first();
        //echo "<pre>";print_r($result);echo "</pre>";exit;
        if($result != ''){
            $array = array(
                'response'=> 'success',
                'size_id' => $result->size_id,
                'qty' => $result->qty,
                'price' => $result->price,
              );
        }else{
            $array = array('response'=> 'fail');
        }
        $json = json_encode($array);
        echo $json;
    }

    public function product_listing(Request $request, $cat_url=''){
        
        $query = DB::table('products as p');

        if ($cat_url != '') {
            $cat_data = DB::table('categories')->select('*')->where('page_url', '=', $cat_url)->first();
            $query = $query->where('p.cat_id', '=', $cat_data->id);
           
            $sizesProducts = DB::table('products as p')
                                ->leftJoin('product_attribute as p_attr','p.id','=','p_attr.pid')
                                ->leftJoin('sizes as s', 'p_attr.size_id', '=', 's.id')
                                ->select('s.id','s.name as sizename','p_attr.pid as pid')
                                ->selectRaw('COUNT(DISTINCT p_attr.pid) as product_count')
                                ->groupBy('s.id', 's.name');

            $sizesProducts = $sizesProducts->where('p.cat_id', '=', $cat_data->id);
            $data['banner_title'] = $cat_data->name;
            $data['meta_title'] = $cat_data->meta_title;
            $data['meta_keyword'] = $cat_data->meta_keywords;
            $data['meta_description'] = $cat_data->meta_description;

            

            $data['categories_data'] = $cat_data;
        }

        $data['best_seller_product'] =  DB::table('products')
                                    ->leftJoin('product_attribute', 'products.id', '=', 'product_attribute.pid')
                                    ->leftJoin('product_image', function($join) {
                                        $join->on('products.id', '=', 'product_image.pid')
                                            ->where('product_image.baseimage', '=', 1);
                                    })
                                    ->where('products.best_seller', 1)
                                    ->orderBy('products.id', 'DESC')
                                    ->select('products.*', 
                                            DB::raw('MIN(product_attribute.price) as min_price'), 
                                            DB::raw("COALESCE(product_image.image, 'no-image.png') as base_image"))
                                    ->groupBy('products.id')
                                    ->take(3)
                                    ->get();

                                    // echo"<pre>";
                                    //     print_r($data['best_seller_product']);
                                    // echo"</pre>";exit;






        $sort_by ="";
        if($request->get('sort') !== null)
        {
            $sort_by = $request->get('sort');
           
        }

        $query = $query
                    ->select(
                        'p.*',
                        DB::raw('(SELECT price FROM product_attribute WHERE pid = p.id ORDER BY price ASC LIMIT 1) AS min_price',
                    ),
                        // DB::raw('(SELECT (MIN(price) - (MIN(price) * p.discount / 100)) FROM product_attribute WHERE pid = p.id) AS discountprice')
                    )
                    ->join('product_attribute as pa', 'pa.pid', '=', 'p.id')
                    ->where('p.id', '<>', 0)
                    ->groupBy('p.id');

                  


                    if($sort_by == 'latest'){
                        $query = $query->orderBy('p.id','DESC');
                    }                    
                    if($sort_by == 'high_to_low'){
                        $query = $query->orderBy('min_price','DESC');
                        
                    }
                    if($sort_by == 'low_to_high'){
                        $query = $query->orderBy('min_price','ASC');                     
                       
                    }

        $pagination = $query->orderBy('p.id', 'DESC')->paginate(9)->withQueryString();

        $data['productCount'] = $pagination->total(); // Use total() to get the total count.
        $data['all_product_details'] = $pagination;
        $data['sizesProducts'] = $sizesProducts->get();
        $data['max_price'] = DB::table('product_attribute')->max('price');
        $data['sort_by'] = $sort_by;
        // echo "<pre>";print_r($data['max_price']);echo "</pre>";exit;
        return view('front.product_listing',$data);
        

    }
    
}