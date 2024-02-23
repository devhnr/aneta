<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['faq']=DB::table('faq')->orderBy('id','DESC')->get();

        return view('admin.list_faq',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_faq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['que'] =  $request->input('que');

        $data['ans'] = $request->input('ans');
    
        DB::table('faq')->insert($data);

        return redirect()->route('faq.index')->with('success','FAQ Added Successfully.');
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
        $data['faq']=DB::table('faq')->where('id',$id)->first();

        return view('admin.edit_faq',$data);
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
        $data['que'] = $request->input('que');
        $data['ans'] = $request->input('ans');

        DB::table('faq')->where('id',$id)->update($data);

       return redirect()->route('faq.index')->with('success','FAQ Updated Successfully.');
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

        DB::table('faq')->whereIn('id',$delete_id)->delete();

        return redirect()->route('faq.index')->with('success','FAQ has been deleted successfully');

    }
}
