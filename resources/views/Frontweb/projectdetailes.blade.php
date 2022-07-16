@extends('layout.service1')
@section('content')
<div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7" >
                    <div class="img-property-slide-wrap" dir="ltr">
                        <div class="img-property-slide">
                            @forelse($Projectdeta as $Projectdeta)
                            <img src="/seqaelbanaa/public/img/{{$Projectdeta->imagess[0]}}" alt="Image" class="img-fluid">
                            <img src="/seqaelbanaa/public/img/{{$Projectdeta->imagess[1]}}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 subscribe" style=" top: 80px;">
                    <h2 class="heading  texty">{{$Projectdeta->Tittle}}</h2>
                    <p class="meta">{{$Projectdeta->Paragraphh}}</p>
                    <p>{{$Projectdeta->Paragraph4}}</p>
                    <br>
                    <p>{{$Projectdeta->Paragraph5}}</p>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection