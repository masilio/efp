<?php

namespace App\Http\Controllers;

use App\PostingPlan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('postingplans.index')->with('pplans',PostingPlan::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  View('postingplans.create')->with('pplans');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pplan = new  PostingPlan();

 
            $pplan->pdescriptions =$request->input('pdescriptions');
     
            $pplan->type =$request->input('type');
            $pplan->pcost =$request->input('pcost');
       
        
            $pplan->save();
       return redirect('postingplans/create')->with('success','post plan added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostingPlan  $postingPlan
     * @return \Illuminate\Http\Response
     */
    public function show(PostingPlan $postingPlan)
    {
        return view('postingplans.show',compact('postingPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $postingPlan =PostingPlan::find($id);
        return view('postingplans.edit',compact('postingPlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        PostingPlan::where('id', $id)->update($request->except(['_token','_method']));
        return redirect()->route('postingplans.index')->with('success', 'posting plan updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete =PostingPlan::find($id);
        $delete->delete();
        return redirect('/postingplans')->with('success', 'posting plan deleted successfully');
    }
}
