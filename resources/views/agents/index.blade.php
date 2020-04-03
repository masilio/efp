@extends('layouts.app')
@section('title','BidUser Index')
@section('content')
  <div class="grid-x grid-margin-x grid-padding-x">
    <div class="cell">
      <div class="table-scroll">
      <table class="table unstriped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Agent Full Name</th>
          <th>Contact Phone Number</th>
          <th> Addresses</th>
        </tr>
      </thead>
      <tbody>
        @foreach($agents as $a)
          <tr class = "text-center">
            <td>{{ $a->id }}</td>
            <td>{{ $a->fullname }}</td>
            <td>{{$a->mobilenumber }}</td>
            <td>{{ $a->addresses }}</td>
            <td><a href="{{route('agents.edit',['id'=>$a->id])}}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{route('agentss.destroy',['id'=>$a->id])}}" class = "btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
@endsection