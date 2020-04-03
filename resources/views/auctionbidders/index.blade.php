@extends('layouts.app')
@section('title','BidUser Index')
@section('content')

<div class="grid-x">
  <div class="cell small-2">@include('inc.navbar')</div>
  <div class="cell small-10">

    <div class="card">
      <div class="card-divider">
        List of Bidders
      </div>
      <div class="card-section">
       
        <table id ="myTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Bidder</th>
              <th>Property</th>
              <th>Payable bid</th>
              <th>BiddingTime</th>
              <th></th>  <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($bidders as $b)
            <tr class = "text-center">
              <td>{{ $b->id }}</td>
              <td>{{ $b->participant_id }}</td>
              <td>{{$b->property_id }}</td>
              <td>{{$b->payablebid }}</td>
              <td>{{ $b->created_at }}</td>
              <td><a href="{{ route('auctionbidders.edit', $b->id )}}" class = "button success">Edit</a></td>

                <td>
                  {!! Form::open(['url'=>'auctionbidders/'.$b->id]) !!}
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

   
