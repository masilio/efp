@php
    use App\PostingPlan;
@endphp

<style>
.div-info{
    background-color: white;
    line-height: 2%;
    margin-top: 10%;
    border: 1px solid red;
    border-radius: 10%;
}
#button{
    margin-top: 8%;
}
#offCanvasTop{
height: auto;
}

</style>

    <div class="off-canvas position-top " data-transition="overlap " id="offCanvasTop" data-off-canvas>
         <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
       <div class="grid-x grid-padding-x">
           <div class="cell">
            <p><strong><i class="text-center">Kindlly observe the description of our posting plans below before continueing.</i></strong></p>
           </div>

           <div class="cell">
            Payment modes:
            <ul>
                <ol>
                    Using Mobile Money  To: 00000000000
                </ol>
                <ol>
                 by making a bank transfer to our bank account number (A&M Bank): 000-000000-0-0000-0
                </ol>
            </ul>
            <br>

            <ul class="menu icon-top">
                <li>
                    <i class="fi-alert &#xf72;"></i>
                    Mind that your publishment will be appearing online,after proccessing required payment.
                   
                    
                </li>
            </ul>
           
           </div>
          
       
            <div class="small-6 cell">
                
                <div  class ="callout info">
                    @foreach (PostingPlan::all() as $pp)

                    @if ($pp->type =='featured')
                    <p style="background:blue;color:white;padding:5px">Featured Property!</p>
                    <table>
                        <tbody>
                        <tr>
                            <th>Posting Cost:</th>
                            <td><p>{{$pp->pcost}} <b>frws</b></p></td>
                        </tr>
                        <tr>
                            <th>Addition Information:</th>
                            <td>
                               <p>{{$pp->pdescriptions}}</p></td>
                        </tr>
                        </tbody>
                    </table>
                    


                    @endif
                        
                    @endforeach
                </div>
            </div>
            <div class="small-6 cell">
                
                <div  class ="callout info">
                    @foreach (PostingPlan::all() as $pp)

                    @if ($pp->type =='superfeatured')
                    <p style="background:blue;color:white;padding:5px">SuperFeatured Property!</p>
                     <table>
                         <tbody>
                         <tr>
                             <th>Posting Cost:</th>
                             <td><p>{{$pp->pcost}} <b>frws</b></p></td>
                         </tr>
                         <tr>
                             <th>Addition Information:</th>
                             <td>
                                <p>{{$pp->pdescriptions}}</p></td>
                         </tr>
                         </tbody>
                     </table>
                     

                     
                    @endif
                        
                    @endforeach
                </div>
            </div>
            <div class="cell"></div>
            <div class=" cell text-center"> <a  class ="button " href="{{route('properties.create')}}">Continue</button></a></div>
           
    </div>
    
</div>
     
