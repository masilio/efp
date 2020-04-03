
  @extends('layouts.app')

  @section('content')
        
           {!! Form::open(['url' =>'agents/save','files' => true]) !!}

           <div class="grid-container">
               <div class="grid-x grid-padding-x">

               <legend style ="background:darkblue;color:white" class="w-auto">BidUser Information:</legend>
               <div class="cell">
                   {{  Form::Label('fullname','Agent FullName')}}
                   {{Form::text('fullname','')}}
          
              </div>
              <div class="cell">
               {{  Form::Label('mobilenumber','mobilenumber')}}
               {{Form::text('mobilenumber','')}}
          </div>
      
          <div class=" cell">
    {{  Form::Label('address','Addresses')}}
    {{Form::textarea('addresses','')}}

         
           <div class="medium-3 cell">
              
      {{ Form::submit('SUBMIT',['class'=>'button'])}}
           </div>
          </div>
     </div>
          
           {!! Form::close() !!}


  
   @endsection