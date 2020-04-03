
  @extends('layouts.app')

  @section('content')

             
           {!! Form::open(['url' =>'auctionbidders','method' =>'post','files' => true]) !!}
              
               <legend style ="background:darkblue;color:white" class="w-auto">Bids Information:</legend>
               <div class="grid-container">
                    <div class="grid-x grid-padding-x">

               <div class="cell">
                   {{  Form::Label('participant','Bidder Code')}}
                   {{Form::text('participant_id','')}}
          
              </div>
              <div class="cell medium-4">
               {{  Form::Label('property','Property ID')}}
               {{Form::text('property_id',$property->id)}}
          </div>
          <div class="cell medium-4">
           {{  Form::Label('payablebid','Bid')}}
           {{Form::text('payablebid','')}}
      </div>

           <div class="cell">
              
      {{ Form::submit('SUBMIT',['class'=>'button','data-open'=>'infoModal'])}}
           </div>
          </div>
     </div>
           {!! Form::close() !!}



           <!-- This is the info modal -->
<div class="reveal" id="infoModal" data-reveal>
     <h2 style="color:red">you are successfully submited your bids Information!</h2>
     <button class="close-button" data-close aria-label="Close reveal" type="button">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
     
   @endsection