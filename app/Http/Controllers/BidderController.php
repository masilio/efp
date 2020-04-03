<?php

namespace App\Http\Controllers;
use App\AuctionParticipant;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BidderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidders = AuctionParticipant::all();
        
        return View('auctionparticipants.index')->with('bidders',$bidders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  View('auctionparticipants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidder = new AuctionParticipant();
        $bidder->bidderfullname =$request->input('bidderfullname');
        $bidder->mobilenumber =$request->input('mobilenumber');
       $bidder->emailaddress =$request->input('emailaddress');
        $bidder->biddercode =$request->input('biddercode');
        $bidder->addresses =$request->input('addresses');
        
        
        $bidder->save();
 
        return redirect('auctionparticipants/create')->with('success','BidUser added');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bidder = AuctionParticipant::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidder = AuctionParticipant::find($id);
        return view('auctionparticipants.edit',['bidder'=> $bidder]);
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
        $bidder = AuctionParticipant::find($id);
        $bidder->bidderfullname =$request->input('bidderfullname');
        $bidder->mobilenumber =$request->input('mobilenumber');
       $bidder->emailaddress =$request->input('emailaddress');
        $bidder->biddercode =$request->input('biddercode');
        $bidder->addresses =$request->input('addresses');
        
        
        $bidder->save();
 
        return redirect('/auctionparticipants')->with('info','biduser Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidder = AuctionParticipant::find($id);
        $bidder->delete();
 
        return redirect('/auctionparticipants')->with('info','bidder deleted Successfully');
    }
}
