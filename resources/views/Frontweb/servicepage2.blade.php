@extends('layout.service1')
@foreach($Mainsection as $Mainsection)

@section('tittle',$Mainsection->Tittle)

@section('content')
<div class="p-5 paragraph" >
    <h3 class="p-3 texty" >{{$Mainsection->Tittle}}</h3>
    <p style="text-align: center;">{{$Mainsection->Paragraph1}}</p>
    </div>
<div class="row justify-content-between mb-5">
   
    <div class="col-lg-6 mb-5 mb-lg-0 p-5" >
        <div class="imagee" style="background-image: url(/seqaelbanaa/public/img/{{$Mainsection->Images}});">
        @endforeach
    <div ></div>
    <div></div>
    <div></div>
  </div>
</div>

<div class="col-lg-6 p-5" style="top:200px;" >

    <div class="accordion" id="accordionExample">
      @foreach($cat1 as $cat1)
  <div class="card"> 
    <div class="card-header" style="width: 100%;" id="headingOne">
      <h5 class="mb-0">
        
        <button class="  collap-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" > 
          <i class="fas fa-angle-down	 collap" ></i>
           {{$cat1->Tittle}} <i class="fas fa-building">   </i>
           
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body subscribe">
        {{$cat1->Paragraph1}} </div>
    </div>
  </div>
  @endforeach
  @foreach($cat2 as $cat2)
  <div class="card">
    <div class="card-header" style="width: 100%;" id="headingTwo">
      <h5 class="mb-0">
        <button class=" collap-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
          <i class="fas fa-angle-down	collap " ></i>
            {{$cat2->Tittle}} <i class="fas fa-home"></i>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body subscribe" >
        {{$cat2->Paragraph1}}  </div>
    </div>
  </div>
  @endforeach
  @foreach($cat3 as $cat3)
  <div class="card">
    <div class="card-header" style="width: 100%;" id="headingThree">
      <h5 class="mb-0">
        <button class=" collap-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="fas fa-angle-down	collap" ></i>
            {{$cat3->Tittle}}<i class="fas fa-university"></i>     </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body subscribe" >
        {{$cat3->Paragraph1}}</div>
    </div>
  </div>
  @endforeach
</div>

</div>




</div>
    
    
    </div>



@endsection