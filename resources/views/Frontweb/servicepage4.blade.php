@extends('layout.service1')
@foreach($serv4M as $serv4M)

@section('tittle', $serv4M->Tittle)

@section('content')
<div class="p-5" style="text-align: center;">


<div class="row">
    <div class="col-md-6" style="top: 100px;">
        <h2 class="p-2 texty">{{$serv4M->Tittle}}</h2>
        <p class="about">{{$serv4M->Paragraph1}}</p>
        <p class="about">{{$serv4M->Paragraphh}}</p>
    </div>

    <div class="col-md-6">
        <section class="iq-features">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12"></div>
                    <div class="col-lg-6 col-md-12">
                        <div class="holderCircle">
                            <div class="round"></div>
                            <div class="dotCircle">
                                <span class="itemDot active itemDot1" data-tab="1">
                    <i class="fa fa-clock-o"></i>
                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot2" data-tab="2">
                    <i class="fa fa-comments"></i>
                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot3" data-tab="3">
                    <i class="fa fa-user"></i>
                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot4" data-tab="4">
                    <i class="fa fa-tags"></i>
                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot5" data-tab="5">
                    <i class="fa fa-upload"></i>
                    <span class="forActive"></span>
                                </span>
                                <span class="itemDot itemDot6" data-tab="6">
                    <i class="fa fa-briefcase"></i>
                    <span class="forActive"></span>
                                </span>
                            </div>
                            <div class="contentCircle">
                                @foreach($serv4C as $serv4C)
                                    <div class="CirItem title-box {{$serv4C->Paragraph3}}">
                                        <h2 class="title"><span>{{$serv4C->Paragraph1}}</span></h2>
                                        <p>{{$serv4C->Paragraphh}}</p>
                                        <i class="{{$serv4C->Tittle}}"></i>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12"></div>
                </div>
            </div>
        </section>
    </div>


</div>
</div>
@endforeach

    @endsection