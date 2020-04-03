
  @extends('layouts.app')

   @section('content')

   <a class ="button" href="{{URL::to('/')}}"> BACK TO HOME</a>
       
            {!! Form::open(['url' =>'properties','method'=>'post','files' => true]) !!}
               
           
                <legend style ="background:darkblue;color:white" class="w-auto">Publisher Information:</legend>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell">
                    {{  Form::Label('publisher','Publisher Type')}}
                    {{Form::select('advertisertype',[''=>'','agency'=>'Agency/Company','individual'=>'Personnel'],['class'=>'form-control'])}}
           
               </div>
               <div class="medium-4 cell">
                {{  Form::Label('pname','FullName')}}
                {{Form::text('pubfullname','',['class'=>'form-control'])}}
           </div>
           <div class="medium-4 cell">
            {{  Form::Label('pname','Contact email address')}}
            {{Form::email('pubemail','',['class'=>'form-control'])}}
       </div>
       <div class="medium-4 cell">
        {{  Form::Label('pname','Contact Telephone Number')}}
        {{Form::tel('pubtelephone','',['class'=>'form-control'])}}
    </div>

            <br>
                <legend style ="background:darkblue;color:white" class="w-auto">Publication details:</legend>
 
                <div class="cell">
                    {{  Form::Label('pname','Property Name')}}
                    {{Form::text('pname','')}}
               </div>
                 
            <div class="cell">
                {{  Form::Label('pfeatures','Features&Descriptions')}}
                {{Form::textarea('pfeatures','')}}
            </div>
            <div class="cell medium-4">
                {{  Form::Label('pcategory','Category')}}
                {{Form::select('pcategory',['rent'=>'For rent','sale'=>'For sale','auction'=>'For auction'])}}
            </div>
            <div class="cell medium-4">
                {{  Form::Label('pprice','price')}}
                {{Form::text('pprice','')}}
            </div>
            <div class="cell medium-4">
                    {{  Form::Label('postpayable','Method of payment')}}
                    {{Form::select('postpayable',['monthly'=>'Monthly','yearly'=>'Yearly','completely'=>'Completely'])}}
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
                    {{Form::text('powner','',['class'=>'form-control'])}}
                </div>
                <div class="cell medium-4">
                    {{  Form::Label('pprice',' Mobile Number for Owner of Property')}}
                    {{Form::text('ownertelno','')}}
                </div>
                <div class="cell medium-4">
                    {{ Form::Label('pimage','browse Property Image')}}
                    {{Form::file('p_image')}}   
                </div>
                <div class="cell medium-4">
                    {{ Form::Label('pimage','expiry ')}}
                    {{Form::date('expiryat',\Carbon\Carbon::now())}}   
                </div>
                   
                    <div class="cell medium-3">
                        {{  Form::Label('pprice','District')}}
                        {{Form::text('district','',['class'=>'form-control'])}}
                    </div>
                    <div class="cell medium-3">
                        {{  Form::Label('pprice','Sector')}}
                        {{Form::text('sector','',['class'=>'form-control'])}}
                    </div>
                    <div class="cell medium-3">
                        {{  Form::Label('pprice','Cell')}}
                        {{Form::text('cell','',['class'=>'form-control'])}}
                    </div>
                    <div class="cell medium-3">
                        {{  Form::Label('pprice','Village')}}
                        {{Form::text('village','',['class'=>'form-control'])}}
                    </div>
           
                 <div class="cell">
               
                 {{ Form::submit('SUBMIT',['class'=>'button'])}}
            </div>
        </div>
    </div>

            {!! Form::close() !!}
      
    @endsection