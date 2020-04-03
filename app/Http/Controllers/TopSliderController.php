<?php

namespace App\Http\Controllers;

use App\TopSlider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TopSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('topsliders.index')->with('sliders',TopSlider::all());
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  View('topsliders.create')->with('topsliders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slider = new  TopSlider();

        if ($request->hasFile('image_slider')){
            $file= $request->file('image_slider');
            $ext= $file->getClientOriginalExtension();
 
            $filename= time().'.'.$ext;
            $file->move('images/topimagesliders',$filename);
 
            $slider->image_slider =$filename;
        }
        else{
            return $request;
            $slider->p_image  ='';
        }
        $slider->caption =$request->input('caption');
       
        
       $slider->save();
       return redirect('topsliders.create')->with('success','Image added');
 
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function show(TopSlider $topSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(TopSlider $topSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopSlider $topSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopSlider $topSlider)
    {
        //
    }
}
