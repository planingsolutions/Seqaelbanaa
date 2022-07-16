@extends('layout.service1')
@foreach($query as $Tittlee)

@section('tittle', $Tittlee->Tittle)

@endforeach
@section('content')

<section class="our-blog p-0 m-0 bg-silver">
        <div class="container work-process  pb-5 pt-5">
            <div class="title mb-5 p-5 text-center">
                <h3 class="texty">مراحل العمل في <span class="site-color">قسم المقاولات</span></h3>
            </div>
            <!-- ============ step 1 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-box process-left subscribe" data-aos="fade-right" data-aos-duration="1000">
                        <div class="row">
                        @foreach($stage1 as $stage1)

                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0" style="text-align: center;">المرحلة   {{$stage1->Tittle}}</p>
                                    <h2 class="m-0 p-0">{{$stage1->Paragraph3}}</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>{{$stage1->Paragraph1}}</h5>
                                <p><small>{{$stage1->Paragraphh}} </small></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 2 =========== -->
            <div class="row">

                <div class="col-md-5">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-box process-right subscribe" data-aos="fade-left" data-aos-duration="1000" style=" bottom: 32px;">
                        <div class="row">
                        @foreach($stage2 as $stage2)

                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0" style="text-align: center;">المرحلة</p>
                                    <h2 class="m-0 p-0">{{$stage2->Paragraph3}}</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>{{$stage2->Paragraph1}}</h5>
                                <p><small>{{$stage2->Paragraphh}}</small></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- ============ step 3 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-box process-left subscribe" data-aos="fade-right" data-aos-duration="1000" style=" bottom: 45px;">
                        <div class="row">
                            @foreach($stage3 as $stage3)

                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0" style="text-align: center;">المرحلة</p>
                                        <h2 class="m-0 p-0">{{$stage3->Paragraph3}}</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>{{$stage3->Paragraph1}}</h5>
                                    <p><small> {{$stage3->Paragraphh}}</small></p>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-point-right" style="bottom:118px ;"></div>
                </div>
            </div>
            <!-- ============ step 4 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-point-left" style="bottom:170px ;"></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-box process-right subscribe" data-aos="fade-left" data-aos-duration="1000" style=" bottom: 90px;">
                        <div class="row">
                            @foreach($stage4 as $stage4)

                                <div class="col-md-5">
                                    <div class="process-step">
                                        <p class="m-0 p-0" style="text-align: center;">المرحلة</p>
                                        <h2 class="m-0 p-0">{{$stage4->Paragraph3}}</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>{{$stage4->Paragraph1}}</h5>
                                    <p><small>{{$stage4->Paragraphh}}</small></p>
                                </div>
                                
                            @endforeach
                        </div>

                    </div>
                </div>


            </div>
            <!-- ============ step 5 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-box process-left subscribe" data-aos="fade-right" data-aos-duration="1000" style=" bottom: 125px;">
                        <div class="row">
                            @foreach($stage5 as $stage5)
                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0" style="text-align: center;">المرحلة</p>
                                    <h2 class="m-0 p-0">{{$stage5->Paragraph3}}</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>{{$stage5->Paragraph1}}</h5>
                                <p><small>{{$stage5->Paragraphh}}</small></p>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-point-right process-last" style="bottom:200px ;"></div>
                </div>
            </div>
            <!-- ============ -->
        </div>
    </section>

@endsection