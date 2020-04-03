

@extends('layouts.app')
@section('title','BidUser Index')
@section('content')
  

<div class="grid-x">
  <div class="cell small-2">@include('inc.navbar')</div>
  <div class="cell small-10">

    <div class="card">
      <div class="card-divider">
        List of Advertising 
      </div>
      <div class="card-section">
       
        <a href="{{route('bannerads.create')}}">New</a>
      <table id ="myTable">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>Image</th>
            <th>CreatedAt</th>
            <th>Expiry</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($banners as $b)
          <tr class = "text-center">
            <td>{{ $b->id }}</td>
            <td>{{ $b->banner_title }}</td>
            <td>{{$b->banner_body }}</td>
            <td>{{$b->image}}</td>
            <td>{{ $b->created_at }}</td>
            <td>{{ $b->expired}}</td>
            <td><a href="{{route('bannerads.edit',$b->id)}}" class = "button success">Edit</a>
               {!! Form::open(['url'=>'bannerads/'.$b->id]) !!}
                 {{Form::hidden('_method','DELETE')}}
                 {{Form::submit('Delete',['class'=>'button alert'])}}
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