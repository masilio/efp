

@extends('layouts.app')

@section('content')
 

<div class="grid-x">
    <div class="cell small-2">@include('inc.navbar')</div>
    <div class="cell small-10">
  
      <div class="card">
        <div class="card-divider">
          List of posted properties
        </div>
        <div class="card-section">
         <a href="{{route('properties.create')}}">New</a>
@if (count($properties) >0)

<table id="myTable">
<tr><th>#</th><th>Name</th><th>Descriptions</th><th>Category</th><th>Address</th><th>Price</th><th>Image</th><th>Status</th><th></th><th></th></tr>

@foreach ($properties  as $p)

<tr><td>{{$p->id}}</td><td>{{$p->pname}}</td><td>{{$p->pfeatures}}</td><td>{{$p->pcategory}}</td><td>{{$p->district}},{{$p->sector}},{{$p->village}}</td><td>{{$p->pprice}}</td><td>{{$p->p_image}}</td>
    <td>{{$p->status}}</td>
    <td><a href="{{ route('properties.edit', $p->id)}}" class = "button success ">Edit</a></td>
    <td>
      {!! Form::open(['url'=>'properties/'.$p->id]) !!}
      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('Delete',['class'=>'button alert right'])}}
     {!! Form::close() !!}
        
    </td>

@endforeach

</table>
@endif
</div>
</div>

</div>
</div>
    @endsection