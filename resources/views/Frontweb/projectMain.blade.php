@extends('layout.page3')

@section('tittle', 'مشاريعنا')
@section('content')
<div class="section section-properties">
        <div class="container">
            <div class="row">
            @forelse($project as $project)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="property-single.html" class="img">
                            <img src="/seqaelbanaa/public/img/{{$project->imagess[0]}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="property-content">
                            <div class="price mb-2"><span>{{$project->Tittle}}</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">{{$project->Paragraph1}}</span>
                                <span class="city d-block mb-3">{{$project->Paragraphh}}</span>
                                <div class="specs d-flex">
                                    <span class="d-block d-flex align-items-center me-3">

</span>
                                    <span class="d-block d-flex align-items-center">

</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
               
               
           
            </div>
            <div class="row align-items-center py-5">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6 text-center">
                    <div class="custom-pagination">
                        <a href="">1</a>
                        <a href="" class="active">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="">5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection