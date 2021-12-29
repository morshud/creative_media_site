<main>
    <header class="style1 w-100">
        <div class="topbar bg-color26 w-100">
            <div class="container">
                <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <ul class="top-info-links d-inline-flex flex-wrap align-items-center list-unstyled mb-0">
                        <li><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(305) 222-3333" title="">+(305) 222-3333</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:info@creativedigital.com.ng" title="">info@creativedigital.com.ng</a></li>
                    </ul>
                    <div class="social-cart d-inline-flex flex-wrap align-items-center">
                        <div class="social-links d-inline-flex flex-wrap">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                            <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                            <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Topbar -->
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li class=""><a href="{{route('home')}}" title="">Home</a></li>
                            <li><a href="{{route('about-us')}}" title="">About Us</a></li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Company</a>
                                <ul class="children mb-0 list-unstyled">

                                    <li><a href="{{route('our-story')}}" title="">Our Story</a></li>
                                    <li><a href="{{route('our-team')}}" title="">Our Team</a></li>
                                </ul>
                            </li>
                            {{-- <li class=""><a href="our-portfolio" title="">Portfolio</a></li> --}}
                            <li class=""><a href="{{ route('blog') }}" title="">Blog</a></li>

                            <li><a href="{{route('contact-us')}}" title="">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="header-btns d-inline-flex flex-wrap align-items-center">
                        <a class="thm-btn brd-btn rounded-pill d-inline-block" href="#aRequest" title="">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div><!-- Menubar -->
    </header><!-- Header -->

    <div class="sticky-header style1 w-100">
        <div class="container">
            <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
                <nav>
                    <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li class=""><a href="{{route('home')}}" title="">Home</a></li>
                        <li><a href="{{route('about-us')}}" title="">About Us</a></li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Company</a>
                            <ul class="children mb-0 list-unstyled">

                                <li><a href="{{route('our-story')}}" title="">Our Story</a></li>
                                <li><a href="{{route('our-team')}}" title="">Our Team</a></li>
                            </ul>
                        </li>
                        {{-- <li class=""><a href="our-portfolio" title="">Portfolio</a></li> --}}
                        <li class=""><a href="{{ route('blog') }}" title="">Blog</a></li>
                        <li><a href="{{route('contact-us')}}" title="">Contacts</a></li>
                    </ul>
                </nav>
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="thm-btn brd-btn rounded-pill d-inline-block" href="#aRequest" title="">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container d-flex flex-wrap align-items-center justify-content-between">
                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo"><h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="assets/images/logo@2x.png" alt="Logo"></a></h1></div><!-- Logo -->
            <ul class="mb-0 list-unstyled w-100">
                <li class=""><a href="{{route('home')}}" title="">Home</a></li>
                <li><a href="{{route('about-us')}}" title="">About Us</a></li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Company</a>
                    <ul class="children mb-0 list-unstyled">

                        <li><a href="{{route('our-story')}}" title="">Our Story</a></li>
                        <li><a href="{{route('our-team')}}" title="">Our Team</a></li>
                    </ul>
                </li>
                {{-- <li class=""><a href="our-portfolio" title="">Portfolio</a></li> --}}
                <li class=""><a href="{{ route('blog') }}" title="">Blog</a> </li>
                <li><a href="{{route('contact-us')}}" title="">Contacts</a></li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
