<?php

namespace App\Http\Controllers;

use App\BannerAds;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BannerAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = BannerAds::all();
        return view('bannerads.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bannerads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $banner= new BannerAds();
        
        $banner->image =$request->file('image');;
       
        $banner->banner_title =$request->input('banner_title');
        $banner->banner_body =$request->input('banner_body');
        $banner->url_path =$request->input('url');
        $banner->expired =$request->input('expired');
       
        
       $banner->save();
       return redirect('bannerads/create')->with('success','banner Ads added');
 
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
        // PropertyBidder
        $banner = BannerAds::find($id);
        return view('bannerads.edit',compact('banner'));
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
        $banner= BannerAds::find($id);
        
        $banner->banner_title =$request->input('banner_title');
        $banner->banner_body =$request->input('banner_body');
        $banner->url_path =$request->input('url');
        $banner->expired =$request->input('expired');
       
        
       $banner->update();
       return redirect('bannerads')->with('success','banner Ads added');
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
        $b =BannerAds::find($id);
        $b->delete();
 
        return redirect('/bannerads')->with('info','Ads deleted Successfully');
    }
}
