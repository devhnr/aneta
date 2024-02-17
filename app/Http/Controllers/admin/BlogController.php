<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blog;
use Image;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog_data']=Blog::orderBy('id','DESC')->get();
        
        return view('admin.list_blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $blog=New Blog;
        $blog->title      = $request->title;
        $blog->page_url      = $request->page_url;
        $blog->name  = $request->name;
        // $blog->user_name  = $request->user_name;

        if($request->hasfile('user_image') != '')
        {
            $user_image = $request->file('user_image');
            $remove_space = str_replace(' ', '-', $user_image->getClientOriginalName());
            $data['user_image'] = time() . $remove_space;

            $destinationPath = public_path('upload/blog/user_image/large/');
            $img = Image::make($user_image->path());
            $width=300;
            $height=300;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['user_image']);
                
            $destinationPath = public_path('upload/user_image/');
            $user_image->move($destinationPath,$data['user_image']);

            $blog->user_image = $data['user_image'];
        }
       
        $blog->date  = $request->date;
        $blog->description  = $request->description;
       
        if($request->hasfile('list_image') != '')
        {
            $list_image = $request->file('list_image');
            $remove_space = str_replace(' ', '-', $list_image->getClientOriginalName());
            $data['list_image'] = time() . $remove_space;

            $destinationPath = public_path('upload/blog/list_image/large/');
            $img = Image::make($list_image->path());
            $width=790;
            $height=600;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['list_image']);
                
            $destinationPath = public_path('upload/list_image/');
            $list_image->move($destinationPath,$data['list_image']);

            $blog->list_image = $data['list_image'];
        }
        if($request->hasfile('detail_image') != '')
        {
            $detail_image = $request->file('detail_image');
            $remove_space = str_replace(' ', '-', $detail_image->getClientOriginalName());
            $data['detail_image'] = time() . $remove_space;

            $destinationPath = public_path('upload/blog/detail_image/large/');
            $img = Image::make($detail_image->path());
            $width=1175;
            $height=400;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['detail_image']);
                
            $destinationPath = public_path('upload/detail_image/');
            $detail_image->move($destinationPath,$data['detail_image']);

            $blog->detail_image = $data['detail_image'];
        }        

        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Blog Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

        return view('admin.edit_blog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog=Blog::find($id);
        $blog->title      = $request->title;
        $blog->page_url      = $request->page_url;
        $blog->name  = $request->name;

        if($request->hasfile('user_image') != '')
        {
            $user_image = $request->file('user_image');
            $remove_space = str_replace(' ', '-', $user_image->getClientOriginalName());
            $data['user_image'] = time() . $remove_space;

            $destinationPath = public_path('upload/blog/user_image/large/');
            $img = Image::make($user_image->path());
            $width=300;
            $height=300;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['user_image']);
                
            $destinationPath = public_path('upload/user_image/');
            $user_image->move($destinationPath,$data['user_image']);

            $blog->user_image = $data['user_image'];
        }
       

        $blog->date  = $request->date;
        $blog->description  = $request->description;
       
        if($request->hasfile('list_image') != '')
        {
            $list_image = $request->file('list_image');
            $remove_space = str_replace(' ', '-', $list_image->getClientOriginalName());
            $data['list_image'] = time() . $remove_space;

            $destinationPath = public_path('upload/blog/list_image/large/');
            $img = Image::make($list_image->path());
            $width=790;
            $height=600;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['list_image']);
                
            $destinationPath = public_path('upload/list_image/');
            $list_image->move($destinationPath,$data['list_image']);

            $blog->list_image = $data['list_image'];
        }
        if($request->hasfile('detail_image') != '')
        {
            $detail_image = $request->file('detail_image');
            $remove_space = str_replace(' ', '-', $detail_image->getClientOriginalName());
            $data['detail_image'] = time() . $remove_space;

            $destinationPath = public_path('upload/blog/detail_image/large/');
            $img = Image::make($detail_image->path());
            $width=1175;
            $height=400;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['detail_image']);
                
            $destinationPath = public_path('upload/detail_image/');
            $detail_image->move($destinationPath,$data['detail_image']);

            $blog->detail_image = $data['detail_image'];
        }        

        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Blog Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {        
        $id= $request->selected;
        Blog::whereIn('id',$id)->delete();
        return redirect()->route('blog.index')->with('success', 'Blog Data Deleted Successfully');

    }
    public function set_order_blog()
    {
        $id = $_POST['id'];
        $val = $_POST['val'];
        // echo $id."-".$val;exit;
        DB::table('blogs')->where('id', $id)->update(array('set_order' => $val));
        echo "1";
        // return redirect()->route('product.index')->with('success','Set Order has been Updated successfully');
    }
    public function set_as_home_blog(Request $request){
        $id = $request->id;

        $val = $request->val;

        // echo $id."-".$val;exit;

        DB::table('blogs')->where('id', $id)->update(array('set_as_home' => $val));    echo "1";
    }
}