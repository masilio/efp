
  @extends('layouts.app')

  @section('content')
             
           {!! Form::open(['url' =>['/auctionparticipants',$bidder->id],'method'=>'put']) !!}
              
               <legend style ="background:darkblue;color:white" class="w-auto">BidUser Information:</legend>
                
               <div class="grid-container">
                    <div class="grid-x grid-padding-x">

               <div class="cell">
                   {{  Form::Label('fullname','Bidder FullName')}}
                   {{Form::text('bidderfullname',$bidder->bidderfullname)}}
          
              </div>
              <div class="cell medium-4">
               {{  Form::Label('mobilenumber','mobilenumber')}}
               {{Form::text('mobilenumber',$bidder->mobilenumber)}}
          </div>
          <div class="cell medium-4">

           {{  Form::Label('emailaddress','emailaddress')}}
           {{Form::email('emailaddress',$bidder->emailaddress)}}
      </div>
      <div class="cell medium-4">
       {{  Form::Label('biddercode','biddercode')}}
       {{Form::text('biddercode',$bidder->biddercode)}}
  </div>
  <div class="cell">
    {{  Form::Label('address','Addresses')}}
    {{Form::textarea('addresses',$bidder->addresses)}}
  </div>
          
     <div class="cell">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              
      {{ Form::submit('SUBMIT',['class'=>'button'])}}
           </div>
          </div>
     </div>

           {!! Form::close() !!}
           
   @endsection