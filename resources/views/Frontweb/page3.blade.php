@extends('layout.page3')
@section('tittle', 'interior de​sign')

@section('content')
  @foreach($mainsection as $mainsection)

    <section class="u-align-left u-clearfix u-image u-section-1" id="carousel_a69a" data-image-width="720" data-image-height="1080" style="background-image: url(/styleElite/public/img/{{$mainsection->Images[0]}});">
      <div class="u-clearfix u-sheet u-sheet-1">

        <h2 class="u-text u-text-palette-3-base u-text-1" data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction="">{{$mainsection->Tittle}}</h2>
  @endforeach
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
@foreach($mainsectionCompontent as $components)
            <div class="u-container-style u-list-item u-opacity u-opacity-70 u-palette-5-dark-3 u-repeater-item u-list-item-1" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-bottom-xs u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-3-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5fe5"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-5fe5"><path d="m13.03 1.87-10.99-1.67c-.51-.08-1.03.06-1.42.39-.39.34-.62.83-.62 1.34v21.07c0 .55.45 1 1 1h3.25v-5.25c0-.97.78-1.75 1.75-1.75h2.5c.97 0 1.75.78 1.75 1.75v5.25h4.25v-20.4c0-.86-.62-1.59-1.47-1.73zm-7.53 12.88h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm5 9h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75z"></path><path d="m22.62 10.842-7.12-1.491v14.649h6.75c.965 0 1.75-.785 1.75-1.75v-9.698c0-.826-.563-1.529-1.38-1.71zm-2.37 10.158h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75z"></path></svg></span>
                  <h4 class="u-custom-font u-font-open-sans u-text u-text-2">{{$components->Paragraph1}}</h4>
                  <p class="u-text u-text-3">{{$components->Paragraph2}}</p>
                </div>
            </div>
