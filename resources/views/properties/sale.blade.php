
@if (isset($sproperties))
@foreach ($sproperties as $p)
<div class="col-md-4">
  <div class="service-media">

      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/services/service-1.jpg" alt="Card image cap">
          <div class="card-body">
           
            <p class="card-text"><b>Features:</b>{{$p->pfeatures}}</p> 
            <p class="card-text"><b>Addresses:</b>{{$p->paddress}}</p> 
            <p class="card-text"><b>Price:</b>{{$p->pprice}} RWFS</p> 

          <a href="">Rent Now</a>
           
           </div>
</div>
</div>
</div>
@endforeach
@endif
