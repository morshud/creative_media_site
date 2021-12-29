@extends('layouts.app')

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="{{Voyager::image($post->image)}}" alt="{{$post->title}}" height="329" width="1920">
                <div class="container">
                    <div class="pg-title-inner text-center position-relative w-100">
                        <span class="pg-title-cate d-inline-block"><a href="javascript:void(0);" title="">Post Formats</a></span>
                        <h1>Image <i class="btm-ln v2 bg-color9"></i></h1>
                        <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                            <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('blog')}}" title="">Blog</a></li>
                            <li class="breadcrumb-item active">Image</li>
                        </ol>
                    </div>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-100 pb-120 position-relative">
            <div class="container">
                <div class="post-detail-wrap position-relative w-100">
                    <div class="post-detail-img w-100">
                        <img class="img-fluid w-100" src="{{Voyager::image($post->image)}}" alt="Blog Detail Image" height="576" width="1024">
                    </div>
                    <div class="post-detail-desc w-100">
                        {!! $post->body !!}
                    </div>
                    <div class="post-nav w-100 d-flex flex-wrap justify-content-between">
                        @if ($previous)
                            <div class="post-nav-item post-prev">
                                <a class="d-block" href="{{ route('blog-details', $previous->slug) }}" title="">
                                    <div class="post-nav-item d-flex flex-wrap align-items-center">
                                        <img class="img-fluid" src="{{voyager::image($previous->image)}}" alt="{{$previous->title}}">
                                        <div class="post-nav-item-info">
                                            <span>Prev Post</span>
                                            <h5 class="mb-0">{{$previous->title}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        
                        @if ($next)
                            <div class="post-nav-item post-next">
                                <a class="d-block" href="{{ route('blog-details', $next->slug)}}" title="">
                                    <div class="post-nav-item d-flex flex-wrap align-items-center">
                                        <div class="post-nav-item-info">
                                            <span>Next Post</span>
                                            <h5 class="mb-0">{{$next->title}}</h5>
                                        </div>
                                        <img class="img-fluid" src="{{voyager::image($next->image)}}" alt="{{$next->title}}">
                                    </div>
                                </a>
                            </div>
                        @endif
                        
                    </div><!-- Post Navigation -->
                    {{-- <div class="related-posts-wrap mt-45 mb-60 w-100">
                        <div class="sec-title w-100 position-relative">
                            <h2 class="mb-0">Related Posts</h2>
                            <i class="btm-ln bg-color3"></i>
                        </div><!-- Sec Title -->
                        <div class="blog-wrap position-relative w-100">
                            <div class="row post-caro">
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url(assets/images/resources/related-post-img1.jpg);"></div></a>
                                        </div>
                                        <div class="post-info w-100">
                                            <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Creativity</a></span>
                                            <h3 class="mb-0"><a href="blog-detail.html" title="">Action plans</a></h3>
                                            <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url(assets/images/resources/related-post-img2.jpg);"></div></a>
                                        </div>
                                        <div class="post-info w-100">
                                            <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Footer</a></span>
                                            <h3 class="mb-0"><a href="blog-detail.html" title="">Praesent elementum Facilisis</a></h3>
                                            <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url(assets/images/resources/related-post-img3.jpg);"></div></a>
                                        </div>
                                        <div class="post-info w-100">
                                            <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Masonry</a></span>
                                            <h3 class="mb-0"><a href="blog-detail.html" title="">New Perspective</a></h3>
                                            <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url(assets/images/resources/related-post-img4.jpg);"></div></a>
                                        </div>
                                        <div class="post-info w-100">
                                            <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Strategy</a></span>
                                            <h3 class="mb-0"><a href="blog-detail.html" title="">Great team</a></h3>
                                            <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="post-box brd-rd15 w-100">
                                        <div class="post-img overflow-hidden position-relative w-100">
                                            <a href="blog-detail.html" title=""><div class="d-block" style="background-image: url(assets/images/resources/related-post-img5.jpg);"></div></a>
                                        </div>
                                        <div class="post-info w-100">
                                            <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">Creativity</a></span>
                                            <h3 class="mb-0"><a href="blog-detail.html" title="">Test UI/UX</a></h3>
                                            <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Blog Wrap -->
                    </div><!-- Related Posts Wrap --> --}}
                    {{-- <div class="reply-form-wrap w-100">
                        <div class="devider bg-color25 mb-80 w-100"></div>
                        <div class="sec-title w-100 position-relative">
                            <h2 class="mb-0">Write A Comment</h2>
                            <i class="btm-ln bg-color3"></i>
                        </div><!-- Sec Title -->
                        <form class="w-100">
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="field-box w-100">
                                        <label>Name <sup class="text-color3">*</sup></label>
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="field-box w-100">
                                        <label>Email <sup class="text-color3">*</sup></label>
                                        <input type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <label>Comment <sup class="text-color3">*</sup></label>
                                        <textarea placeholder="Your Comment"></textarea>
                                    </div>
                                    <div class="field-btn w-100">
                                        <button class="thm-btn d-inline-block rounded-pill" type="submit">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- Reply Form Wrap --> --}}
                </div><!-- Post Detail Wrap -->
            </div>
        </div>
    </section>
@endsection