<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>



                <!-- <li class="divider"></li>

                <li class="nav-item">
                    <a class="nav-link {{
                        active_class(Route::is('admin/pages'))
                    }}" href="{{ route('admin.pages.index') }}">
                        <i class="nav-icon fas fa-file"></i>
                        @lang('menus.backend.sidebar.pages')
                    </a>
                </li>

                <li class="divider"></li>

                <li class="nav-item">
                    <a class="nav-link {{
                        active_class(Route::is('admin/faqs'))
                    }}" href="{{ route('admin.faqs.index') }}">
                        <i class="nav-icon fas fa-question-circle"></i>
                        @lang('menus.backend.sidebar.faqs')
                    </a>
                </li> 

                <li class="divider"></li>

                <li class="nav-item">
                    <a class="nav-link {{
                        active_class(Route::is('admin/email-templates'))
                    }}" href="{{ route('admin.email-templates.index') }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        @lang('menus.backend.sidebar.email-templates')
                    </a>
                </li>  -->

                <!-- <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/blogs'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/blogs*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-rss"></i> @lang('menus.backend.sidebar.blogs')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/blogs/blog-categories*'))
                        }}" href="{{ route('admin.blog-categories.index') }}">
                                @lang('labels.backend.access.blog-category.management')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/blogs/blog-tags*'))
                        }}" href="{{ route('admin.blog-tags.index') }}">
                                @lang('labels.backend.access.blog-tag.management')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Route::is('admin/blogs')) }}" 
                                href="{{ route('admin.blogs.index') }}">
                                @lang('labels.backend.access.blogs.management')
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
                
                           
                           
                            
                           
                            <!-- الصفحة الرئيسية -->

                            <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'))}}">
                                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                        <i class="nav-icon fas fa-american-sign-language-interpreting"></i>@lang('labels.backend.access.Home.Home')                                        
                                    </a>
                                <ul class="nav-dropdown-items">
                                    <!-- Main Slider -->

                                        <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowMainSlider') }}">
                                            @lang('labels.backend.access.Home.slider')
                                                </a>
                                        </li>
                                        <!-- Components -->
                                        <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowComponents') }}">
                                            @lang('labels.backend.access.Home.components')
                                                </a>
                                        </li>
                                        <!-- aboutus1 -->
                                        <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowVision') }}">
                                            @lang('labels.backend.access.Home.vision_2030')
                                                </a>
                                        </li>

                                        <!-- About us 2 -->

                                        <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'), 'open')}}">
                                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                        @lang('labels.backend.access.Home.about-us')                                        </a>
                                            <ul class="nav-dropdown-items">
                                                <!-- Main -->
                                                    <li class="nav-item">
                                                            <a class="nav-link {{
                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                        }}" href="{{ route('admin.ShowAboutUsMain') }}">
                                                        @lang('labels.backend.access.Home.aboutusM')
                                                            </a>
                                                    </li>
                                                    <!-- cate -->
                                                    <li class="nav-item">
                                                            <a class="nav-link {{
                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                        }}" href="{{ route('admin.ShowAboutUsCate') }}">
                                                        @lang('labels.backend.access.Home.AboutUsCat')
                                                            </a>
                                                    </li>
                                    
                                            </ul>
                                        </li>


                                        <!-- servicess -->


                                         <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'), 'open')}}">
                                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                        @lang('labels.backend.access.Home.Servicedep')                                        </a>
                                            <ul class="nav-dropdown-items">
                                                <!-- servicess -->
                                                    <li class="nav-item">
                                                            <a class="nav-link {{
                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                        }}" href="{{ route('admin.ShowServicesMain') }}">
                                                        @lang('labels.backend.access.Home.ServiceT')
                                                            </a>
                                                    </li>
                                                     <!-- المقاولا العامة  -->
                                                        <li class="nav-item">
                                                            <a class="nav-link {{active_class(Route::is('admin/Website/mainSection*'))}}" href="{{ route('admin.ShowServicess') }}">
                                                            <i class="nav-icon fas fa-allergies"></i>@lang('labels.backend.access.Home.servdep1')
                                                            
                                                            </a>
                                                        </li>

                                                         <!-- الخدمة 2 -->
                                                        <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'), 'open')}}">
                                                                    <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                                                    <i class="nav-icon fas fa-american-sign-language-interpreting"></i>@lang('labels.backend.access.Home.servdep2')                                        </a>
                                                            <ul class="nav-dropdown-items">
                                                                <!-- Main -->
                                                                    <li class="nav-item">
                                                                            <a class="nav-link {{
                                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                                        }}" href="{{ route('admin.ShowServicessMain') }}">
                                                                        @lang('labels.backend.access.Home.servdep2-Main')
                                                                            </a>
                                                                    </li>
                                                                    <!-- cate -->
                                                                    <li class="nav-item">
                                                                            <a class="nav-link {{
                                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                                        }}" href="{{ route('admin.ShowServicessCategory') }}">
                                                                        @lang('labels.backend.access.Home.servdep2-cat')
                                                                            </a>
                                                                    </li>
                                                    
                                                            </ul>
                                                        </li>
                                                         <!-- الخدمة ال3 -->
                                                        <li class="nav-item">
                                                                    <a class="nav-link {{active_class(Route::is('admin/Website/mainSection*'))}}" href="{{ route('admin.ShowServiceeThree') }}">
                                                                    <i class="nav-icon fas fa-atom"></i>@lang('labels.backend.access.Home.servdep3')
                                                                    
                                                                    </a>
                                                        </li>
                                                        <!-- الخدمة 4 -->
                                                        <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'), 'open')}}">
                                                                    <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                                                    <i class="nav-icon fas fa-american-sign-language-interpreting"></i>@lang('labels.backend.access.Home.servdep4')                                        </a>
                                                            <ul class="nav-dropdown-items">
                                                                <!-- Main -->
                                                                    <li class="nav-item">
                                                                            <a class="nav-link {{
                                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                                        }}" href="{{ route('admin.ShowServiceFourMain') }}">
                                                                        @lang('labels.backend.access.Home.servdep4-Main')
                                                                            </a>
                                                                    </li>
                                                                    <!-- cate -->
                                                                    <li class="nav-item">
                                                                            <a class="nav-link {{
                                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                                        }}" href="{{ route('admin.ShowServiceFourCategory') }}">
                                                                        @lang('labels.backend.access.Home.servdep2-cat')
                                                                            </a>
                                                                    </li>
                                                    
                                                            </ul>
                                                        </li>
                                            </ul>
                                        </li>

                                         <!-- Project -->
                                         <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowMainProjects') }}">
                                            @lang('labels.backend.access.Home.Projects')
                                                </a>
                                        </li>

                                         <!-- how we work -->

                                        <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'), 'open')}}">
                                            <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                                @lang('labels.backend.access.Home.HowWeWork')                                        
                                            </a>
                                            <ul class="nav-dropdown-items">
                                                    <li class="nav-item">
                                                            <a class="nav-link {{
                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                        }}" href="{{ route('admin.ShowWeWorkMain') }}">
                                                        @lang('labels.backend.access.Home.WorkM')
                                                            </a>
                                                    </li>
                                                    <li class="nav-item">
                                                            <a class="nav-link {{
                                                            active_class(Route::is('admin/Website/mainSection*'))
                                                        }}" href="{{ route('admin.ShowWorkStage') }}">
                                                        @lang('labels.backend.access.Home.workStage')
                                                            </a>
                                                    </li>
                                            </ul>
                                        </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'))}}">
                                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="#">
                                        <i class="nav-icon fas fa-american-sign-language-interpreting"></i>@lang('labels.backend.access.Home.AboutusPage')                                        
                                    </a>
                                <ul class="nav-dropdown-items">
                                    
                                        <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowAboutUss') }}">
                                            @lang('labels.backend.access.Home.AboutusSecOne')
                                                </a>
                                        </li>
                                        <!-- AboutusSecTwo -->
                                        <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowAboutUssTwo') }}">
                                            @lang('labels.backend.access.Home.AboutusSecTwo')
                                                </a>
                                        </li>
                                        <!-- aboutus1 -->
                                        <li class="nav-item">
                                                <a class="nav-link {{
                                                active_class(Route::is('admin/Website/mainSection*'))
                                            }}" href="{{ route('admin.ShowTeamWork') }}">
                                            @lang('labels.backend.access.Home.AboutusTeamwork')
                                                </a>
                                        </li>
                                </ul>
                            </li>
                            
                            

                            <!-- detailed about website Address/Phone/Email/logo -->
                            <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.Websitedetails') }}">
                                    <i class="nav-icon fas fa-coins"></i> @lang('labels.backend.access.Home.website details')
                                        </a>
                            </li>

                            <!-- Social Media -->
                            <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.SocialMediaTable') }}">
                                    <i class="nav-icon fas fa-code-branch"></i> @lang('labels.backend.access.Home.Social Media')
                                        </a>
                            </li>
                           <!-- contact forةس -->
                            <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.contactshow') }}">
                                    <i class="nav-icon fas fa-rss"></i>@lang('labels.backend.access.Home.Conact')
                                        </a>
                            </li>
                            
                        </li>
                       
                    </ul>
                </li>
        @endif

        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