@endforeach
          </div>
        </div>
      </div>
    </section>
  
    <section class="u-clearfix u-section-2" id="About">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
          @foreach($about1 as $about1)

            <div class="u-layout-row">
              <div class="u-size-20">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-image u-layout-cell u-size-60 u-image-1" data-image-width="720" data-image-height="1080" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="" style="background-image: url(/styleElite/public/img/{{$about1->Images[0]}});">
                   
                  </div>
                </div>
              </div>
              <div class="u-size-40">
                <div class="u-layout-col">
                  <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2" >
                    <div class="u-container-layout u-container-layout-2">
                      <h2 class="u-text u-text-3">{{__('translation.AboutTittlePage3')}}</h2>
                      <div class="u-border-10 u-border-palette-3-base u-line u-line-horizontal u-line-1"></div>
                      <p class="u-text u-text-4"> {{$about1->Paragraph1}}</p>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <p class="u-text u-text-5"> {{$about1->Paragraph2}}</p>
                      <a href="#" class="u-border-none u-btn u-button-style u-palette-3-base u-btn-1">{{__('translation.More')}}</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-3" id="carousel_3cf4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h6 class="u-align-left u-text u-text-1">{{__('translation.Section2 Tittle')}}&nbsp;<br>
                  </h6>
                  @foreach($aboutmain as $aboutmain)
                  <p class="u-align-justify u-text u-text-2"> {{$aboutmain->Paragraph1}}</p>
                  <img class="u-image u-image-default u-image-1" src="{{asset('public/img/'.$aboutmain->Images[0])}}" alt="" data-image-width="800" data-image-height="800">
                  
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-image u-image-default u-image-2" src="{{asset('public/img/'.$aboutmain->Images[1])}}" alt="" data-image-width="626" data-image-height="417">
                  @endforeach
                  <h6 class="u-align-left u-text u-text-4"> {{__('translation.Section2 Tittlee')}}</h6>
                  <ul class="u-align-justify u-custom-list u-text u-text-5">
                    @foreach($lists as $lists)
                    <li>
                      <div class="class u-list-icon u-text-palette-3-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-8fd5"><path d="m202.6 478-202.6-186.6 70.5-76.6 121.5 111.9 239.4-292.7 80.6 65.9z" fill="currentColor"></path></svg>
                      </div> {{$lists->list}} 
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-4" id="Projects">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1" > Wood Truss Systems</h2>
        <p class="u-custom-font u-font-pt-sans u-text u-text-2"> As a leader in the design and construction of advanced technology facilities, our architectural solutions are a result of a collaborative process that empowers our multidisciplinary teams to share knowledge, leverage new technology and create innovative design solutions.</p>
        <div class="u-clearfix u-expanded-width u-gutter-18 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-left-cell u-palette-3-base u-shape-rectangle u-size-20 u-layout-cell-1" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">

                    @foreach($aboutus2 as $aboutus2)
                      <h3 class="u-text u-text-default u-text-3">{{$aboutus2->Tittle}}</h3>
                      <p class="u-text u-text-4"> {{$aboutus2->Paragraph1}}</p>
                    </div>
                  </div>
                  @foreach($aboutus1 as $aboutus1)  

                  <div class="u-container-style u-image u-layout-cell u-size-20 u-image-1" data-image-width="416" data-image-height="626" style="background-image: url(/styleElite/public/img/{{$aboutus1->Images[0]}});">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-palette-3-base u-right-cell u-size-20 u-layout-cell-3" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                  <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <h3 class="u-text u-text-default u-text-5">{{$aboutus1->Tittle}}</h3>
                      <p class="u-text u-text-6">{{$aboutus1->Paragraph1}} </p>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  @foreach($aboutus3 as $aboutus3)
                  <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-2" data-image-width="626" data-image-height="416" style="background-image: url(/styleElite/public/img/{{$aboutus3->Images[0]}});">
                    <div class="u-container-layout u-container-layout-4"></div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-size-20 u-white u-layout-cell-5" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-5">
                      <h3 class="u-text u-text-default u-text-7">{{$aboutus3->Tittle}}</h3>
                      <p class="u-text u-text-8"> {{$aboutus3->Paragraph1}}</p>
                    </div>
                  </div>
                  @endforeach
                  <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-3" data-image-width="626" data-image-height="416" style="background-image: url(/styleElite/public/img/{{$aboutus2->Images[0]}});">
                    <div class="u-container-layout u-container-layout-6"></div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-5" id="carousel_cb64" data-image-width="1920" data-image-height="992">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-radius-10 u-text-palette-3-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3e08"></use></svg><svg id="svg-3e08" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" class="u-svg-content"><path d="M48.014,42.889l-9.553-4.776C37.56,37.662,37,36.756,37,35.748v-3.381c0.229-0.28,0.47-0.599,0.719-0.951  c1.239-1.75,2.232-3.698,2.954-5.799C42.084,24.97,43,23.575,43,22v-4c0-0.963-0.36-1.896-1-2.625v-5.319  c0.056-0.55,0.276-3.824-2.092-6.525C37.854,1.188,34.521,0,30,0s-7.854,1.188-9.908,3.53C17.724,6.231,17.944,9.506,18,10.056  v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309  c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C8.801,44.424,7,47.458,7,50.762V54c0,4.746,15.045,6,23,6s23-1.254,23-6v-3.043  C53,47.519,51.089,44.427,48.014,42.889z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                <h3 class="u-text u-text-default u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">16</h3>
                <h6 class="u-text u-text-default u-text-palette-3-base u-text-2">{{__('translation.SPECIALISTS')}}</h6>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-radius-10 u-text-palette-3-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.999 511.999" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3852"></use></svg><svg class="u-svg-content" viewBox="0 0 511.999 511.999" x="0px" y="0px" id="svg-3852" style="enable-background:new 0 0 511.999 511.999;"><g><g><path d="M438.09,273.32h-39.596c4.036,11.05,6.241,22.975,6.241,35.404v149.65c0,5.182-0.902,10.156-2.543,14.782h65.461    c24.453,0,44.346-19.894,44.346-44.346v-81.581C512,306.476,478.844,273.32,438.09,273.32z"></path>
