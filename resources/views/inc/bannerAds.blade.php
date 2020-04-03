
@php
use App\BannerAds;
@endphp

<style>
#bannerAds{
    width: 30%;
    float: right;
    margin-right: 2%;
    margin-top: 5px;
}

.mbutton{
    border: 1px solid green;
    margin-left: 200px;
    width: 14%;
    border-radius: 10px;
    background-color:mediumblue;
    color:white;

}
.pbody{
    border:1px solid red;
    border-radius: 15px;
    padding-left: 5px;
}
.my-icons{
   margin-top: 0;
   float: right;
}
.b-title{
    border-bottom: 1px solid blue;
}
</style>
                @foreach (BannerAds::all() as $b)
                <div  class ="callout small" id="bannerAds">
                 <span class="my-icons">
                    <a class="info"><i class="fi-info"></i> </a>
                    <a><i class="fi-x-circle"></i></a>
                 </span>
                    
                    <p class="b-title">{{$b->banner_title}}</p>
                    <p class="pbody">{{$b->banner_body}}</p>

                    <p class="mbutton">
                        <a href="{{$b->url_path}}" class="" target="_blank">Open</a>
                        </p>
                    </div>
                @endforeach
            
       