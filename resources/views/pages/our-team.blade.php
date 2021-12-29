@extends('layouts.app')

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/images/ttl-bg-shp.png" alt="Title Background Shape" height="329" width="1920">
                <div class="container">
                    <div class="pg-title-inner text-center position-relative w-100">
                        <h1>Our Team <i class="btm-ln v2 bg-color9"></i></h1>
                        <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Our Team</li>
                        </ol>
                    </div>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-100 position-relative">
            <div class="container">
                <div class="holistic-appr-wrap position-relative w-100">
                    <div class="row align-items-end">
                        <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/holistic-appr2-mckp.png" alt="Holistic Approach 2 Mockup" height="456" width="628"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="text-box pe-3 w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>Holistic Approach to</span> SEO Consultancy & Management</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Nam quis accumsan risus. Aenean id volutpat nibh. Nullam mollis elit pellentesque, gravida turpis id, aliquam magna. Donec dictum tortor eu arcu lacinia rutrum.</p>
                                <a class="thm-btn rounded-pill d-inline-block" href="seo-services.html" title="">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Holistic Approach Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-60 position-relative">
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0">Executive Team</h2>
                    <i class="btm-ln bg-color3"></i>
                </div><!-- Sec Title -->
                <div class="team-wrap w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-1.jpg" alt="Team Image 1" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Peter White</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Manager</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-2.jpg" alt="Team Image 2" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Anna Green</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Owner & CEO</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-3.jpg" alt="Team Image 3" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Alex Wood</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Scientist</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-4.jpg" alt="Team Image 4" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Eva Hill</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Specialist</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-5.jpg" alt="Team Image 5" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Poull Smith</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Account Manager</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-6.jpg" alt="Team Image 6" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Emma Forest</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">SEO Strategist</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-7.jpg" alt="Team Image 7" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Thomas Doe</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Account Manager</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-8.jpg" alt="Team Image 8" height="300" width="300"></a></div>
                                <div class="team-info w-100">
                                    <h3 class="mb-0"><a href="javascript:void(0);" title="">Linda May</a></h3>
                                    <span class="d-block"><a href="javascript:void(0);" title="">Content Writer</a></span>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="flaticon-telegram"></i></a>
                                        <a href="https://youtube.com/" title="Youtube" target="_blank"><i class="flaticon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Team Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-55 bg-color23 pb-100 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-1" class="particles-js top_right w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-1.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="testi-wrap position-relative w-100">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-10">
                            <div class="testi-inner schm-9 w-100">
                                <div class="row testi-caro3">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="testi-box v2 schm-9 position-relative text-center w-100">
                                            <div class="testi-img d-inline-block overflow-hidden"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-1.jpg" alt="Testimonial Image 1"></div>
                                            <div class="testi-info w-100">
                                                <h5 class="mb-0">Matthew Doe</h5>
                                                <span class="d-block">Growth specialist, Uder</span>
                                            </div>
                                            <p class="mb-0">In sed sodales risus, eget scelerisque justo. Curabitur quis gravida massa. Nulla lobortis est tempus auctor tempus. Quisque euismod hendrerit enim...</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="testi-box v2 schm-9 position-relative text-center w-100">
                                            <div class="testi-img d-inline-block overflow-hidden"><img class="img-fluid d-inline-block rounded-circle" src="assets/images/resources/testi-img1-2.jpg" alt="Testimonial Image 2"></div>
                                            <div class="testi-info w-100">
                                                <h5 class="mb-0">Emma Doe</h5>
                                                <span class="d-block">Account manager, Ados</span>
                                            </div>
                                            <p class="mb-0">In sed sodales risus, eget scelerisque justo. Curabitur quis gravida massa. Nulla lobortis est tempus auctor tempus. Quisque euismod hendrerit enim...</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="testi-box v2 schm-9 position-relative text-center w-100">
                                            <div class="testi-img d-inline-block overflow-hidden"><img class="img-fluid" src="assets/images/resources/testi-img1-3.jpg" alt="Testimonial Image 3"></div>
                                            <div class="testi-info w-100">
                                                <h5 class="mb-0">Jane Doe</h5>
                                                <span class="d-block">Account manager, Ados</span>
                                            </div>
                                            <p class="mb-0">In sed sodales risus, eget scelerisque justo. Curabitur quis gravida massa. Nulla lobortis est tempus auctor tempus. Quisque euismod hendrerit enim...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap -->
            </div>
        </div>
    </section>
@endsection
