
@extends('layouts.app')

@section('content')
<div class="grid-container fluid">
<div class="grid-x grid-margin-x">
  @include('inc.top-off-canvas')
 <div class="cell">
<!-- Navigation
      ==========================================-->
      @include('inc.topmenu')
 
 </div>


    <div class="cell">
      @include('inc.topservicesslider')

    </div>
      
   
  <div class="sections">

  <div class="cell">
    <!-- About Section -->
<section id="about">
  <div class="cell medium-6">
    <div class="about-text">
      <h2>Who We Are</h2>
    <p>Unified property is a web-based application platform whicth facilitates individuals want houses to rent,to sale and auction for various items.</p>
  </div>
</div>
</section>

  </div>

  <div class="cell">
    <!-- Services Section -->
<section id="rent">
  <div class="section-title">
    <h2>Available houses for rent</h2>
  </div>
  <div class="grid-x grid-margin-x small-up-2 medium-up-3">

    @foreach ($properties as $p)
    @if ($p->pcategory =='rent')
    <div class="cell">
      <div class="card">
        <img  src="{{asset('images/properties/' .$p->p_image)}}"  alt="rent">
              
        <div class="card-section">
          <p class="card-text"><b>Features:</b>{{$p->pfeatures}}</p>  
          <p class="card-text"><b>Addresses:</b>{{$p->district}},{{$p->sector}},{{$p->cell}},{{$p->village}}</p> 
          <p class="card-text"><b>Price:</b>{{$p->pprice}} RWFS</p> 
          <p class="card-text"><b>Contact Person:</b>{{$p->ownertelno}} </p> 

        <a href="">Rent Now</a>
        </div>
      </div>
   
    @endif
  
@endforeach
</div>
</div>
</section>
  </div>

<div class="cell">

  
<!-- Gallery Section -->
<section id="sale">
  <div class="section-title">
    <h2>Available Houses for sale</h2>
  </div>
  <div class="grid-x grid-margin-x small-up-2 medium-up-3">
    @foreach ($properties as $p)

    @if ($p->pcategory =='sale')
    <div class="cell">
      <div class="card">
        <img src="{{asset('images/properties/' .$p->p_image)}}"  alt="rent">
              
        <div class="card-section">
          <p class="card-text"><b>Features:</b>{{$p->pfeatures}}</p>  
          <p class="card-text"><b>Addresses:</b>{{$p->district}},{{$p->sector}},{{$p->cell}},{{$p->village}}</p> 
          <p class="card-text"><b>Price:</b>{{$p->pprice}} RWFS</p> 
          <p class="card-text"><b>Contact Person:</b>{{$p->ownertelno}} </p> 

        <a href="">Sale Now</a>
        </div>
      </div>
@endif
@endforeach
</div>
</div>
</section>
</div>

<div class="cell">

  
<!-- auction Section -->
<section id="auction">
  <div class="section-title">
    <h2>Items Available for auction</h2>
  </div>
  <div class="grid-x grid-margin-x small-up-2 medium-up-3">
      @foreach ($properties as $p)
      @if ($p->pcategory =='auction')
      <div class="cell">
        <div class="card">
          <img src="{{asset('images/properties/' .$p->p_image)}}"  alt="rent">
                
          <div class="card-section">
            <p class="card-text"><b>Features:</b>{{$p->pfeatures}}</p>  
                  <p class="card-text"><b>Addresses:</b>{{$p->district}},{{$p->sector}},{{$p->cell}},{{$p->village}}</p> 
                  <p class="card-text"><b>Price:</b>{{$p->pprice}} RWFS</p> 
                  <p class="card-text"><b>Contact Person:</b>{{$p->ownertelno}} </p> 

                  <a href="{{ URL::to('auctionbidders/'.$p->id )}}" rel="modal:open" class="button" id="openModal">Join auction </a>

         
         
          </div>
        </div>
@endif
@endforeach
</div>
</div>
</section>
</div>

 <div class="cell">

  
<!-- Contact Section -->
<section id="contact">
  <div class="section-title">
    <h2>Don't hesiste to contact us!. Please  feel free to fill out the form below:</h2>
  </div>
 
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
      <div class="cell medium-8">
       
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="cell medium-4">
          <input type="text" id="name" placeholder="Full Name" required="required">
          <p class="help-block text-danger"></p>
        </div>
      <div class="cell medium-4">
          <input type="email" id="email" placeholder="Email" required="required">
          <p class="help-block text-danger"></p>
        </div>
    <div class="cell">
      <textarea name="message" id="message" rows="4"placeholder="Message" required></textarea>
      <p class="help-block text-danger"></p>
    </div>
    <div id="success"></div>
    <div class="cell">
    <button type="submit" class="button">Submit</button>
    </div>
  </form>

  </div>
  <div class="cell medium-4">
    <div class="cell medium-3  contact-info">
      <div class="contact-item">
        <p><span>Phone</span> +250784820125</p>
      </div>
      <div class="contact-item">
        <div class="social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
      </div>
    </div>

  </div>
</div>
 
</section>
 </div>

  </div>

</div>

</div>

<!-- Footer Section -->
<div id="footer">
<div class="container text-center">
  <p>&copy; 2020. Design by <a href="" rel="nofollow">Software Innovator[FELIX]</a></p>
</div>
</div>

    
@endsection
</div>
