
<?php 
use App\TopSlider;
?>

<style>

  

#owl-slider .item img{
        display: block;
        width: 100%;
        height:300px;
    }

    .caption {
    position: absolute;
    font-size: 1.5em;
    top: 0;
    left: 15px;
    color:orange;
    text-shadow: 2px 2px 1px #000;
    padding-top: 0px;
    text-align: center;
    margin-top: 150px;
    margin-left: 200px;
    
}

</style>

<div id="owl-slider" class="owl-carousel owl-theme">
  @foreach (TopSlider::all() as $s)
  <div class="item">
      <img src="images/topimagesliders/{{$s->image_slider}}">
      <div class="caption"><h1 class="animated bounce">{{$s->caption}}</h1></div>
  </div>
  @endforeach
</div>
