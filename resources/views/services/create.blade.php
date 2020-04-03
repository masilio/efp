

  @extends('layouts.app')

  @section('content')
 @include('inc.navbar')
             
           {!! Form::open(['url' =>'services','method' =>'post','files' => true]) !!}
              
               <legend style ="background:darkblue;color:white" class="w-auto">New service:</legend>
               <div class="grid-container">
                    <div class="grid-x grid-padding-x">

                        <div class="cell medium-4">
                            {{ Form::Label('title','Title')}}
                            {{Form::text('service_name')}}   
                        </div>
                        <div class="cell medium-4">
                            {{ Form::Label('Content','Page content ')}}
                            {{Form::text('service_body','')}}   
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