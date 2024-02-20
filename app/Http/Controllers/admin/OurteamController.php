<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class OurteamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['our_team']=DB::table('our_team')->get();

       return view('admin.list_ourteam',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.add_ourteam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name'] = $request->input('name');

        $data['role'] = $request->input('role');

        if($request->hasfile('image') != ''){
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;
            $destinationPath = public_path('upload/our_team/large');
            $img = Image::make($image->path());

            $width=600;
            $height=600;
            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);


            $destinationPath = public_path('upload/our_team');
            $image->move($destinationPath,$data['image']);
            $image = $data['image'];

        }

        DB::table('our_team')->insert($data);

        return redirect()->route('our_team.index')->with('success','Our Team Added Successfully.');  


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
    public function edit($id)
    {
        $data['our_team']=  DB::table('our_team')->where('id',$id)->first();
      
        return view('admin.edit_ourteam',$data);
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
        {
            $data['name'] = $request->input('name');
            $data['role'] = $request->input('role');
            
            if($request->hasfile('image') != ''){
                $image = $request->file('image');
                $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
                $data['image'] = time() . $remove_space;
                $destinationPath = public_path('upload/our_team/large');
                $img = Image::make($image->path());
    
                $width=570;
                $height=570;
                $img->resize($width,$height,function($constraint){
                })->save($destinationPath.'/'.$data['image']);
    
    
                $destinationPath = public_path('upload/our_team');
                $image->move($destinationPath,$data['image']);
                $image = $data['image'];
                
            }
    
            DB::table('our_team')->where('id',$id)->update($data);
    
            return redirect()->route('our_team.index')->with('success','Our Team Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
        $delete_id = $request->selected;

        // echo $delete_id;exit;

        
        DB::table('our_team')->whereIn('id',$delete_id)->delete();

        return redirect()->route('our_team.index')->with('success','Our Team has been deleted successfully');

    }
}
