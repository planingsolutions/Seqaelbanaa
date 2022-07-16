@extends('layout.page2')
@section('tittle', __('translation.nav_About'))

@section('content')
 <!-------------------------------------CEO start-------------------------------------------------->

 <section class="features-1">
        <div class="container">
            <div class="row" >
                <div class="col-xl-10 col-lg-10 col-md-10 ceo" data-aos="fade-up" data-aos-delay="300">
                   @foreach($sectionOne as $sectionOne)
                    <div class="box-feature ceobox">
                        <img src="{{asset('public/img/'.$sectionOne->Images)}}" class="ceoimg">


                        <div class="col-xl-6 col-lg-6 col-md-6 ceoword" data-aos="fade-up" data-aos-delay="300">

                            <h2 class="ceoh2">{{$sectionOne->Tittle}}</h2>
                            <p class="ceop">{{$sectionOne->Paragraph1}}</p>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>






    <!-----------------------------------CEO end------------------------------------------------------------------->


    <!-------------------------------------our story start-------------------------------------------------------------------------->
    <div class="section section-4 border-top">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold heading  mb-4 texty">{{__('translation.aboutusss')}}</h2>
                    @foreach($sectionTwo as $sectionTwo)
                    <p class="text-black-50" style="text-align: center;">{{$sectionTwo->Tittle}}</p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">


                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="video-testimonial-block">
                        <div class="video-thumbnail"></div>
                        <div class="video">
                            <iframe src="{{asset('public/img/'.$sectionTwo->vedio)}}" allowfullscreen>
                            </iframe>
                        </div>
                        <a href="" class="video-play"></a>
                    </div>

                </div>


                <div class="col-lg-6" style="text-align:center ;">
                    <h2>{{$sectionTwo->Paragraph1}}</h2>
                    <p>{{$sectionTwo->Paragraphh}}</p>
                </div>
@endforeach
            </div>
        </div>
        <!--------------------------------------------our story end---------------------------------------------------------------------------->

        <!---------------------------------------------our team start--------------------------------------------------------------------------------------->
        
        <div class="section sec-testimonials bg-light">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold heading  mb-4 mb-md-0 texty" style="text-align:center ;"> {{__('translation.Teamwork')}}</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-md-12 text-md-end">
                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev">{{__('translation.Per')}}</span>
                            <span class="next" data-controls="next">{{__('translation.next')}}</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slider-wrap" dir="ltr">
                    <div class="testimonial-slider">
                        @foreach($Teamwork as $Teamwork)
                        <div class="item" style="margin-bottom:20px ;">
                            <div class="testimonial">
                                <div class="col-md-3">
                                    <div class="bg-white p-3 text-center rounded box" style="width: 300px;"><img class="img-responsive rounded-circle" src="{{asset('public/img/'.$Teamwork->Images)}}" width="90">
                                        <h5 class="mt-3 name">{{$Teamwork->Tittle}}</h5>
                                        <div class="mt-4 about"><span>{{$Teamwork->Paragraph1}}&nbsp; </span></div>
                                        <div class="mt-4">
                                            <ul class="social list-unstyled list-inline dark-hover">
                                            @foreach($Footerdetails as $Fnn)
                                                <li class="list-inline-item"><a href="{{$Fnn->twitter}}" target="_blank"><span class="icon-twitter"></span></a></li>
                                                <li class="list-inline-item"><a href="{{$Fnn->facebook}}" target="_blank"><span class="icon-facebook"></span></a></li>
                                                <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone={{$Fnn->whatsapp}}&text={{__('translation.whatsappMsg')}}" target="_blank"><span class="icon-whatsapp"></span></a></li>
                                                <li class="list-inline-item"><a href="{{$Fnn->instgram}}" target="_blank"><span class="icon-instagram"></span></a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
  

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------our team end--------------------------------------------------------------------------->



@endsection