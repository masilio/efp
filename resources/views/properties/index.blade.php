
@foreach ($properties as $item)
    
@endforeach


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        .section{
            margin-left: auto;
            margin-right: auto;
            width: 98%;
            margin-left: 1%;
            margin-right: 1%;
        }

       
        header{
            background-color: paleturquoise;
            height: 200px;
            width: 100%;
            position:fixed;
            top: 0;
           
        }

        nav{
            height:auto;
            width: 100%;
            position:fixed;
            top: 30%;
        }

        main{
            height: auto;
            width: 100%;
           margin-top: 21%;
           
           
        }
        .sliders{
            background-color:darkgray;
            height: 300px;
            width: 80%;
            float: left;
            margin-top: 1%;
           
        }

        aside{
            background-color: #000080;
            height: 300px;
            width: 20%;
            margin-top: 1%;
            float: left;
           
            right: 1%;
           
           
        }
        .mainContent{
            height: auto;
            width: 100%;
            float: left;
           margin-top: 0%;
            
        }


img{
     width: 20%;
 }
footer{
    background-color: seagreen;
        height: 50px;
       float: left;
       width: 100%;
        }
        
        @media only screen and (max-width: 676px) {
            body {
                background-color: lightblue;
            }
            
           header{
            height:200px;
            }
           nav{
               height: 100px;
               float:top;
               text-align: center;
           }
            main{
                width: 100%;
            }

            .sliders{
                height: 300px;
                margin-top: 78%;
            
            }

            .mainContent{}

            aside{
                width: 100%;
            }
            .flexslider{
                margin-top: 400px;
                height: 300px;

            }

           
}
    </style>
</head>

    @extends('layouts.app')
    @include('inc.top-off-canvas')
    
    <div class="section">
            <header> 
              <div class="grid-x">
                <div class="columns small-2"><h3><a href="#">Unified Property</a></h3> </div>
                <div class="columns small-10"> @include('inc.bannerAds')    </div>
                </div>                
         
                     
            </header>

            <nav>@include('inc.topmenu')</nav>
       
       
        <main>
         
            <article class="sliders">
                 @include('inc.topservicesslider')
            </article>
          
            
            <aside>@include('inc.ourservices')</aside>

            
        <article class="mainContent">
           
              <!-- About Section -->
          <section id="about">
            <div class="row">
                <div class="section-title"><h2>Who We Are</h2></div>
            
            <p>Unified property is a web-based application platform whicth facilitates individuals want houses to rent,to sale and auction for various items.</p>
        
           </div>
        </section>
              
        
        <section id="rent">
           <div class="section-title"> <h2>Available houses for rent</h2></div>
            <div class="row">
          
              @foreach ($properties as $p)
              @if ($p->pcategory =='rent')
              <div class="columns small-4">
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
                </div>
              @endif
          @endforeach
          </div>
          </section>

           
<!-- sale Section -->
<section id="sale">
   <div class="section-title"><h2>Available Houses for sale</h2>
   </div>
      
    <div class="row">
      @foreach ($properties as $p)
  
      @if ($p->pcategory =='sale')
      <div class="columns small-4">
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
    </div>
  @endif
  @endforeach
  
  </div>
  </section>

  <!-- auction Section -->
<section id="auction">
    <div class="section-title">
      <h2>Items Available for auction</h2>
    </div>
    <div class="row">
        @foreach ($properties as $p)
        @if ($p->pcategory =='auction')
        <div class="columns small-4">
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
        </div>
  @endif
  @endforeach
  </div>
  </section>
<!-- Contact Section -->
<section id="contact">
    <div class="section-title">
      <h2>Don't hesiste to contact us!. Please  feel free to fill out the form below:</h2>
    </div>
   
      <div class="row">
        <div class="colmuns small-12 large-expand">
         
          <form name="sentMessage" id="contactForm" novalidate>

            <div class="grid-container">
                <div class="grid-x grid-padding-x">

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
      
      <div class="cell">
      <button type="submit" class="button">Submit</button>
      </div>
      </div>
    </div>
    </form>
    </div>
    
      <div class="columns small-12 contact-info">
        
          <div class="social">
            <div class="phone">
                <p><span>Call us on :</span> (+250)784820125</p>
              </div>
              <ul>
                <li><a href="#"><i class=" fi fi-social-facebook"></i></a></li>
                <li><a href="#"><i class="fi fi-social-twitter"></i></a></li>
              </ul>
     
      </div>
  
    </div>
  </div>
   
  </section>
        </article>


        </main>

       
        <footer>
            <div class="container text-center">
                <p>&copy; 2020. Design by <a href="" rel="nofollow">Software Innovator[FELIX]</a></p>
              </div>
        </footer>
    </div>
        
   

    
