@extends('layouts.app')
@section('title','BidUser Index')
@section('content')
  

<div class="grid-x">
  <div class="cell small-2">@include('inc.navbar')</div>
  <div class="cell small-10">

    <div class="card">
      <div class="card-divider">
        List of Bidding participants
      </div>
      <div class="card-section">
       
      <table id ="myTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Bidder Full Name</th>
            <th>Contact Phone Number</th>
            <th>Email Address</th>
            <th>Bidder Code</th>
            <th>Bidder Addresses</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bidders as $b)
          <tr class = "text-center">
            <td>{{ $b->id }}</td>
            <td>{{ $b->bidderfullname }}</td>
            <td>{{$b->mobilenumber }}</td>
            <td>{{$b->emailaddress }}</td>
            <td>{{ $b->biddercode }}</td>
            <td>{{ $b->addresses }}</td>
            <td>{{ $b->created_at }}</td>
            <td><a href="{{ URL::to('auctionparticipants/' . $b->id . '/edit')}}" class = "button success">Edit</a></td>
            <td><a href="{{URL::to('auctionparticipants/'.$b->id.'/delete')}}" class = "button alert">Delete</a></td>
          </tr>
        @endforeach
        </tbody>
      
      </table>
    </div>
  </div>
  
</div>
</div>
@endsection