<?php

namespace App\Http\Controllers;

use App\Properties;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = Properties::all();
        
        return View('properties.admin_index')->with('properties',$pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return  View('properties.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Validator::make($request->all(),[
           'pname'=>'required',
           'pfeatures'=>'required',
           'paddress'=>'required',
           'pprice'=>'required',
       ])->validate();

       $pro = new Properties();
       $pro->pname =$request->input('pname');
       $pro->pfeatures =$request->input('pfeatures');
       $pro->pcategory =$request->input('pcategory');
       $pro->pprice =$request->input('pprice');
       $pro->paddress =$request->input('paddress');


       if ($request->hasFile('p_image')){
           $file= $request->file('p_image');
           $ext= $file->getClientOriginalExtension();

           $filename= time().'.'.$ext;
           $file->move('images/properties',$filename);

           $pro->p_image =$filename;
       }
       else{
           return $request;
           $pro->p_image  ='';
       }
      
       
       $pro->save();

       return redirect('/properties')->with('success','property added');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
