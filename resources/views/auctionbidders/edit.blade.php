
  @extends('layouts.app')

  @section('content')
             
           {!! Form::open(['url' =>['/auctionbidders',$bidder->id],'method'=>'put']) !!}
              
               <legend style ="background:darkblue;color:white" class="w-auto"> Edit Bidder Information:</legend>
                
               <div class="grid-container">
                    <div class="grid-x grid-padding-x">

               <div class="cell">
                   {{  Form::Label('participant','Bidder Code')}}
                   {{Form::text('participant_id',$bidder->participant_id)}}
          
              </div>
              <div class="cell medium-4">
               {{  Form::Label('property','Property ID')}}
               {{Form::text('property_id',$bidder->property_id)}}
          </div>
          <div class="cell medium-4">

           {{  Form::Label('payablebid','Bid')}}
           {{Form::text('payablebid',$bidder->payablebid)}}
      </div>
          
     <div class="cell">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              
      {{ Form::submit('SUBMIT',['class'=>'button'])}}
           </div>
          </div>
     </div>

           {!! Form::close() !!}
           
   @endsection