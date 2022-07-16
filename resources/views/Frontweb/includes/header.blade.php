<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav">

    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
            @foreach($Footerdetails as $logo)

                <a href="{{url('')}}" class="logo m-0 float-end"><img src="{{asset('public/img/'.$logo->Images[0])}}" class="logmove"></a>
    @endforeach
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start" style="margin: auto;">
                    <li class="active"><a href="{{url('')}}">{{__('translation.nav_home')}}</a></li>
                    <li><a href="{{url('aboutseqaelbanaa')}}">{{__('translation.nav_About')}}</a></li>

                    <li class="has-children"><a href="{{url('AllProject')}}">{{__('translation.nav_Projects')}}</a></li>

                    <li><a href="{{url('Contactus')}}">{{__('translation.nav_Contact')}}</a></li>

                    <ul  class="js-clone-nav d-none d-lg-inline-block  site-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <li>
                          <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="border: 1px solid #b39b55;
    padding: 6px 18px;
    background-color: #b39b55;
    color: white !important;
    border-radius: 44px;
    /* top: 4px; */
    padding-top: 3px !important;
    font-size: 14.5px;">
                              {{ $properties['native'] }}
                          </a>
                      </li>
                    @endforeach
                    
                </ul>

                </ul>

                <a href="#" class="burger me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>

        </div>
    </div>
</nav>