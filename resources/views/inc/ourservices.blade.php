
@php
    use App\Service;
@endphp


<style>
.mycanvas{
        
        width: 70%;
        margin-bottom: 23%;
        margin-right: 40%;
        height: auto;

    }
    .title{
        background-color: yellowgreen;
    }
    .d-row{
         background-color: white;
         margin-left: 2%;
         margin-right: 2%;
         width: 100%;
        margin-top:1%;
    }
</style>
<div class="row">
    <p class="title"><b><i><marquee behavior="" direction="">Our services we provide!</marquee></i></b></p>
    <ul class="menu">
       
    @foreach (Service::all() as $item)
        <li class=" d-row"><a  data-toggle="revealService{{$item->id}}">{{$item->service_name}}</a></li>
    <div class="mycanvas reveal " id="revealService{{$item->id}}" data-reveal>
        <!-- Close button -->
    <button class="close-button" data-close aria-label="Close reveal" type="button">
       <span aria-hidden="true">&times;</span>
     </button>
      <div class="row">
          {{$item->service_body}}
    </div>
    
    </div>
        @endforeach

    </ul>
</div>


