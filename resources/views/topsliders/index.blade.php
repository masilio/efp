@extends('layouts.app')
@section('title','BidUser Index')
@section('content')

<div class="grid-x">
  <div class="cell small-2">@include('inc.navbar')</div>
  <div class="cell small-10">

    <div class="card">
      <div class="card-divider">
        Top Images Slidders
      </div>
      <div class="card-section">
       
        <a href="{{route('topsliders.create')}}">New</a>
        <table id ="myTable">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Caption</th>

              <th>UploadedTime</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($sliders as $s)
            <tr class = "text-center">
              <td>{{ $s->id }}</td>
              <td><img src ="images/topimagesliders/{{ $s->image_slider }}" width="50"></td>
              <td>{{$s->caption }}</td>
              <td>{{ $s->created_at }}</td>
              <td>
                {!! Form::open(['url'=>'topsliders/'.$s->id]) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'button alert right'])}}
               {!! Form::close() !!}
                  
              </td>
            </tr>
          @endforeach
          </tbody>
        
        </table>
    
      </div>
    </div>
    
  </div>
</div>

     
@endsection

   
