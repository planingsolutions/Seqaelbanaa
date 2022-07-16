@extends('layout.service1')
@foreach($serv3 as $serv3)

@section('tittle',$serv3->Tittle)

@section('content')


<div class="section">
        <div class="container">
            <div class="row mb-5">

                <div class="col-md-6">
                    <svg viewbox="0 0 50 50" width="50" height="50" style="width: 100%; margin:auto; background-image:url(/seqaelbanaa/public/img/{{$serv3->Images}});">
  <defs>
    <mask id="mask" x="0" y="0" width="100" height="49">
      <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
      <text x="20" text-anchor="middle" y="50" dy="0">S</text>
      <text x="25" id="ltrV" text-anchor="middle" y="50" dy="0">V</text>
      <text x="30" text-anchor="middle" y="50" dy="0">G</text>
    </mask>
  </defs>
  <rect x="0.5" y="0.5" width="49" height="49" mask="url(#mask)" fill-opacity="1" fill="#E3DFD2"/>
</svg>
                </div>
                <div class="col-lg-6 text-lg-end" style="top:100px">
                
                    <h2>{{$serv3->Tittle}}</h2>
                    <p>{{$serv3->Paragraph1}}</p>
                </div>
@endforeach
            </div>
        </div>
    </div>

    @endsection