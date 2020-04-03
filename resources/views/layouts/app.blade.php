
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniPro</title>
    
     
<!-- Stylesheet
    ================================================== -->
  
    <link rel="stylesheet" type="text/css"  href="{{asset('css/foundation.min.css')}}">
    
    <link rel="stylesheet" type="text/css"  href="{{asset('css/dataTables.foundation.min.css')}}">

    <link rel="stylesheet" type="text/css"  href="{{asset('css/jquery.modal.min.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/foundation-icons/foundation-icons.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/owl.carousel.css')}}">
    
  </head>

  <body>
   
        @include('inc.messages')  
        @yield('content')
  
<!-- javascript
    ================================================== -->
  <script src="{{asset('js/jquery-3.4.1.min.js') }}"></script> 
  <script src="{{asset('js/foundation.min.js')}}"></script> 
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{asset('js/dataTables.foundation.min.js')}}"></script> 
     <script type="text/javascript" src="{{asset('js/jquery.modal.min.js')}}"></script> 
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    
     <script>  $(document).foundation();</script>
          <script>
            $(function(){
              $('#myTable').DataTable();
              $("#owl-slider").owlCarousel({
        
                              slideSpeed : 300,
                              paginationSpeed : 400,
                              singleItem:true,
                              autoPlay:true,
                              autoplayTimeout:1000,
                              autoplayHoverPause:true,
                              navigation : false// Show next and prev buttons
                      });
            });
       
          </script>
  </body>
</html>







             
    