</g>
</g><g><g><path d="M107.265,308.725c0-12.43,2.205-24.354,6.241-35.404H73.91c-40.754,0-73.91,33.156-73.91,73.91v81.581    c0,24.452,19.893,44.346,44.346,44.346h65.462c-1.641-4.628-2.543-9.601-2.543-14.783V308.725z"></path>
</g>
</g><g><g><path d="M301.261,234.815h-90.522c-40.754,0-73.91,33.156-73.91,73.91v149.65c0,8.163,6.618,14.782,14.782,14.782h208.778    c8.164,0,14.782-6.618,14.782-14.782v-149.65C375.171,267.971,342.015,234.815,301.261,234.815z"></path>
</g>
</g><g><g><path d="M256,38.84c-49.012,0-88.886,39.874-88.886,88.887c0,33.245,18.349,62.28,45.447,77.524    c12.853,7.23,27.671,11.362,43.439,11.362c15.768,0,30.586-4.132,43.439-11.362c27.099-15.244,45.447-44.28,45.447-77.524    C344.886,78.715,305.012,38.84,256,38.84z"></path>
</g>
</g><g><g><path d="M99.918,121.689c-36.655,0-66.475,29.82-66.475,66.475c0,36.655,29.82,66.475,66.475,66.475    c9.298,0,18.152-1.926,26.195-5.388c13.906-5.987,25.372-16.585,32.467-29.86c4.98-9.317,7.813-19.946,7.813-31.227    C166.393,151.51,136.573,121.689,99.918,121.689z"></path>
</g>
</g><g><g><path d="M412.082,121.689c-36.655,0-66.475,29.82-66.475,66.475c0,11.282,2.833,21.911,7.813,31.227    c7.095,13.276,18.561,23.874,32.467,29.86c8.043,3.462,16.897,5.388,26.195,5.388c36.655,0,66.475-29.82,66.475-66.475    C478.557,151.509,448.737,121.689,412.082,121.689z"></path>
</g>
</g></svg></span>
                <h3 class="u-text u-text-default u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">47</h3>
                <h6 class="u-text u-text-default u-text-palette-3-base u-text-4">{{__('translation.HAPPY CLIENTS')}}</h6>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-radius-10 u-text-palette-3-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 31.217 31.217" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-34c3"></use></svg><svg class="u-svg-content" viewBox="0 0 31.217 31.217" x="0px" y="0px" id="svg-34c3" style="enable-background:new 0 0 31.217 31.217;"><g><g id="c48_bag"><path d="M29.066,8.165h-8.303v-1.04c0-4.429-4.201-4.169-4.201-4.169h-1.986c-4.428,0-4.199,4.2-4.199,4.2v1.009H2.042    C-0.076,8.165,0,10.25,0,10.25v4.07c0,0,8.889,3.234,15.543,3.234c7.271,0,15.671-3.266,15.671-3.266V10.25    C31.215,8.066,29.066,8.165,29.066,8.165z M13.18,7.038c0-2.085,2.447-2.116,2.447-2.116c2.482,0,2.406,2.148,2.406,2.148v1.043    H13.18V7.038z M18.189,16.781l-5.164,0.004v-1.991h5.164V16.781z"></path><path d="M31.215,26.178V15.791c0,0-6.762,3.114-15.716,3.114C7.262,18.905,0,15.694,0,15.694v10.483    c0,2.117,2.008,2.086,2.008,2.086H29.1C31.346,28.264,31.215,26.178,31.215,26.178z M18.189,20.685    c0,0.715-0.576,1.292-1.289,1.292h-2.584c-0.713,0-1.291-0.577-1.291-1.292v-1.332h5.164V20.685z"></path>
