<?php

namespace App\Http\Controllers;

use App\PostedProperty;
use App\PropertyBidder;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PropertyBidderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidders = PropertyBidder::all();
        
        return View('Auctionbidders.index')->with('bidders',$bidders);
    }

    /**
     * Show the form for creating a new resource.
     *
      * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       
        return  View('auctionbidders.create')->with('property',PostedProperty::find($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidder = new  PropertyBidder();
        $bidder->participant_id =$request->input('participant_id');
        $bidder->property_id =$request->input('property_id');
       $bidder->payablebid =$request->input('payablebid');
        
        
        $bidder->save();
 
        return redirect('/')->with('success','BidUser added');
        
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$bidder =  PropertyBidder::find($id);
        return  View('auctionbidders.create')->with('property',PostedProperty::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidder =  PropertyBidder::find($id);
        return view('auctionbidders.edit',compact('bidder'));
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
        $bidder =  PropertyBidder::find($id);
        $bidder->participant_id =$request->input('participant_id');
        $bidder->property_id =$request->input('property_id');
       $bidder->payablebid =$request->input('payablebid');
        
        
        $bidder->save();
 
        return redirect('/auctionbidders')->with('info','biduser Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidder =  PropertyBidder::find($id);
        $bidder->delete();
 
        return redirect('/auctionbidders')->with('info','bidder deleted Successfully');
    }
}
