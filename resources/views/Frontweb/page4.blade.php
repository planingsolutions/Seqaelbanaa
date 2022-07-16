@extends('layout.page4')
@section('tittle', 'Exterior Design')

@section('content')
@foreach($Mainsection as $ms)
<section class="u-clearfix u-image u-section-1" id="carousel_acb1" data-image-width="1426" data-image-height="1080" style="background-image: url(/styleElite/public/img/{{$ms->Images[0]}});">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-style u-custom-color-1 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h5 class="u-text u-text-default u-text-1">{{$ms->Tittle}}<br>
            </h5>
            <h2 class="u-text u-text-2">{{$ms->Paragraph1}}</h2>
            
            <a href="#" class="u-active-white u-border-2 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-2" target="_blank">{{__('translation.Learn More')}}</a>
          </div>
@endforeach
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="aboutus">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" id="about">
            <div class="u-layout-row" id="our-work">
              <div class="u-container-style u-layout-cell u-left-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-palette-3-dark-2 u-shape u-shape-circle u-shape-1"></div>
                  <div class="u-shape u-shape-svg u-text-custom-color-1 u-shape-2">
                    <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7386"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-7386" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
                  </div>
                  @foreach($aboutsec1 as $absec1)
                  <div alt="" class="u-image u-image-circle u-preserve-proportions u-image-1" data-image-width="900" data-image-height="928" style="background-image: url(/styleElite/public/img/{{$absec1->Images[0]}});"></div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-1"> {{$absec1->Paragraph1}}</h2>
                  <p class="u-text u-text-2">{{$absec1->Paragraph2}}</p>
                  
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-top u-section-3" id="carousel_9d70">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                @foreach($aboutusTwoo as $secTwo)
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" data-image-width="390" data-image-height="378" style="background-image: url(/styleElite/public/img/{{$secTwo->Images[0]}});">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>

                <div class="u-align-center u-container-style u-custom-color-1 u-layout-cell u-size-20 u-layout-cell-2">

                <div class="u-container-layout u-container-layout-2">

                    <h5 class="u-text u-text-default u-text-1">{{__('translation.What we Do')}}</h5>
                    <div class="u-border-4 u-border-white u-line u-line-vertical u-line-1"></div>
                    @foreach($aboutusTwo as $sec2)  

                    <p class="u-text u-text-2">{{$sec2->Paragraph1}}</p>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-2" data-image-width="626" data-image-height="417" style="background-image: url(/styleElite/public/img/{{$sec2->Images[0]}});">
                  <div class="u-container-layout u-container-layout-3"></div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-center u-container-style u-layout-cell u-left-cell u-palette-3-dark-1 u-size-20 u-layout-cell-4">
                  <div class="u-container-layout u-container-layout-4">
                    @foreach($aboutusTwooo as $sectwoo)
                    <h5 class="u-text u-text-default u-text-3">{{(__('translation.About Us'))}}</h5>
                    <div class="u-border-4 u-border-white u-line u-line-vertical u-line-2"></div>
                    <p class="u-text u-text-4">{{$sectwoo->Paragraph1}}</p>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-20 u-image-3" data-image-width="626" data-image-height="417" style="background-image: url(/styleElite/public/img/{{$sectwoo->Images[0]}});">>
                  <div class="u-container-layout u-container-layout-5"></div>
                </div>
                @endforeach
                <div class="u-align-center u-container-style u-layout-cell u-palette-2-dark-3 u-right-cell u-size-20 u-layout-cell-6">
                  <div class="u-container-layout u-container-layout-6">
                    <h5 class="u-text u-text-default u-text-5">{{__('translation.Visions')}}</h5>
                    <div class="u-border-4 u-border-white u-line u-line-vertical u-line-3"></div>
                    <p class="u-text u-text-6">{{$secTwo->Paragraph1}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-align-left u-clearfix u-section-4" id="carousel_0b55">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1" id="colliction">
        <div class="u-container-style u-group u-group-1">
          @foreach($aboutsec3 as $aboutsec3)
          <div class="u-container-layout u-container-layout-1">
            <h5 class="u-custom-font u-font-montserrat u-text u-text-1"> {{$aboutsec3->Paragraph1}}</h5>
            <p class="u-text u-text-2">{{$aboutsec3->Paragraph2}}</p>
            <a href="#" class="u-active-custom-color-1 u-border-2 u-border-active-custom-color-1 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-button-style u-hover-custom-color-1 u-none u-text-active-white u-text-custom-color-1 u-text-hover-white u-btn-1">{{__('translation.Learn More')}}</a>
          </div>
        </div>
        <div class="u-custom-color-1 u-preserve-proportions u-shape u-shape-circle u-shape-1"></div>
        <div class="u-align-left u-image u-image-circle u-preserve-proportions u-image-1" data-image-width="1000" data-image-height="1000" style="background-image: url(/styleElite/public/img/{{$aboutsec3->Images[0]}});"></div>
        <div class="u-align-left u-image u-image-circle u-image-2" data-image-width="626" data-image-height="417" style="background-image: url(/styleElite/public/img/{{$aboutsec3->Images[1]}});"></div>
        <h3 class="u-custom-font u-font-montserrat u-text u-text-3">{{__('translation.Livingroom')}}</h3>
        <div class="u-custom-color-1 u-shape u-shape-circle u-shape-2"></div>
       @endforeach
      </div>
    </section>
    @foreach($services1 as $services1)
    <section class="u-align-center u-clearfix u-image u-section-5" id="servicess" data-image-width="1920" data-image-height="960" style="background-image: url(/styleElite/public/img/{{$services1->Images[0]}});">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h2 class="u-text u-text-body-alt-color u-text-1">{{$services1->Tittle}}</h2>
           
          </div>
        </div>
        @endforeach
        <div class="u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($services2 as $services2)
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-grey-10 u-icon u-icon-circle u-spacing-25 u-text-grey-50 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-078c"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-078c"><g><path d="m437 21c-36.219 0-66.522 25.808-73.491 60h-348.509c-8.284 0-15 6.716-15 15v380c0 8.284 6.716 15 15 15h422c41.355 0 75-33.645 75-75v-320c0-41.355-33.645-75-75-75zm-45 75c0-24.813 20.187-45 45-45s45 20.187 45 45v260.036c-12.543-9.436-28.131-15.036-45-15.036s-32.457 5.6-45 15.036zm45 365h-407v-350h332v305c0 8.284 6.716 15 15 15s15-6.716 15-15c0-24.813 20.187-45 45-45s45 20.187 45 45-20.187 45-45 45z"></path><path d="m316 141h-240c-8.284 0-15 6.716-15 15v260c0 8.284 6.716 15 15 15h240c8.284 0 15-6.716 15-15v-260c0-8.284-6.716-15-15-15zm-65 260v-25c0-8.284-6.716-15-15-15s-15 6.716-15 15v25h-130v-110h50v35c0 8.284 6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15h-15v-85c0-8.284-6.716-15-15-15s-15 6.716-15 15v35h-50v-90h210v90h-30v-45c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h15v30h-25c-8.284 0-15 6.716-15 15s6.716 15 15 15h85v110z"></path>
</g></svg></span>
                <h4 class="u-align-center u-text u-text-default u-text-grey-60 u-text-3">{{$services2->Tittle}}</h4>
                <p class="u-align-center u-text u-text-4">{{$services2->Paragraph1}}</p>
              </div>
            </div>
            @endforeach
        
      
          </div>
        </div>
      </div>
    </section>
    @foreach($services3 as $services3)
    <section class="u-clearfix u-section-6" id="carousel_db2c">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
        <div class="u-image u-image-circle u-image-1" data-image-width="390" data-image-height="378"style="background-image: url(/styleElite/public/img/{{$services3->Images[1]}});"></div>
        <div class="u-image u-image-circle u-image-2" data-image-width="900" data-image-height="900" style="background-image: url(/styleElite/public/img/{{$services3->Images[2]}});"></div>
        <div class="u-border-20 u-border-white u-image u-image-circle u-preserve-proportions u-image-3" data-image-width="625" data-image-height="417" style="background-image: url(/styleElite/public/img/{{$services3->Images[0]}});"></div>
        <div class="u-align-left u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">

            <h2 class="u-text u-text-default u-text-1"> {{__('translation.FrontServ')}}</h2>
            <p class="u-text u-text-2">{{$services3->Paragraph1}}
            </p>
            
            <a href="#" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2" target="_blank">{{__('translation.Learn More')}}</a>
          @endforeach
          </div>
        </div>
        <div class="u-custom-color-1 u-shape u-shape-circle u-shape-1"></div>
        <div class="u-preserve-proportions u-shape u-shape-svg u-text-custom-color-1 u-shape-2">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="#" xlink:href="#svg-410b"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-410b" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-height-50vw-xs u-palette-2-dark-3 u-section-7" id="projects">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"> {{__('translation.allProject')}}</h2>
        <p class="u-text u-text-2"> {{__('translation.ProjectP')}}</p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
          @foreach($projects as $projects)

            <div class="carousel-item active">
              <div class="wrapper">
                <div class="images">
                  <div class="img-1" style="background-image: url(/styleElite/Public/img/{{$projects->beforImg}});"></div>
                  <div class="img-2" style="background-image: url(/styleElite/Public/img/{{$projects->images}});"></div>
                </div>
                <div class="slider">
                  <div class="drag-line">
                    <span></span>
                  </div>
                  <input type="range" min="0" max="100" value="50">
                </div>
              </div>
            </div>
            @endforeach

          
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
       
        
      </div>
    </section>
    <!-- Form Section-->
    <section class="u-align-center u-clearfix u-section-8" id="carousel_87f5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-shape u-shape-svg u-text-custom-color-1 u-shape-1">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e858"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-e858" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-image u-image-circle u-image-1" data-image-width="1620" data-image-height="1080"></div>
        <div class="u-palette-3-light-3 u-shape u-shape-circle u-shape-2"></div>
        <div class="u-align-left u-container-style u-custom-color-2 u-expanded-width-xs u-group u-radius-15 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-body-color u-text-1"> {{__('translation.Tittle Form')}} </h2>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
              <form action="{{url('admin/postcontact')}}" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form-1" style="padding: 10px;">
                @csrf

                if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                  @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger" role="alert" >
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                
                <div class="u-form-group u-form-name u-label-top">
                  <label for="name-a736" class="u-label">{{__('translation.Name')}}</label>
                  <input type="text" placeholder="{{__('Forms.Main.Placeholder.Name')}}" id="name-a736" name="name" class="u-input u-input-rectangle u-radius-12 u-white" required="">
                </div>
                <div class="u-form-group u-form-phone u-label-top u-form-group-2">
                  <label for="phone-006f" class="u-label">{{__('translation.Phone')}}</label>
                  <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="{{__('Forms.Main.Placeholder.Phone')}}" id="phone-006f" name="phone" class="u-input u-input-rectangle u-radius-12 u-white" required="">
                </div>
                <div class="u-form-email u-form-group u-label-top">
                  <label for="email-a736" class="u-label">{{__('translation.Email')}}</label>
                  <input type="email" placeholder="{{__('Forms.Main.Placeholder.Email')}}" id="email-a736" name="email" class="u-input u-input-rectangle u-radius-12 u-white" required="">
                </div>
                <div class="u-form-address u-form-group u-label-top u-form-group-4">
                  <label for="address-daf5" class="u-label">{{__('translation.Address')}}</label>
                  <input type="text" placeholder="{{__('Forms.Main.Placeholder.Address')}}" id="address-daf5" name="Address" class="u-input u-input-rectangle u-radius-12 u-white" required="">
                </div>
                <div class="u-form-group u-form-textarea u-label-top u-form-group-5">
                  <label for="textarea-119d" class="u-label">{{__('translation.Home Area')}}</label>
                  <textarea rows="4" cols="50" id="textarea-119d" name="HomeArea" class="u-input u-input-rectangle u-radius-12 u-white" required="" placeholder="{{__('Forms.Main.Placeholder.HomeArea')}}"></textarea>
                </div>

                <button type="submit" class="u-active-black u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-palette-3-light-3 u-radius-12 u-btn-1">{{__('Forms.Main.Placeholder.Submit' )}}</button>
    
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                <input type="submit" value="submit" class="u-form-control-hidden">

                </div>
                <div class="u-form-send-message u-form-send-success"> {{__('translation.EndOfForm')}}</div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
        <div class="u-shape u-shape-svg u-text-custom-color-1 u-shape-3">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a0bf"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-a0bf" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
      </div> 

    </section>

@endsection