



  @extends('layouts.app')

  @section('content')
             <div class="grid-x grid-padding-x">

                <div class="columns small-3">@include('inc.navbar')</div>

                <div class="columns small-9">

                    {!! Form::open(['url' =>route('bannerads.update',$banner->id),'method' =>'put','files' => true]) !!}
              
                    <legend style ="background:darkblue;color:white" class="w-auto">New Banner ads:</legend>
                    <div class="grid-container">
                         <div class="grid-x grid-padding-x">
     
                             <div class="cell">
                                 {{ Form::Label('title','Title')}}
                                 {{Form::text('banner_title',$banner->banner_title)}}   
                             </div>
                             <div class="cell">
                                 {{ Form::Label('Content','Page content ')}}
                                 {{Form::textArea('banner_body',$banner->banner_body)}}   
                             </div>
     
                             <div class="cell medium-4">
                                 {{ Form::Label('pimage','expiry ')}}
                                 {{Form::date('expired',\Carbon\Carbon::now())}}   
                             </div>
                             <div class="cell medium-8">
                                 {{ Form::Label('path','Copy & Past url path if neccessary')}}
                                 {{Form::text('url',$banner->url_path)}}   
                             </div>
     
                <div class="cell">
                   
           {{ Form::submit('SUBMIT',['class'=>'button','data-open'=>'infoModal'])}}
                </div>
               </div>
          </div>
                {!! Form::close() !!}
     
                </div>
             </div>
   @endsection