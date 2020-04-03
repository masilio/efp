
  @extends('layouts.app')

  @section('content')

  <div class="grid-x">

    <div class="column small-4">@include('inc.navbar')</div>
    <div class="column small-8">
    
      {!! Form::open(['url' =>'topsliders','method' =>'post','files' => true]) !!}
              
      <legend style ="background:darkblue;color:white" class="w-auto">Image sliders:</legend>
           <div class="grid-x grid-padding-x">

               <div class="cell medium-4">
                   {{ Form::Label('image','browse Image will be sliding')}}
                   {{Form::file('image_slider')}}   
               </div>
               <div class="cell medium-8">
                   {{ Form::Label('caption','Image Caption ')}}
                   {{Form::text('caption','')}}   
               </div>

  <div class="cell">
     
{{ Form::submit('SUBMIT',['class'=>'button','data-open'=>'infoModal'])}}
  </div>
 </div>
  {!! Form::close() !!}

    </div>
  </div>
        
   @endsection