
  @extends('layouts.app')

  @section('content')
 
             
           {!! Form::open(['url' =>'auctionparticipants','method' =>'post','files' => true]) !!}
              
               <legend style ="background:darkblue;color:white" class="w-auto">BidUser Information:</legend>
               <div class="grid-container">
                    <div class="grid-x grid-padding-x">

               <div class="cell">
                   {{  Form::Label('fullname','Bidder FullName')}}
                   {{Form::text('bidderfullname','')}}
          
              </div>
              <div class="cell medium-4">
               {{  Form::Label('mobilenumber','mobilenumber')}}
               {{Form::text('mobilenumber','')}}
          </div>
          <div class="cell medium-4">
           {{  Form::Label('emailaddress','emailaddress')}}
           {{Form::email('emailaddress','')}}
      </div>
      <div class="cell medium-4">
       {{  Form::Label('biddercode','biddercode')}}
       {{Form::tel('biddercode','')}}
  </div>
  <div class="cell">
    {{  Form::Label('address','Addresses')}}
    {{Form::textarea('addresses','')}}

           <div class="cell">
              
      {{ Form::submit('SUBMIT',['class'=>'button'])}}
           </div>
          </div>
     </div>
           {!! Form::close() !!}
     
  
   @endsection