</g>
</g></svg></span>
                <h3 class="u-text u-text-default u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">56</h3>
                <h6 class="u-text u-text-default u-text-palette-3-base u-text-6">{{__('translation.SUCCESSFUL CASES')}}</h6>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-radius-10 u-text-palette-3-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-26cd"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-26cd" style="enable-background:new 0 0 512 512;"><g><g><path d="M486.4,25.6h-76.8V0H102.4v25.6H25.6C10.24,25.6,0,35.84,0,51.2v61.44c0,58.88,43.52,107.52,102.4,115.2v2.56    c0,74.24,51.2,135.68,120.32,151.04L204.8,435.2h-58.88c-10.24,0-20.48,7.68-23.04,17.92L102.4,512h307.2l-20.48-58.88    c-2.56-10.24-12.8-17.92-23.04-17.92H307.2l-17.92-53.76c69.12-15.36,120.32-76.8,120.32-151.04v-2.56    c58.88-7.68,102.4-56.32,102.4-115.2V51.2C512,35.84,501.76,25.6,486.4,25.6z M102.4,176.64c-28.16-7.68-51.2-33.28-51.2-64V76.8    h51.2V176.64z M307.2,256L256,227.84L204.8,256l12.8-51.2l-38.4-51.2h53.76L256,102.4l23.04,51.2h53.76l-38.4,51.2L307.2,256z     M460.8,112.64c0,30.72-23.04,58.88-51.2,64V76.8h51.2V112.64z"></path>
</g>
</g></svg></span>
                <h3 class="u-text u-text-default u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">23</h3>
                <h6 class="u-text u-text-default u-text-palette-3-base u-text-8">{{__('translation.AWARDS')}}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-image u-shading u-section-8" src="" id="Servicess">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <h1 class="u-text u-text-1" >{{__('translation.Services provided')}}</h1>
        <p class="u-text u-text-2">{{__('translation.servicess brief')}}</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($servicess as $servicess)
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" style="background-image: url(/styleElite/public/img/{{$servicess->Images[0]}});"></div>
                <h4 class="u-text u-text-3">{{$servicess->Tittle}}</h4>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-9" id="carousel_e9b4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1" >{{__('translation.customerReview')}}</h2>
        <div class="u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($testemonials as $testemonials)
            <div class="u-align-left u-container-style u-list-item u-radius-25 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
                <p class="u-text u-text-2">{{$testemonials->Paragraph2}}&nbsp;</p>
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="494" data-image-height="750" style="background-image: url(/styleElite/public/img/{{$testemonials->Images[0]}});"></div>
                <h5 class="u-text u-text-3">{{$testemonials->Tittle}}</h5>
                <h5 class="u-custom-font u-text u-text-font u-text-4">{{$testemonials->Paragraph1}}</h5>
              </div>
            </div>
            @endforeach
 
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-10" id="carousel_41a4" data-image-width="1125" data-image-height="1500">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-3-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-851e"></use></svg><svg id="svg-851e" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" class="u-svg-content"><g><path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
		s-5-2.243-5-5S27.243,14,30,14z"></path><path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
		s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
		s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
		C10.882,24.468,11.628,13.08,17.677,7.031z"></path><path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
		c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
		c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
		C60,47.739,52.646,44.247,42.117,43.007z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                      <h5 class="u-text u-text-1">{{__('translation.Address')}}</h5>
                      @foreach($website as $website)
                      <p class="u-text u-text-2">{{$website->address}}</p>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-palette-3-base u-shape-rectangle u-size-20 u-layout-cell-2" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-2"><span class="u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8ae9"></use></svg><svg id="svg-8ae9" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" class="u-svg-content"><g><path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
		V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
		C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path><path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S31.103,55,30,55z"></path><path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path><path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path><path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path><path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path><path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path><path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                      <h5 class="u-text u-text-3">{{__('translation.Phone')}}</h5>
                      <p class="u-text u-text-4">{{$website->phone}}</p>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-3-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1f10"></use></svg><svg id="svg-1f10" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" class="u-svg-content"><g><path d="M42.5,22h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,22,42.5,22z"></path><path d="M17.5,16h10c0.552,0,1-0.447,1-1s-0.448-1-1-1h-10c-0.552,0-1,0.447-1,1S16.948,16,17.5,16z"></path><path d="M42.5,30h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,30,42.5,30z"></path><path d="M42.5,38h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,38,42.5,38z"></path><path d="M42.5,46h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,46,42.5,46z"></path><path d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                      <h5 class="u-text u-text-5">{{__('translation.E-mail')}}</h5>
                      <p class="u-text u-text-6">{{$website->email}}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection