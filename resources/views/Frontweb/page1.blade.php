@extends('layout.page1')
@section('tittle', 'Seqa Elbanna')

@section('content')
<div class="hero" dir="ltr">
        <div class="hero-slide">
        @foreach($slider as $slider)

        <div class="img overlay" style="background-image: url(/seqaelbanaa/public/img/{{$slider->Images[0]}})"></div>
        <div class="img overlay" style="background-image: url(/seqaelbanaa/public/img/{{$slider->Images[1]}})"></div>
        @endforeach

        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center" style="top:120px">
                @foreach($sliderT as $sliderT)
                    <h1 class="heading" data-aos="fade-up">{{$sliderT->Tittle}}</h1>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="200">
                        <button type="submit" class="btn btn-primary search-button">{{__('translation.search')}}</button>
                        <input type="text" class="form-control px-4" placeholder="" style="height:45px ;">
                    </form>
                @endforeach
                </div>
            </div>
        </div>

    </div>
    <section class="features-1 box">
        <div class="container">
            <div class="row">
                @foreach($component as $component)
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="{{$component->Paragraph1}}" style="direction:rtl;"></span>
                        <h3>{{$component->Tittle}}</h3>
                    </div>
                </div>
               
                
                @endforeach
            </div>
        </div>
    </section>
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                @foreach($vision as $vision)
                <div class="col-lg-6 text-lg-start">
                    <img src="{{asset('public/img/'.$vision->Images)}}" class="logoo">
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>{{$vision->Tittle}}</p>
                </div>
@endforeach
            </div>
        </div>
    </div>
    <!------------------CEO start---------------------->

    <!------------------CEO end-------------------------------->
    <!--- aboutus start--->
    <div class="section section-5">
        <div class="container">
            <div class="row justify-content-center  text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading texty  mb-4">{{__('translation.aboutusPage1')}}</h2>
                    @foreach($aboutM as $aboutM)
                    <p class="text-black-50 about">{{$aboutM->Tittle}}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row " style="margin:15px;">
        @foreach($aboutCat as $aboutCat)
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="h-100 person">
                    <img src="{{asset('public/img/'.$aboutCat->Images)}}" alt="Image" class="img-fluid">
                    <div class="person-contents">
                        <h2 class="mb-5"><a href="#">{{$aboutCat->Tittle}}</a></h2>
                        <p>{{$aboutCat->Paragraph1}}</p>
                    </div>
                </div>
            </div>
        @endforeach


            <!-----------------------------------about end-------------------------------------------------->


            <!------------------------------------------------------services start------------------------------------->

            <div class="section-block-grey">
                <div class="container">
                    <div class="section-heading center-holder" style="text-align:center;">
                        <h3 class="texty">{{__('translation.ServicessPage1')}}</h3>
                        <div class="section-heading-line"></div>
                        @foreach($servM as $servM)
                        <p class="paragraph">{{$servM->Tittle}}</p>
                        @endforeach
                    </div>
                    <div class="row mt-60 directionss">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                                <div class="serv-section-desc directionss">
                                    @foreach($query as $stage1)
                                    <h4 style="color: black;"><a href="{{url('serviceDep1')}}" style="text-decoration: non; color:black;"> {{$stage1->Tittle}}</a></h4>
                                    <h5></h5>
                                    @endforeach
                                </div>
                                <div class="section-heading-line-left"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="serv-section-2 serv-section-2-act  directionss">
                                <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
                                <div class="serv-section-desc">
                                @foreach($serv2 as $stage1)

                                    <h4> <a href="{{url('serviceDep2')}}" style="text-decoration: non; color:black;">{{$stage1->Tittle}}</a> </h4>
                                    <h5></h5>
                                    @endforeach

                                </div>
                                <div class="section-heading-line-left"></div>

                            </div>
                        </div>


                    </div>
                    <div class="row mt-60  directionss">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i></div>
                                @foreach($serv3 as $stage3)
                                <div class="serv-section-desc directionss">
                                    <h4> <a href="{{url('serviceDep3')}}" style="text-decoration: non; color:black;">{{$stage3->Tittle}}</a>​</h4>
                                    <h5></h5>
                                </div>
                                @endforeach
                                <div class="section-heading-line-left"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="serv-section-2 serv-section-2-act directionss">
                                <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                                @foreach($serv4 as $stage4)

                                <div class="serv-section-desc">
                                    <h4><a href="{{url('serviceDep4')}}" style="text-decoration: non; color:black;">{{$stage4->Tittle}}</a></h4>
                                    <h5></h5>
                                </div>
                                @endforeach
                                <div class="section-heading-line-left"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------services end-------------------------------------->

            <!-------------------------------------------------------------------------------prijects start------------ ----------------------------->

            <div class="section">
                <div class="container">
                    <div class="row mb-5 align-items-center">
                        <div class="col-lg-6 text-lg-start">
                            <p style="text-align: end;"><a href="properties.html" target="_blank" class="btn btn-primary text-white py-3 px-4">{{__('translation.seeMore')}}</a></p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <h2 class="font-weight-bold  heading texty">{{__('translation.projectTittle')}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="property-slider-wrap" dir="ltr">
                                <div class="property-slider">
                                    @forelse($project as $project)
                                        <div class="property-item">
                                            <a href="{{route('Projectdetailes',$project->id)}}" class="img">
                                                <img src="/seqaelbanaa/public/img/{{$project->imagess[0]}}" alt="Image" class="img-fluid">
                                            </a>
                                            <div class="property-content">
                                                <div class="price mb-2"><span>{{$project->Tittle}}</span></div>
                                                <div>
                                                    <span class="d-block mb-2 text-black-50">{{$project->Paragraph1}}</span>
                                                    <span class="city d-block mb-3">{{$project->Paragraphh}}</span>
                                                    <div class="specs d-flex">
                                                        <span class="d-block d-flex align-items-center me-3"></span>
                                                        <span class="d-block d-flex align-items-center"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    @endforeach
                                </div>
                                <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                                    <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">{{__('translation.Per')}}</span>
                                    <span class="next" data-controls="next" aria-controls="property" tabindex="-1">{{__('translation.next')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-4 border-top">
                <div class="container">
                    @foreach($workMain as $workMain)
                    <div class="row justify-content-center  text-center mb-5">
                        <div class="col-lg-6">
                            <h2 class="font-weight-bold heading  mb-4 texty">{{__('translation.HowWeworkk')}}</h2>
                            <p class="text-black-50" style="text-align: center;">{{$workMain->Tittle}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!------------end projects----------------------------------------------------->

            <!------------------------------start how we work------------------------------------------------->
            <div class="row justify-content-between mb-5">

                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="img-about dots">
                        <img src="{{asset('public/img/'.$workMain->Images)}}" alt="Image" class="img-fluid works">
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4 how">
                    <div class="d-flex feature-h">
                        <div class="feature-text">
                        @foreach($workStage1 as $stage1)

                            <h3 class="heading">{{$stage1->Tittle}}</h3>
                            <p class="text-black-50" style="padding: 10px;">{{$stage1->Paragraph1}}</p>
                        @endforeach

                        </div>
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                    </div>
                    <div class="d-flex feature-h">
                        <div class="feature-text">
                        @foreach($workStage2 as $stage2)

                            <h3 class="heading">{{$stage2->Tittle}}</h3>
                            <p class="text-black-50" style="padding:10px;">{{$stage2->Paragraph1}}</p>
                        @endforeach
                        </div>
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                    </div>
                    <div class="d-flex feature-h">
                        <div class="feature-text">
                        @foreach($workStage3 as $stage3)

                            <h3 class="heading">{{$stage3->Tittle}}</h3>
                            <p class="text-black-50" style="padding: 10px;">{{$stage3->Paragraph1}}</p>
                        @endforeach
                        </div>
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>

                    </div>
                </div>

            </div>
            <!-------------------------------end how we work-------------------------------------->



          
    @endsection