@extends('layouts.app')

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/images/ttl-bg-shp.png" alt="Title Background Shape" height="329" width="1920">
                <div class="container">
                    <div class="pg-title-inner text-center position-relative w-100">
                        <h1>About us <i class="btm-ln v2 bg-color9"></i></h1>
                        <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">About us</li>
                        </ol>
                    </div>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-160 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-4.png);"></div>
            <div class="container">
                <div class="extended-serv-wrap2 res-row position-relative text-center w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="extend-serv-box v2 text-center w-100 position-relative">
                                <span><i class="icon-006-data"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">SEO Optimization</a></h3>
                                    <p class="mb-0">Pha tristique elementum augue, eu egestas est iaculis eget. Quisque lectus felis, iaculis eget fermentum.</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="extend-serv-box v2 text-center w-100 position-relative">
                                <span><i class="icon-024-banner"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Digital Marketing</a></h3>
                                    <p class="mb-0">Ut ut pretium vivamus sollicitudin. sem eu nisi imperdiet faucibus. Integer tempor ipsum mattis pellentesque</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="extend-serv-box v2 text-center w-100 position-relative">
                                <span><i class="icon-023-bullhorn"></i></span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Social Marketing</a></h3>
                                    <p class="mb-0">Sed tristique elementum augue, eu egestas est iaculis eget. Quisque lectus felis, iaculis eget fermentum.</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Extended Services Wrap 2 -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-100 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-1.png);"></div>
            <div class="container">
                <div class="spclizd-dvlpmnt-wrap position-relative w-100">
                    <div class="row align-items-end">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/spclizd-dvlpmnt-mckp.png" alt="Specialized Development Mockup" height="507" width="513"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0">We are Specialized <br> in Smart Development, <br> and Smart SEO</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Fusce eget enim maximus, mollis quam vel, sagittis augue. Pellentesque venenatis quis elit id maximus. In ligula tellus, placerat ut lobortis.</p>
                                <a class="thm-btn rounded-pill d-inline-block" href="javascript:void(0);" title="">Our Approaches</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Specialized Development Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-100 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-10.png);"></div>
            <div class="container">
                <div class="text-box-wrap w-100 text-center position-relative">
                    <div class="text-box text-white d-inline-block">
                        <div class="sec-title text-center w-100 position-relative">
                            <h2 class="mb-0">Why People Choose Us</h2>
                            <i class="btm-ln bg-color3"></i>
                        </div><!-- Sec Title -->
                    </div>
                </div>
                <div class="facts-wrap2 text-center position-relative w-100">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-016-customer-review"></i></span>
                                <h3 class="mb-0"><span class="counter">986</span></h3>
                                <h5 class="mb-0">Satisfied Customers</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-024-banner"></i></span>
                                <h3 class="mb-0"><span class="counter">2036</span></h3>
                                <h5 class="mb-0">Successful Projects</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-027-bar-chart"></i></span>
                                <h3 class="mb-0"><span class="counter">24</span>%</h3>
                                <h5 class="mb-0">Average Conversion</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-lg-3">
                            <div class="fact-box2 text-white text-center w-100">
                                <span class="d-inline-block"><i class="icon-013-trophy"></i></span>
                                <h3 class="mb-0"><span class="counter">100</span>%</h3>
                                <h5 class="mb-0">Guaranteed Results</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- Facts Wrap 2 -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 pb-60 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-1" class="particles-js top_right w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-1.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="msn-empwr-wrap position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="assets/images/resources/msn-empwr-mckp.png" alt="Mission Empower Mockup"  height="636" width="620"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box ps-5 w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0">Our mission is to <br> empower brands to <br> achieve their goals</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div><!-- Sec Title -->
                                <p class="mb-0">Nam quis accumsan risus. Aenean id volutpat nibh. Nullam mollis elit pellentesque, gravida turpis id.</p>
                                <ul class="list-unstyled mb-0 w-100">
                                    <li>Phasellus sit amet libero turpis nunc fermentum</li>
                                    <li>Fermentum mauris faucibus quam, pharetra nunc</li>
                                    <li>Dolor eu nulla pellentesque aliquam faucibus.</li>
                                </ul>
                                <a class="thm-btn rounded-pill d-inline-block" href="our-story.html" title="">Our Story</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Specialized Development Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-90 bg-color10 pb-110 position-relative">
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0">Our Standards</h2>
                    <i class="btm-ln bg-color3"></i>
                </div><!-- Sec Title -->
                <div class="serv-wrap2 position-relative text-center w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="icon-019-target-1"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Being Relevant</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum, libero</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="icon-039-motivation"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Memorable Branding</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum, libero</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="flaticon-heart"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Positive Impact</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum, libero</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="icon-020-laptop"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Cross-functionaled</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum, libero</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="icon-015-target"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Multidisciplinary Team</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum, libero</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 text-center w-100">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg"><g><path d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z"></path></g></svg>
                                    <i class="icon-008-startup-1"></i>
                                </span>
                                <div class="serv-info2 w-100">
                                    <h3 class="mb-0"><a href="#" title="">Recent Technology</a></h3>
                                    <p class="mb-0">Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum, libero</p>
                                    {{--<a class="simple-link d-inline-block text-uppercase" href="#" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Wrap 2 -->
            </div>
        </div>
    </section>
    <section>
        <div id="aRequest" class="w-100 pt-90 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-9.png);"></div>
            <div class="container">
                <div class="sec-title text-white text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Get a</span> Quote!</h2>
                    <i class="btm-ln bg-color3"></i>
                </div><!-- Sec Title -->
                <div class="cnt-wrap text-center position-relative w-100">
                    <form class="w-100 d-inline-block" action="#" method="post" id="email-form">
                        <div class="form-group w-100">
                            <div class="response w-100"></div>
                        </div>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="field-box w-100">
                                    <input class="fname" type="text" name="fname" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="field-box w-100">
                                    <input class="email" type="email" name="email" placeholder="Your email" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="field-box w-100">
                                    <textarea class="contact_message" name="contact_message" placeholder="Send Message" required></textarea>
                                </div>
                                <div class="field-btn text-center w-100">
                                    <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- Contact Form Wrap -->
            </div>
        </div>
    </section>
@endsection
