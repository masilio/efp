

  @extends('layouts.app')

  @section('content')
<div class="grid-x">
    <div class="column small-4">@include('inc.navbar')</div>
<div class="column small-8">
    {!! Form::open(['url' =>route('properties.update',$property->id),'method'=>'put','files' => true]) !!}
              
          
    <legend style ="background:darkblue;color:white" class="w-auto">Publisher Information:</legend>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
        {{  Form::Label('publisher','Publisher Type')}}
        {{Form::select('advertisertype',[''=>'','agency'=>'Agency/Company','individual'=>'Personnel'])}}

   </div>
   <div class="medium-4 cell">
    {{  Form::Label('pname','FullName')}}
    {{Form::text('pubfullname',$property->pubfullname)}}
</div>
<div class="medium-4 cell">
{{  Form::Label('pname','Contact email address')}}
{{Form::email('pubemail',$property->pubemail)}}
</div>
<div class="medium-4 cell">
{{  Form::Label('pname','Contact Telephone Number')}}
{{Form::tel('pubtelephone',$property->pubtelephone)}}
</div>

<br>
    <legend style ="background:darkblue;color:white" class="w-auto">Publication details:</legend>

    <div class="cell">
        {{  Form::Label('pname','Property Name')}}
        {{Form::text('pname',$property->pname)}}
   </div>
     
<div class="cell">
    {{  Form::Label('pfeatures','Features&Descriptions')}}
    {{Form::textarea('pfeatures',$property->pfeatures)}}
</div>
<div class="cell medium-4">
    {{  Form::Label('pcategory','Category')}}
    {{Form::select('pcategory',['rent'=>'For rent','sale'=>'For sale','auction'=>'For auction'])}}
</div>
<div class="cell medium-4">
    {{  Form::Label('pprice','price')}}
    {{Form::text('pprice',$property->pprice)}}
</div>
<div class="cell medium-4">
        {{  Form::Label('postpayable','Method of payment')}}
        {{Form::select('postpayable',['monthly'=>'Monthly','yearly'=>'Yearly','buy'=>'Purchased'])}}
    </div>
    <div class="cell medium-6">
        {{  Form::Label('postpayable','Carrency of payment')}}
        {{Form::select('carrency',['rw'=>'RWF','$'=>'USA Dollar'])}}
    </div>
<div class="cell medium-6">
    {{  Form::Label('postplan','Custom advert plan')}}
    {{Form::select('postplan',['featured'=>'Featured','superfeatured'=>'Super Featured'])}}
</div>
   <br>
      <legend style ="background:darkblue;color:white" class="w-auto">Property Addresses:</legend>
       
      <div class="cell">
        {{  Form::Label('pprice','Name for Owner of Property')}}
        {{Form::text('powner',$property->powner)}}
    </div>
    <div class="cell medium-4">
        {{  Form::Label('pprice',' Mobile Number for Owner of Property')}}
        {{Form::text('ownertelno',$property->ownertelno)}}
    </div>
    <div class="cell medium-4">
        {{ Form::Label('pimage','expiry ')}}
        {{Form::date('expiryat',$property->expiryat)}}   
    </div>
       
        <div class="cell medium-3">
            {{  Form::Label('pprice','District')}}
            {{Form::text('district',$property->district)}}
        </div>
        <div class="cell medium-3">
            {{  Form::Label('pprice','Sector')}}
            {{Form::text('sector',$property->sector)}}
        </div>
        <div class="cell medium-3">
            {{  Form::Label('pprice','Cell')}}
            {{Form::text('cell',$property->cell)}}
        </div>
        <div class="cell medium-3">
            {{  Form::Label('pprice','Village')}}
            {{Form::text('village',$property->village)}}
        </div>

     <div class="cell">
   
     {{ Form::submit('SUBMIT',['class'=>'button'])}}
</div>
</div>
</div>

{!! Form::close() !!}

</div>
</div>
          
   @endsection