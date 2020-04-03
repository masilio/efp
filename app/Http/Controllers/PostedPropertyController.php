<?php

namespace App\Http\Controllers;

use App\PostedProperty;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PostedPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = PostedProperty::all();
        
        return View('properties.admin_index')->with('properties',$pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return  View('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $pro = new PostedProperty();
        $pro->advertisertype =$request->input('advertisertype');
        $pro->pubfullname =$request->input('pubfullname');
       $pro->pubemail =$request->input('pubemail');
        $pro->pubtelephone =$request->input('pubtelephone');
        $pro->pname =$request->input('pname');
        $pro->pfeatures =$request->input('pfeatures');
        $pro->pcategory =$request->input('pcategory');
        $pro->pprice =$request->input('pprice');
        $pro->postpayable =$request->input('postpayable');
        $pro->carrency =$request->input('carrency');
        $pro->postplan =$request->input('postplan');
        $pro->expiryat =$request->input('expiryat');
        $pro->powner =$request->input('powner');
        $pro->ownertelno=$request->input('ownertelno');
        $pro->district =$request->input('district');
        $pro->sector =$request->input('sector');
        $pro->cell =$request->input('cell');
        $pro->village =$request->input('village');
        $pro->status='free';
 
 
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
        $property=PostedProperty::find($id);

        return view('properties.edit',compact('property'));
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
        $pro =PostedProperty::find($id);
        $pro->advertisertype =$request->input('advertisertype');
        $pro->pubfullname =$request->input('pubfullname');
       $pro->pubemail =$request->input('pubemail');
        $pro->pubtelephone =$request->input('pubtelephone');
        $pro->pname =$request->input('pname');
        $pro->pfeatures =$request->input('pfeatures');
        $pro->pcategory =$request->input('pcategory');
        $pro->pprice =$request->input('pprice');
        $pro->postpayable =$request->input('postpayable');
        $pro->carrency =$request->input('carrency');
        $pro->postplan =$request->input('postplan');
        $pro->expiryat =$request->input('expiryat');
        $pro->powner =$request->input('powner');
        $pro->ownertelno=$request->input('ownertelno');
        $pro->district =$request->input('district');
        $pro->sector =$request->input('sector');
        $pro->cell =$request->input('cell');
        $pro->village =$request->input('village');
        $pro->status='free';
 
        
        $pro->update();
 
        return redirect('properties')->with('success','property updated');
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
        $pro= PostedProperty::find($id);
        $pro->delete();
 
        return redirect()->route('properties.admin_index')->with('success','property deleted');
    }
}
