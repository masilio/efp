@extends('layouts.app')
@section('title','BidUser Index')
@section('content')

<div class="grid-x">
  <div class="cell small-2">@include('inc.navbar')</div>
  <div class="cell small-10">

    <div class="card">
      <div class="card-divider">
        Posting plans
      </div>
      <div class="card-section">
       
        <a href="{{route('postingplans.create')}}">New</a>
        <table id ="myTable">
          <thead>
            <tr>
              <th>#</th>
              <th> Descriptions</th>
              <th>Type</th>
              <th>Posting Price</th>
              <th></th><th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($pplans as $p)
            <tr class = "text-center">
              <td>{{ $p->id }}</td>
              <td>{{ $p->pdescriptions }}</td>
              <td>{{$p->type }}</td>
              <td>{{$p->pcost }}</td>
              <td width="20px"><a href="{{ route('postingplans.edit',$p->id )}}" class = "success"><i class="fi-pencil"></i></a></td>
              <td>
                {!! Form::open(['url'=>'bannerads/'.$p->id]) !!}
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

   
