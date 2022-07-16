                <div class="footer-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="" method="post"> <input type="email" name="email"><input type="submit" value="{{__('translation.subscribe')}}"> </form>
                            </div>
                            <div class="col-lg-6 subscribe">
                                <h4>{{__('translation.newsletter')}}</h4>
                                <p>{{__('translation.newsPargraph')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 footer-info subscribe">
                                <h3>{{__('translation.aboutusssFooter')}}</h3>
                                @foreach($Footerdetails as $Footerdetails)
                                <p>{{$Footerdetails->Tittle}}</p>
                                <div class="social-links mt-3"> <a href="https://api.whatsapp.com/send?phone={{$Footerdetails->whatsapp}}&text={{__('translation.whatsappMsg')}}" class="twitter" target="_blank"><i class="bx bxl-whatsapp"></i></a> <a href="{{$Footerdetails->facebook}}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a> <a href="{{$Footerdetails->instgram}}" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                                    <a href="{{$Footerdetails->twitter}}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-links subscribe">
                                <h4>{{__('translation.Links')}}</h4>
                                <ul class="uly">
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('')}}">{{__('translation.nav_home')}}</a></li>
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('aboutseqaelbanaa')}}">{{__('translation.nav_About')}}</a></li>
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('AllProject')}}">{{__('translation.nav_Projects')}}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-links subscribe">
                                <h4>{{__('translation.ServicessPage1')}}</h4>
                                <ul class="uly ulyserv">
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('serviceDep1')}}">{{__('labels.backend.access.Home.servdep1')}}</a></li>
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('serviceDep2')}}">{{__('labels.backend.access.Home.servdep2')}}</a></li>
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('serviceDep3')}}">{{__('labels.backend.access.Home.servdep3')}}</a></li>
                                    <li><i class="bx bx-chevron-left"></i> <a href="{{url('serviceDep4')}}">{{__('labels.backend.access.Home.servdep4')}}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-contact" style="text-align: right;">
                                <h4 class="subscribe">{{__('translation.contactPage1')}} </h4>
                                <p> {{$Footerdetails->address}}<br> <br> <strong>{{__('translation.FooterTel')}}</strong> {{$Footerdetails->phone}} <br> <strong>{{__('translation.FooterEmail')}}</strong> {{$Footerdetails->email}} <br> </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="container">
                    <div class="copyright"> <strong> <a href="https://planing-solutions.com/">Planing solutions</a> <span>{{__('translation.from')}} </span></strong> &copy; 2022 <span>{{__('translation.CopyRight')}}</span> </div>
                </div>
