@extends('layouts.app')

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/images/ttl-bg-shp.png" alt="Title Background Shape" height="329" width="1920">
                <div class="container">
                    <div class="pg-title-inner text-center position-relative w-100">
                        <h1>Three Col Full Width <i class="btm-ln v2 bg-color9"></i></h1>
                        <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                            <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Three Col Full Width</li>
                        </ol>
                    </div>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="blog-wrap blog-spac px-3 position-relative w-100">
                <div class="row mrg30">
                    @foreach ($posts as $item)
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="post-box brd-rd15 w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="{{ route('blog-details', $item->slug) }}" title=""><img class="img-fluid w-100" src="{{Voyager::image($item->image)}}" alt="{{$item->title}}" height="576" width="1024"></a>
                                    <span class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>{{$item->created_at->format('d')}}</i>{{$item->created_at->format('M')}}</span>
                                </div>
                                <div class="post-info w-100">
                                    <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);" title="">{{$item->category['name']}}</a></span>
                                    <h3 class="mb-0"><a href="{{ route('blog-details', $item->slug) }}" title="">Let’s talk test</a></h3>
                                    <span class="post-athr d-block position-relative">By <a href="javascript:void(0);" title="">{{$item->author['name']}}</a></span>
                                    <p class="mb-0">{{$item->excerpt}}</p>
                                    <a class="simple-link d-inline-block text-uppercase" href="{{ route('blog-details', $item->slug) }}" title="">Read More<i class="flaticon-right-arrow text-color3"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div><!-- Blog Wrap -->
        </div>
    </section>
@endsection