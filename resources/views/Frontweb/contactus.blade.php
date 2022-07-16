@extends('layout.page1')

@section('tittle', __('labels.backend.access.Home.contactus'))

@section('content')



<div style="background: url({{asset('assets/images/hero_2.jpg')}}) no-repeat" class="container-fluid px-1 py-5 mx-auto bg-pattern-style">
        <div class="layer"></div>
        <div class="row d-flex justify-content-center ">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center" style="position: relative; top: 200px;">

                <h3>{{__('translation.ContactFormT')}}</h3>
                
                <p class="" style="color: black; font-size: 14px; text-align: center;">{{__('translation.ContactFormP')}}</p>
                @if(session()->has('success'))
                            <div class="alert alert-success">
                            {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger" role="alert" >
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                <div class="card2" style="background-color: #ffff;">
                    <h5 class="text-center mb-4"></h5>
                    <form class="form-card" action="{{url('admin/postcontact')}}" method="POST">
                    @csrf

                       
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3 subscribe"> 
                                    <span class="text-danger"> *</span> {{__('translation.contactFN')}}</label> 
                                <input type="text" id="fname" name="fname" placeholder="{{__('translation.contactFN')}}"  style="text-align: right;" required></div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3 subscribe"> 
                                    <span class="text-danger"> *</span> {{__('translation.contactLN')}}</label> 
                                    <input type="text" id="lname" name="lname" placeholder="{{__('translation.contactLN')}}"  style="text-align: right;" required></div>

                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 subscribe"><span class="text-danger"> *</span>  {{__('translation.contactEmail')}}</label> <input type="email" id="email" name="email" placeholder="{{__('translation.contactEmail')}}" onblur="validate(3)" style="text-align: right;" required> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 subscribe"><span class="text-danger"> *</span>  {{__('translation.contactPNumber')}}</label> <input type="number" id="mob" name="mobile" placeholder="{{__('translation.contactPNumber')}}" onblur="validate(4)" style="text-align:right ;" required> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3 subscribe">{{__('translation.Messagess')}}<span class="text-danger"> *</span></label> <textarea type="textarea" id="ans" name="message" placeholder="" onblur="validate(6)" style="text-align:right ;" required></textarea>                                </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block " style="background-color: #b39b55;color: #fff; border-radius: 25px; position:relative; right: 200px; ">{{__('translation.contactMessage')}}</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection