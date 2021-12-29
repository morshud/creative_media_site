@extends('layouts.app')

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="pg-title-wrap pt-190 pb-80 position-relative w-100 mouse_anim scroll_anim">
                <img data-depth="0.80" class="pg-ttl-shp-img img-fluid position-absolute" src="assets/images/ttl-bg-shp.png" alt="Title Background Shape" height="329" width="1920">
                <div class="container">
                    <div class="pg-title-inner text-center position-relative w-100">
                        <h1>Our Story <i class="btm-ln v2 bg-color9"></i></h1>
                        <ol class="breadcrumb d-inline-flex justify-content-center align-items-center flex-wrap">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" title="Home">Home</a></li>
                            <li class="breadcrumb-item active">Our Story</li>
                        </ol>
                    </div>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-100 position-relative">
            <div class="container">
                <div class="roadmap-wrap d-flex flex-wrap justify-content-center w-100">
                    <div class="roadmap-inner">
                        <div class="roadmap-item rev position-relative d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="roadmap-item-mckp">
                                <i>
                                    <svg class="Strategy.svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 315" style="enable-background:new 0 0 376 315;" xml:space="preserve"><title>Strategy</title>
<path class="rbsvgi_0" id="Shape_56" style="fill:#EBEDFD;" d="M351.7,60.5C322.8,22.6,260.6,6.7,202,1.8c-29.5-2.4-59.2-2.4-88.7,0.2l-3.2,0.3 C86.9,4.7,63,9.9,43.9,22.3c-6.4,4.1-12.1,9-17.1,14.7C5.3,61.8,2.6,97.3,1,130.1C-0.8,167-2.2,206,15.5,238.4s54.4,54.2,91,65.5 c62.7,19.3,134.9,14,189.7-20.3c9.7-6,18.7-12.9,27-20.7c7.3-6.8,13.9-14.4,19.6-22.6c11.9-17,20.9-35.8,26.5-55.8 C381.3,142,378,95.1,351.7,60.5z"></path>
<path class="rbsvgi_1" style="fill:#F7F8FE;" d="M-0.5,0"></path><g id="_Group_"><g id="_Group_2"><g id="_Group_3"><g id="_Group_4"><g id="_Group_5"><linearGradient id="_Path__1_" gradientUnits="userSpaceOnUse" x1="192.0096" y1="20.8401" x2="178.3096" y2="-69.3299" gradientTransform="matrix(1 0 0 1 -0.5 202)"><stop offset="0" style="stop-color:#F4BA38"></stop><stop offset="1" style="stop-color:#FFD349"></stop></linearGradient>
<path class="rbsvgi_2" id="_Path_" style="fill:url(#_Path__1_);" d="M187.1,237.5c4.2,0.3,42.2-2.4,42.2-41.1c0-25.1-18.4-25.3-21.8-59.6h-40.8 c-3.4,34.3-20.9,34.6-20.9,59.6C145.8,235.1,182.8,237.7,187.1,237.5z"></path>
<path class="rbsvgi_3" id="_Path_2" style="fill:#1631A4;" d="M171,110.1h32.3c2.3,0,4.2,1.9,4.2,4.2v22.4h-40.7v-22.4C166.8,112,168.7,110.1,171,110.1 L171,110.1z"></path><g id="_Group_6"><linearGradient id="_Path_3_1_" gradientUnits="userSpaceOnUse" x1="164.3" y1="-72.4" x2="210.9" y2="-72.4" gradientTransform="matrix(1 0 0 1 -0.5 202)"><stop offset="0" style="stop-color:#0074FF"></stop><stop offset="0.27" style="stop-color:#105BDA"></stop><stop offset="0.58" style="stop-color:#2042B5"></stop><stop offset="0.84" style="stop-color:#29339E"></stop><stop offset="1" style="stop-color:#2D2D96"></stop></linearGradient>
                                            <path class="rbsvgi_4" id="_Path_3" style="fill:url(#_Path_3_1_);" d="M165.7,126h42.7c1,0,1.9,0.9,1.9,1.9v3.4c0,1-0.9,1.9-1.9,1.9h-42.7c-1,0-1.9-0.9-1.9-1.9 v-3.4C163.8,126.9,164.7,126,165.7,126z"></path><linearGradient id="_Path_4_1_" gradientUnits="userSpaceOnUse" x1="164.297" y1="-81.7015" x2="210.897" y2="-81.7015" gradientTransform="matrix(1 0 0 1 -0.5 202)"><stop offset="0" style="stop-color:#0074FF"></stop><stop offset="0.27" style="stop-color:#105BDA"></stop><stop offset="0.58" style="stop-color:#2042B5"></stop><stop offset="0.84" style="stop-color:#29339E"></stop><stop offset="1" style="stop-color:#2D2D96"></stop></linearGradient>
                                            <path class="rbsvgi_5" id="_Path_4" style="fill:url(#_Path_4_1_);" d="M165.7,116.7h42.7c1,0,1.9,0.9,1.9,1.9v3.4c0,1-0.9,1.9-1.9,1.9h-42.7c-1,0-1.9-0.9-1.9-1.9 v-3.4c-0.1-1,0.7-1.8,1.7-1.9C165.6,116.7,165.6,116.7,165.7,116.7z"></path>
                                            <path class="rbsvgi_6" id="_Path_5" style="fill:#1631A4;" d="M178.5,102.7h17.1c2.2,0,4,1.8,4,4v3.5h-25.1v-3.5C174.5,104.5,176.3,102.7,178.5,102.7z"></path><radialGradient id="_Path_6_1_" cx="2353.729" cy="333.0646" r="6.19" gradientTransform="matrix(-0.91 -0.1 0.1 -0.99 2275.28 785.94)" gradientUnits="userSpaceOnUse"><stop offset="0.29" style="stop-color:#FFFFFF;stop-opacity:0.6"></stop><stop offset="0.99" style="stop-color:#FFFFFF;stop-opacity:0"></stop></radialGradient>
                                            <path class="rbsvgi_7" id="_Path_6" style="fill:url(#_Path_6_1_);" d="M166.2,226.5c0.1-1.7,1.6-3,3.3-2.9c0,0,0,0,0,0c1.7,0.3,2.8,1.8,2.6,3.5 c-0.1,1.7-1.6,3-3.3,2.9c0,0,0,0,0,0c-1.6-0.2-2.8-1.7-2.6-3.3C166.2,226.6,166.2,226.6,166.2,226.5z"></path><radialGradient id="_Path_7_1_" cx="2190.3201" cy="446.72" r="39.79" gradientTransform="matrix(-1 0 0 -1 2406.25 667.65)" gradientUnits="userSpaceOnUse"><stop offset="0.29" style="stop-color:#FFFFFF;stop-opacity:0.6"></stop><stop offset="0.99" style="stop-color:#FFFFFF;stop-opacity:0"></stop></radialGradient>
                                            <path class="rbsvgi_8" id="_Path_7" style="fill:url(#_Path_7_1_);" d="M195.4,205.8c0.7-7,6.5-12.2,13-11.5s11,6.9,10.3,13.9s-6.5,12.2-13,11.5 S194.7,212.8,195.4,205.8z"></path><g id="_Group_7"><radialGradient id="_Path_8_1_" cx="2241.9199" cy="440.95" r="54.58" gradientTransform="matrix(-1 0 0 -1 2406.25 667.65)" gradientUnits="userSpaceOnUse"><stop offset="0.29" style="stop-color:#FFFFFF;stop-opacity:0.6"></stop><stop offset="0.99" style="stop-color:#FFFFFF;stop-opacity:0"></stop></radialGradient>
                                                <path class="rbsvgi_9" id="_Path_8" style="fill:url(#_Path_8_1_);" d="M165.2,219.7c-11-8.8-9.7-23.6-8.4-36.1c0.4-3.6-5.2-3.5-5.6,0c-1.5,14-2.1,30.3,10,40.1 C164,225.9,168,222,165.2,219.7L165.2,219.7z"></path><radialGradient id="_Path_9_1_" cx="187.5937" cy="-119.24" r="21.9884" gradientTransform="matrix(1 0 0 1.25 -0.5 314.48)" gradientUnits="userSpaceOnUse"><stop offset="2.000000e-02" style="stop-color:#FFFFFF"></stop><stop offset="8.000000e-02" style="stop-color:#DFC9BD"></stop><stop offset="0.13" style="stop-color:#C49C87"></stop><stop offset="0.17" style="stop-color:#B48065"></stop><stop offset="0.19" style="stop-color:#AE7658"></stop><stop offset="0.26" style="stop-color:#94654B"></stop><stop offset="0.38" style="stop-color:#684934"></stop><stop offset="0.5" style="stop-color:#443121"></stop><stop offset="0.63" style="stop-color:#281E13"></stop><stop offset="0.75" style="stop-color:#141108"></stop><stop offset="0.88" style="stop-color:#080902"></stop><stop offset="1" style="stop-color:#040600"></stop></radialGradient>
                                                <path class="rbsvgi_10" id="_Path_9" style="fill:none;stroke:url(#_Path_9_1_);stroke-width:2.3;stroke-miterlimit:10;" d="M181,136.7v43.9c0,0,0.6,13.3-8.6,13.8s-0.9-15.6,12.1-15.6s22.2,2.5,21.1,11.9 s-10.7,3.2-10.7-13.6v-40.4"></path><g id="_Group_8">
<line class="rbsvgi_11" id="_Path_10" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" x1="195.3" y1="52.8" x2="195.3" y2="65.7"></line>
                                                    <line class="rbsvgi_12" id="_Path_11" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" x1="195.3" y1="70.5" x2="195.3" y2="91.5"></line>
                                                    <line class="rbsvgi_13" id="_Path_12" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" x1="172.2" y1="70.4" x2="172.2" y2="91.3"></line>
                                                    <line class="rbsvgi_14" id="_Path_13" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" x1="172.2" y1="50.9" x2="172.2" y2="61.4"></line>
                                                    <line class="rbsvgi_15" id="_Path_14" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" x1="207.5" y1="80.9" x2="207.5" y2="99.7"></line>
                                                    <line class="rbsvgi_16" id="_Path_15" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" x1="163.8" y1="95.8" x2="163.8" y2="106.4"></line><g id="_Group_9">
<path class="rbsvgi_17" id="_Path_16" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" d="M137,216.9c-6.8-15.9-5.8-34,2.7-49"></path>
                                                    <path class="rbsvgi_18" id="_Path_17" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" d="M241,187.2c0.4,2.6,0.6,5.3,0.6,8c0,14.5-5.7,28.4-16,38.6"></path><g id="_Group_10">
<path class="rbsvgi_19" id="_Path_18" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" d="M138,201.4c-0.9-6.6-0.4-13.2,1.4-19.6c2.3-8.1,6.7-15.4,12.7-21.3"></path>
                                                    <path class="rbsvgi_20" id="_Path_19" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" d="M243.5,216.1c-0.6,2.3-1.3,4.5-2.2,6.7c-4.9,11.8-14.3,21.2-26.1,26"></path>
                                                    <circle class="rbsvgi_21" id="_Path_20" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" cx="163.8" cy="243.3" r="3.7"></circle>
                                                    <circle class="rbsvgi_22" id="_Path_21" style="fill:none;stroke:#3C4777;stroke-width:2;stroke-miterlimit:10;" cx="229.3" cy="165.5" r="2.6"></circle></g></g></g></g></g></g></g></g></g></g></svg>
                                </i>
                            </div>
                            <div class="roadmap-item-info">
                                <strong class="text-color3">01</strong>
                                <div class="roadmap-item-info-inner">
                                    <h3 class="mb-0">Strategy</h3>
                                    <p class="mb-0">Ipsum dolor sit amet, consectetur adipiscing elit vestibulum ut nunc et enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item position-relative d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="roadmap-item-mckp">
                                <i>
                                    <svg class="Design.svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 315" style="enable-background:new 0 0 376 315;" xml:space="preserve"><title>Design</title>
<path class="rbsvgi_0" id="Shape_55" style="fill:#EBEDFD;" d="M351.7,60.5C322.8,22.6,260.6,6.7,202,1.8c-29.5-2.4-59.2-2.4-88.7,0.2l-3.2,0.3 C86.9,4.7,63,9.9,43.9,22.3c-6.4,4.1-12.1,9-17.1,14.7C5.3,61.8,2.6,97.3,1,130.1C-0.8,167-2.2,206,15.5,238.4s54.4,54.2,91,65.5 c62.7,19.3,134.9,14,189.7-20.3c9.7-6,18.7-12.9,27-20.7c7.3-6.8,13.9-14.4,19.6-22.6c12-16.9,20.9-35.8,26.5-55.8 C381.3,142,378,95.1,351.7,60.5z"></path>
<path class="rbsvgi_1" style="fill:#1C1C43;" d="M271,108.2v99.5c0,4.1-3.3,7.4-7.4,7.4H94.1c-4.1,0-7.4-3.3-7.4-7.4v-99.5c0-4.1,3.3-7.4,7.4-7.4l0,0h169.5 c4-0.1,7.3,3.2,7.4,7.2C271,108.1,271,108.1,271,108.2z"></path>
<path class="rbsvgi_2" style="fill:#FFFFFF;" d="M262.9,113.2v89.3c0,2.7-2.1,4.8-4.8,4.8H99.6c-1.1,0-2.1-0.4-2.9-1l-0.6-0.6c-0.8-0.9-1.2-2-1.2-3.2v-89.3 c0-2.7,2.1-4.8,4.8-4.8h0h158.5c0.9,0,1.7,0.2,2.4,0.7c0.7,0.4,1.2,0.9,1.6,1.6C262.6,111.5,262.9,112.3,262.9,113.2z"></path>
<rect class="rbsvgi_3" x="129.3" y="127.8" style="fill:#E1E1FD;" width="101.8" height="57.7"></rect>
<rect class="rbsvgi_4" x="129.3" y="127.8" style="fill:#313854;" width="101.8" height="5"></rect>
<circle class="rbsvgi_5" style="fill:#5948EB;" cx="220.5" cy="130.3" r="1"></circle>
<circle class="rbsvgi_6" style="fill:#5948EB;" cx="223.8" cy="130.3" r="1"></circle>
<circle class="rbsvgi_7" style="fill:#807FF4;" cx="227" cy="130.3" r="1"></circle>
<path class="rbsvgi_8" style="fill:#313854;" d="M140.8,182c-0.1,0-0.2-0.1-0.2-0.2v-45.6c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2v45.6L140.8,182z"></path>
<circle class="rbsvgi_9" style="fill:#313854;" cx="140.7" cy="136.2" r="0.7"></circle>
<circle class="rbsvgi_10" style="fill:#313854;" cx="140.7" cy="181.7" r="0.7"></circle>
<path class="rbsvgi_11" style="fill:#313854;" d="M219.4,182c-0.1,0-0.2-0.1-0.2-0.2v-45.6c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2v45.6 C219.7,181.8,219.6,182,219.4,182z"></path>
<circle class="rbsvgi_12" style="fill:#313854;" cx="219.4" cy="136.2" r="0.7"></circle>
<circle class="rbsvgi_13" style="fill:#313854;" cx="219.4" cy="181.7" r="0.7"></circle>
<rect class="rbsvgi_14" x="106" y="127.8" style="fill:#E1E1FD;" width="12.7" height="57.4"></rect>
<rect class="rbsvgi_15" x="106" y="127.8" style="fill:#313854;" width="12.7" height="3.8"></rect>
<rect class="rbsvgi_16" x="239.7" y="157" style="fill:#E1E1FD;" width="12.7" height="28.3"></rect>
<rect class="rbsvgi_17" x="239.7" y="157" style="fill:#313854;" width="12.7" height="4.1"></rect>
<rect class="rbsvgi_18" x="240" y="128" style="fill:#E1E1FD;" width="12.7" height="16.5"></rect>
<rect class="rbsvgi_19" x="240" y="128" style="fill:#313854;" width="12.7" height="4.1"></rect>
<path class="rbsvgi_20" style="fill:#313854;" d="M288.3,211.1v0.6c0.1,8-6.3,14.4-14.3,14.5c0,0-0.1,0-0.1,0h-190c-8,0-14.4-6.4-14.4-14.4c0,0,0-0.1,0-0.1v-0.6 H288.3z"></path>
<path class="rbsvgi_21" style="fill:#4A5377;" d="M154.3,211.1L154.3,211.1c-0.1,1,0.7,1.9,1.7,2.1h44.7c1-0.1,1.8-1,1.7-2.1c0,0,0,0,0,0H154.3z"></path>
<path class="rbsvgi_22" style="fill:#E1E1FD;" d="M262.9,113.2v5.3h-168v-5.3c0-1,0.3-1.9,0.9-2.7c0.9-1.2,2.4-2,3.9-2h158.5c1.5,0,3,0.8,3.9,2 C262.6,111.3,262.8,112.2,262.9,113.2z"></path>
<circle class="rbsvgi_23" style="fill:#5948EB;" cx="248.5" cy="114.2" r="1.4"></circle>
<circle class="rbsvgi_24" style="fill:#5948EB;" cx="253" cy="114.2" r="1.4"></circle>
<circle class="rbsvgi_25" style="fill:#807FF4;" cx="257.2" cy="114.2" r="1.4"></circle>
<path class="rbsvgi_26" style="fill:#FFFFFF;" d="M221.9,115.1h-88.4c-0.4,0-0.8-0.4-0.8-0.8v0v-1.2c0-0.4,0.4-0.8,0.8-0.8l0,0h88.4c0.4,0,0.8,0.4,0.8,0.8v0v1.2 C222.7,114.7,222.3,115.1,221.9,115.1z"></path>
<path class="rbsvgi_27" style="fill:#313854;" d="M111.3,113.7v1c0,0.2-0.2,0.4-0.4,0.4c-0.1,0-0.1,0-0.2-0.1l-0.9-0.5l-0.9-0.5c-0.2-0.1-0.2-0.4,0-0.6 c0,0,0,0,0,0l0.9-0.5l0.9-0.5c0.2-0.1,0.6,0,0.6,0.3V113.7z"></path>
<path class="rbsvgi_28" style="fill:#313854;" d="M115.8,113.7v1c0,0.2,0.2,0.4,0.4,0.4c0.1,0,0.1,0,0.2-0.1l0.9-0.5l0.9-0.5c0.2-0.1,0.2-0.4,0-0.6c0,0,0,0,0,0 l-0.9-0.5l-0.9-0.5c-0.2-0.1-0.6,0-0.6,0.3V113.7z"></path>
<path class="rbsvgi_29" style="fill:#CACAFC;" d="M262,110.5H95.7c0.9-1.2,2.4-2,3.9-2h158.5C259.6,108.5,261.1,109.3,262,110.5z"></path>
<path class="rbsvgi_30" style="fill:#E1E1FD;" d="M228.5,199.7H127c-2,0-3.6-1.6-3.6-3.6l0,0l0,0c0-2,1.6-3.6,3.6-3.6c0,0,0,0,0,0h101.5c2,0,3.6,1.6,3.6,3.6v0 l0,0C232,198.1,230.5,199.6,228.5,199.7z"></path>
<path class="rbsvgi_31" style="fill:#E4AB81;" d="M146.1,182.9c0.7,1.4,1.5,2.6,2.1,3.7c5.1,7.8,9,6.1,11,3.7c0.7-0.8,1.2-1.6,1.6-2.6c0.4-1,0.7-2,0.9-3l-1,0.2 c-1.4,0.7-2.9,1-4.4,1h-0.5c-1.2-0.5-2.9-2.9-4.1-4.8c-0.5-0.7-0.9-1.4-1.3-2.2L146.1,182.9z"></path>
<path class="rbsvgi_32" style="fill:#DF8266;" d="M146.1,182.9c0.7,1.4,1.5,2.6,2.1,3.7c1.4-1.7,2.7-3.6,3.6-5.6c-0.5-0.7-0.9-1.4-1.3-2.2L146.1,182.9z"></path>
<path class="rbsvgi_33" style="fill:#DF8266;" d="M155.4,186.2c0,0,1,3.2,5.6,1.5c0.4-1,0.7-2,0.9-3l-1,0.2c-1.4,0.7-2.9,1-4.4,1L155.4,186.2z"></path>
<path class="rbsvgi_34" style="fill:#E4AB81;" d="M119.8,189.4c0,0.9,0,1.8-0.1,2.7l0,0c0,0.2,0,0.4-0.1,0.5c-0.7,4.5-5.3,8.3-6.2,2.5c-0.1-0.8-0.2-1.7-0.2-2.5 V192c0-0.5,0.1-1.1,0.1-1.7c0-0.2,0-0.5,0.1-0.7c0-0.3,0.1-0.5,0.1-0.8l0.3-2c0.4-2,0.8-3.9,1.4-5.8l0.8-2.8l3.2,3.9 c0.2,1.2,0.4,2.3,0.4,3.5v0.5c0.1,0.9,0.1,1.7,0.1,2.6l0,0C119.8,188.9,119.8,189.2,119.8,189.4z"></path>
<path class="rbsvgi_35" style="fill:#DF8266;" d="M115.2,181.2c1,2.1,2.6,3.8,4.5,5.1v-0.5c-0.2-2-0.4-3.5-0.4-3.5l-3.2-3.9 C115.7,179.3,115.4,180.2,115.2,181.2z"></path>
<path class="rbsvgi_36" style="fill:#DF8266;" d="M119.8,189.4c0,0.9,0,1.8-0.1,2.7c-2.2,0.2-4.3,0.3-6.5,0.1c0-0.5,0.1-1.1,0.1-1.7c0-0.2,0-0.5,0.1-0.7 l6.4-0.9l0,0V189.4z"></path>
<path class="rbsvgi_37" style="fill:#807FF4;" d="M147,169c0,0,4.6,8.1,5.4,10.9c0,0-3.1,5.3-6,5.8l-1.1-3.6C145.3,182.1,145.2,170.9,147,169z"></path>
<path class="rbsvgi_38" style="fill:#807FF4;" d="M136.9,164.8L147,169l-4.5,34.6c0,0-13.9,2-21.1,0V169l9.8-4.4L136.9,164.8z"></path>
<path class="rbsvgi_39" style="fill:#5948EB;" d="M138.9,183.7c-2,2.1-4.6,3.6-7.4,4.4l-0.3-0.2l0,0c0-0.1,0.1-0.2,0.2-0.2c2.7-0.8,5.2-2.2,7.2-4.3 c0-0.1,0.1-0.2,0.2-0.1s0.2,0.1,0.1,0.2l0,0l0,0C139,183.6,139,183.6,138.9,183.7z"></path>
<path class="rbsvgi_40" style="fill:#5948EB;" d="M138.8,180.4L138.8,180.4l-0.4,0.6c-1.2,1.7-3,2.9-5,3.4h-0.3c0-0.1,0-0.2,0.1-0.2c2.2-0.5,4-1.9,5.1-3.8 C138.6,180.1,138.8,180.2,138.8,180.4z"></path>
<path class="rbsvgi_41" style="fill:#5948EB;" d="M138.5,171.4L138.5,171.4c0,0.1-0.1,0.2-0.2,0.2c-2-0.4-3.9-1.3-5.6-2.5c-1-0.7-1.9-1.6-2.7-2.5 c-0.1-0.1,0-0.2,0-0.3s0.2,0,0.3,0c2,2.5,4.9,4.2,8,4.9L138.5,171.4z"></path>
<path class="rbsvgi_42" style="fill:#E4AB81;" d="M154,225.7l-1.1-5.6h3.7l0.9,5.3C156.4,225.9,155.2,226,154,225.7z"></path>
<path class="rbsvgi_43" style="fill:#807FF4;" d="M156.5,225.6c0,0,0.8-1.1,1.5-1s5.6,4.1,7.3,4.4c0.7,0,1.3,0.5,1.4,1.2c0,0.4-0.1,0.7-0.4,1 c-0.3,0.6-13.6-0.4-13.6-0.4s-0.3-4,0.1-5.2S155.2,225.9,156.5,225.6z"></path>
<path class="rbsvgi_44" style="fill:#FFFFFF;" d="M159.3,228.4h-0.2c-0.1-0.1-0.2-0.2-0.1-0.3c0.3-0.5,0.8-1,1.3-1.3c0.5-0.3,1.2-0.3,1.7,0.1 c0.1,0.1,0.1,0.2,0,0.3s-0.2,0.1-0.3,0c-0.4-0.2-0.8-0.2-1.2,0C159.9,227.5,159.5,228.3,159.3,228.4L159.3,228.4z"></path>
<path class="rbsvgi_45" style="fill:#FFFFFF;" d="M158.6,227.7h-0.2c-0.1-0.1-0.2-0.2-0.1-0.3c0.3-0.5,0.8-1,1.3-1.3c0.5-0.3,1.2-0.3,1.7,0.1 c0.1,0.1,0.1,0.2,0,0.3s-0.2,0.1-0.3,0c-0.4-0.2-0.8-0.2-1.2,0C159.2,226.8,158.8,227.6,158.6,227.7L158.6,227.7z"></path>
<path class="rbsvgi_46" style="fill:#FFFFFF;" d="M160.2,228.9H160c-0.1-0.1-0.2-0.2-0.1-0.3c0.3-0.5,0.8-1,1.3-1.3c0.5-0.3,1.2-0.3,1.7,0.1 c0.1,0.1,0.1,0.2,0,0.3s-0.2,0.1-0.3,0c-0.4-0.2-0.8-0.2-1.2,0C160.8,228,160.4,228.8,160.2,228.9 C160.2,228.8,160.3,228.9,160.2,228.9z"></path>
<path class="rbsvgi_47" style="fill:#1C1C43;" d="M137.2,200.1c0,0,6.3-15.7,10.3-15.1c6.1,1,10.2,19.7,9.7,37.2l-4.2,0.2c0,0-4.7-16.5-5.5-20.8 c0,0-3.2,11.2-10.5,9.6C131.6,210.2,135.1,204.6,137.2,200.1z"></path>
<path class="rbsvgi_48" style="fill:#313854;" d="M153.5,221.7h0.5c0-0.1-1.1-6.2-2.5-12.4c-2.8-12.6-3.8-13.2-4.1-13.4c-0.2-0.1-0.5-0.2-0.7-0.1 c-0.7,0.3-1,1.8-1.6,4s-2,8.5-5.2,10.6l0.3,0.4c3.4-2.2,4.6-7.2,5.4-10.9c0.4-1.8,0.8-3.4,1.3-3.6h0.2 C148.5,197.1,151.7,211.9,153.5,221.7z"></path>
<polygon class="rbsvgi_49" style="fill:#313854;" points="157.6,220.9 152.4,221.3 152.3,221.4 152.6,223.1 157.7,222.7 "></polygon>
<path class="rbsvgi_50" style="fill:#313854;" d="M138.8,211.4c-5.7,0.8-11.5,0.7-17.1-0.3c0.7-3.9,2.7-7.4,5.6-10l13.2,1C141.3,205.1,140.7,208.2,138.8,211.4z"></path>
<path class="rbsvgi_51" style="fill:#807FF4;" d="M140.9,224.4l2.2-0.4c0.5,0,3.5,3.7,4.6,4s1.8,3.5,0.6,3.6c-3.5,0.3-9.3-1.4-9.3-1.4c-0.2-1.7-0.2-3.4-0.1-5.1 C139.3,223.9,139.9,224.7,140.9,224.4z"></path>
<path class="rbsvgi_52" style="fill:#E4AB81;" d="M139.9,224.7l-1.3-5h3.7l0.8,4.8C142.1,225,140.9,225.1,139.9,224.7z"></path>
<path class="rbsvgi_53" style="fill:#FFFFFF;" d="M143.6,227.9h-0.2c-0.1-0.1-0.1-0.2-0.1-0.3c0.3-0.5,0.8-0.9,1.4-1.1c0.6-0.2,1.2-0.1,1.7,0.3 c0.1,0.1,0.1,0.2,0,0.3s-0.2,0.1-0.3,0c-0.3-0.2-0.8-0.3-1.2-0.2C144.4,227.1,144,227.5,143.6,227.9L143.6,227.9z"></path>
<path class="rbsvgi_54" style="fill:#FFFFFF;" d="M143,227.1h-0.2c-0.1-0.1-0.1-0.2-0.1-0.3c0.3-0.5,0.8-0.9,1.4-1.1c0.6-0.2,1.2-0.1,1.7,0.3 c0.1,0.1,0.1,0.2,0,0.3s-0.2,0.1-0.3,0c-0.3-0.2-0.8-0.3-1.2-0.2C143.8,226.3,143.4,226.7,143,227.1L143,227.1z"></path>
<path class="rbsvgi_55" style="fill:#FFFFFF;" d="M144.5,228.5h-0.2c-0.1-0.1-0.1-0.2-0.1-0.3c0.3-0.5,0.8-0.9,1.4-1.1c0.6-0.2,1.2-0.1,1.7,0.3 c0.1,0.1,0.1,0.2,0,0.3s-0.2,0.1-0.3,0l0,0c-0.3-0.2-0.8-0.3-1.2-0.2C145.3,227.7,144.9,228.1,144.5,228.5L144.5,228.5z"></path>
<path class="rbsvgi_56" style="fill:#1C1C43;" d="M122.6,211.3c0.9,0.2,1.7,0.2,2.6,0l0.8-0.2c4.9-1.7,7.1-9.4,7.1-9.4c0.8,4.3,5.7,20.8,5.7,20.8h1.3l2.9-0.4 c0.6-16.9-3.7-35.9-9.8-36.9c-3.9-0.6-10.3,15.1-10.3,15.1C120.7,204.6,117.2,210.2,122.6,211.3z"></path>
<path class="rbsvgi_57" style="fill:#313854;" d="M125.2,211.3l0.8-0.2c1.8-2.9,2.7-6.9,3.5-10.2s1.2-5,1.9-5.5s0.2-0.1,0.4,0s2.1,2.3,5,14 c1.4,5.6,2.5,11.1,2.8,12.9c0.1,0.2,0.1,0.4,0.1,0.6h0.5c0-0.2,0-0.3-0.1-0.5c-0.3-1.7-1.5-7.3-2.9-12.9 c-3.4-13.7-4.8-14.2-5.3-14.4c-0.3-0.1-0.6-0.1-0.8,0.1c-0.9,0.5-1.5,2.7-2.2,5.8S127.1,208.5,125.2,211.3z"></path>
<polygon class="rbsvgi_58" style="fill:#313854;" points="143.3,220.7 138.2,221.6 138.1,221.6 138.5,223.3 143.5,222.5 "></polygon>
<path class="rbsvgi_59" style="fill:#807FF4;" d="M121.4,169l-6.6,9.5c0,0,2.9,5.5,5.8,6.1c0,0,3-5.2,3.3-7.8S122.4,169.2,121.4,169z"></path>
<rect class="rbsvgi_60" x="98.1" y="178.5" transform="matrix(0.9947 -0.1028 0.1028 0.9947 -18.1115 14.9155)" style="fill:#5948EB;" width="75.1" height="9.4"></rect>
<rect class="rbsvgi_61" x="97.8" y="180.1" transform="matrix(0.9947 -0.1028 0.1028 0.9947 -17.8299 14.8715)" style="fill:#3E3EBC;" width="75.1" height="0.6"></rect>
<rect class="rbsvgi_62" x="98.1" y="182.9" transform="matrix(0.9947 -0.1028 0.1028 0.9947 -18.1115 14.9155)" style="fill:#3E3EBC;" width="75.1" height="0.6"></rect>
<rect class="rbsvgi_63" x="98.4" y="185.6" transform="matrix(0.9947 -0.1028 0.1028 0.9947 -18.3932 14.9585)" style="fill:#3E3EBC;" width="75.1" height="0.6"></rect>
<rect class="rbsvgi_64" x="98.3" y="182.2" transform="matrix(0.9947 -0.1028 0.1028 0.9947 -18.6815 11.2931)" style="fill:#313854;" width="3.9" height="9.4"></rect>
<path class="rbsvgi_65" style="fill:#807FF4;" d="M97.8,182.4h-1.1c-2.5,0.3-4.4,2.6-4.2,5.1l0,0c0.3,2.5,2.6,4.4,5.1,4.2h1.1L97.8,182.4z"></path>
<polygon class="rbsvgi_66" style="fill:#E4AB81;" points="173.5,184 172.5,174.7 179,176.8 180.4,177.2 184.2,178.5 180.6,180.3 179.1,181.1 "></polygon>
<path class="rbsvgi_67" style="fill:#313854;" d="M180.6,180.3c-0.2-0.5-0.3-1-0.4-1.5c-0.1-0.6,0-1.2,0.2-1.7l3.8,1.2L180.6,180.3z"></path>
<path class="rbsvgi_68" style="fill:#E4AB81;" d="M162,185.5c-0.2-0.9-0.4-1.7-0.8-2.5c-0.3-0.7-1.2-1.3-1.5-0.5s0.1,1.2,0.1,1.8l-0.4-1.4 c-0.3-0.9-0.9-1-1.1-0.4s0,0.6,0,1s0.2,1.4,0.2,1.4c0-0.7-0.2-1.4-0.5-2c-0.2-0.5-0.5-1.1-1.1-0.5s-0.2,1.3-0.1,2.4 s-0.2-1.5-0.8-1.9s-0.8-0.2-0.7,0.6s0.2,1.3,0.3,1.9s0.7,1.6,1.3,1.5s0.8-0.5,1.3-0.4c0.5,0.2,0.9,0.2,1.4,0 c0.3-0.2,0.7-0.2,1.1-0.1C160.9,186.6,161.9,186.2,162,185.5z"></path>
<path class="rbsvgi_69" style="fill:#E4AB81;" d="M119.9,190.6c0-0.9-0.2-1.8-0.4-2.6c-0.2-0.8-0.9-1.5-1.2-0.8c-0.2,0.6-0.3,1.2-0.3,1.8 c-0.1-0.5-0.2-0.9-0.2-1.4c-0.1-0.9-0.7-1.1-1-0.5s-0.1,0.6-0.2,1v1.4c0-0.7,0-1.4-0.2-2.1c-0.1-0.5-0.3-1.1-1-0.7s-0.4,1.3-0.5,2.3 s0.1-1.3-0.4-1.8s-0.9-0.5-1,0.2s0,1.3-0.1,1.9s0.4,1.7,1,1.7s0.9-0.3,1.3-0.2s1,0.4,1.3,0.3c0.4-0.1,0.8-0.1,1.1,0.1 C118.6,191.4,119.7,191.2,119.9,190.6z"></path>
<path class="rbsvgi_70" style="fill:#313854;" d="M139.9,153.6v1.1c-0.4,3.1-3.1,5.4-6.2,5.3c-3.1,0.1-5.8-2.3-6-5.4v-0.9c0-3.7,1.9-6.7,6.4-6.7 S139.9,149.9,139.9,153.6z"></path>
<path class="rbsvgi_71" style="fill:#DF8266;" d="M128.4,155.4c0,0-1-1.4-1.8-0.2s0.3,4.5,2.2,3.7L128.4,155.4z"></path>
<path class="rbsvgi_72" style="fill:#DB664F;" d="M128.4,157.8h-0.2c-0.3-0.7-0.8-1.2-1.4-1.5c-0.1,0-0.1-0.1-0.1-0.2s0.1-0.1,0.2-0.1c0.8,0.3,1.3,0.9,1.6,1.7 C128.6,157.8,128.6,157.9,128.4,157.8L128.4,157.8z"></path>
<path class="rbsvgi_73" style="fill:#DB664F;" d="M127.3,157.3L127.3,157.3c-0.2-0.1-0.2-0.2-0.1-0.2c0.2-0.2,0.4-0.4,0.6-0.5c0.1,0,0.2,0,0.2,0.1 s0,0.2-0.1,0.2C127.7,157,127.5,157.1,127.3,157.3C127.5,157.2,127.4,157.3,127.3,157.3z"></path>
<path class="rbsvgi_74" style="fill:#DF8266;" d="M139.1,155.4c0,0,1-1.4,1.8-0.2s-0.3,4.5-2.2,3.7L139.1,155.4z"></path>
<path class="rbsvgi_75" style="fill:#DB664F;" d="M139.1,157.8h0.2c0.3-0.7,0.8-1.2,1.4-1.5c0.1,0,0.1-0.1,0.1-0.2s-0.1-0.1-0.2-0.1c-0.8,0.3-1.3,0.9-1.6,1.7 C138.9,157.8,139,157.9,139.1,157.8L139.1,157.8z"></path>
<path class="rbsvgi_76" style="fill:#DB664F;" d="M140.2,157.3L140.2,157.3c0.2-0.1,0.2-0.2,0.1-0.2c-0.2-0.2-0.4-0.4-0.6-0.5c-0.1,0-0.2,0-0.2,0.1 s0,0.2,0.1,0.2C139.8,157,140,157.1,140.2,157.3C140.1,157.2,140.1,157.3,140.2,157.3z"></path>
<path class="rbsvgi_77" style="fill:#E4AB81;" d="M136.3,161.7v3.3c0,0-1,1.7-2.3,1.8s-2.5-1.5-2.5-1.5v-3.5L136.3,161.7z"></path>
<path class="rbsvgi_78" style="fill:#DF8266;" d="M136.3,161.7v1.5c-0.9,1-2.5,1.3-4.9,0.9v-2.2L136.3,161.7z"></path>
<path class="rbsvgi_79" style="fill:#E4AB81;" d="M139.8,153.1c-0.1,1.3-0.2,2.9-0.4,4.2s-0.1,0.6-0.2,0.9c-0.7,2.5-2.5,6.7-7.4,4.9c-2.2-0.8-3.2-3.2-3.6-5.7 c-0.3-1.5-0.4-3.1-0.3-4.6c0-1.2,0.7-2.4,1.8-3c2.5-1.2,5.4-1.3,8-0.3C139,150.2,139.9,151.6,139.8,153.1z"></path>
<ellipse class="rbsvgi_80" style="fill:#313854;" cx="131.7" cy="155.6" rx="0.4" ry="0.6"></ellipse>
<ellipse class="rbsvgi_81" style="fill:#313854;" cx="136.5" cy="155.6" rx="0.4" ry="0.6"></ellipse>
<path class="rbsvgi_82" style="fill:#313854;" d="M137.8,153.4c-0.7-0.3-1.5-0.3-2.3-0.1v0.6c0.7-0.1,1.5,0,2.2,0.2C137.8,153.9,137.9,153.6,137.8,153.4z"></path>
<path class="rbsvgi_83" style="fill:#313854;" d="M130.2,153.4c0.7-0.3,1.5-0.3,2.3-0.1v0.6c-0.7-0.1-1.5,0-2.2,0.2L130.2,153.4z"></path>
<path class="rbsvgi_84" style="fill:#DF8266;" d="M133.9,158.4h-0.6c-0.1,0-0.1-0.1-0.1-0.2s0.1-0.1,0.2-0.1s0.5,0.1,0.6,0v-0.2c-0.1-0.8-0.2-1.6-0.4-2.4 c0-0.1,0-0.2,0.1-0.2s0.2,0,0.2,0.1s0.4,1.9,0.4,2.5c0,0.2-0.1,0.3-0.2,0.4C134.2,158.3,134,158.4,133.9,158.4z"></path>
<path class="rbsvgi_85" style="fill:#FFFFFF;" d="M131.8,159.3c0.1,1,1,1.9,2,1.9c1,0.1,1.9-0.7,2-1.8c0,0,0-0.1,0-0.1H131.8z"></path>
<path class="rbsvgi_86" style="fill:#DF8266;" d="M133.6,162.2l0.8-0.2c0.1,0,0.1-0.1,0.1-0.2h-0.2l-0.6,0.2l-0.6-0.2c-0.1,0-0.2,0-0.2,0.1s0,0.2,0.1,0.2 L133.6,162.2z"></path>
<path class="rbsvgi_87" style="fill:#313854;" d="M139.7,155.4H139c0-0.8-0.1-1.5-0.4-2.2c-0.5-1.3,0.6-1.9-0.3-2.6s-3-0.4-4.4-0.4h-4.4c-0.6,0.1-0.3,1.1,0,1.8 s-0.7,1.6-0.9,2.3v0.9H128c-0.1-0.8-0.1-1.7-0.1-2.5c0-1.2,0.7-2.4,1.8-3c2.5-1.2,5.4-1.3,8-0.3c1.4,0.5,2.3,1.9,2.2,3.4 C139.8,153.7,139.7,154.5,139.7,155.4z"></path>
<path class="rbsvgi_88" style="fill:#FFFFFF;" d="M134.9,156c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S134.9,157.1,134.9,156z M135.2,156c0,0.9,0.8,1.7,1.7,1.7 c0.9,0,1.7-0.8,1.7-1.7c0.1-0.9-0.6-1.6-1.5-1.7c-0.1,0-0.1,0-0.2,0C136,154.3,135.2,155.1,135.2,156z"></path>
<path class="rbsvgi_89" style="fill:#FFFFFF;" d="M129.5,156c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S129.5,157.1,129.5,156z M129.8,156c0,0.9,0.8,1.7,1.7,1.7 c0.9,0,1.7-0.8,1.7-1.7c0.1-0.9-0.6-1.6-1.5-1.7c-0.1,0-0.1,0-0.2,0C130.6,154.3,129.8,155.1,129.8,156z"></path>
<path class="rbsvgi_90" style="fill:#FFFFFF;" d="M139.9,154.4c0.1,0.1,0,0.3,0,0.3c-0.4,0.1-0.9,0.3-1.2,0.6h-0.2c-0.1-0.1-0.1-0.2,0-0.2 C138.8,154.7,139.4,154.4,139.9,154.4z"></path>
<path class="rbsvgi_91" style="fill:#FFFFFF;" d="M129.9,155.3h-0.2c-0.6-0.4-1.4-0.6-2.1-0.7c-0.1-0.1-0.1-0.2,0-0.3c0,0,0,0,0,0c0.8,0,1.6,0.3,2.3,0.8 C130,155.2,130,155.3,129.9,155.3z"></path>
<path class="rbsvgi_92" style="fill:#FFFFFF;" d="M133.3,155.6c0,0,0.4-0.5,0.8-0.5c0.3,0,0.6,0.2,0.8,0.5l0.3-0.2c-0.3-0.4-0.7-0.6-1.1-0.6 c-0.4,0.1-0.8,0.3-1.1,0.6L133.3,155.6z"></path>
<path class="rbsvgi_93" style="fill:#EEBF3C;" d="M205.7,69.2c0,4.4-1.1,8.6-3.3,12.4c-3.8,6.5-7.3,13.1-10.6,19.9l-1.8,3.8h-18.3l-2.7-5.5 c-3-6.1-6.2-12.1-9.7-18c-2.2-3.8-3.4-8.1-3.4-12.5c0-13.5,10.8-24.5,24.3-24.9h0.7c13.6-0.1,24.7,11,24.8,24.6 C205.7,69.1,205.7,69.1,205.7,69.2z"></path>
<path class="rbsvgi_94" style="fill:#F6E1A1;" d="M160.9,71.2c-1,0-1.8-0.7-1.9-1.7c-0.1-5.2,1.5-10.2,4.6-14.4c5.2-7.3,13.9-8,14.2-8c1-0.1,1.9,0.8,2,1.8 c0.1,1-0.8,1.9-1.8,2c-0.1,0-7.3,0.6-11.4,6.4c-2.5,3.5-3.9,7.6-3.9,11.9C162.8,70.2,162,71.1,160.9,71.2 C160.9,71.2,160.9,71.2,160.9,71.2L160.9,71.2z"></path>
<path class="rbsvgi_95" style="fill:#807FF4;" d="M189.2,80.5l-0.3-0.2l-0.8-1.6l-0.8,1.6l-0.3,0.2l-0.3-0.2l-0.8-1.6l-0.8,1.6l-0.3,0.2l0,0l-0.3-0.2l-0.8-1.6 l-0.8,1.6l-0.3,0.2l0,0l-0.3-0.2l-0.8-1.6l-0.8,1.6l-0.3,0.2l-0.3-0.2l-0.8-1.6l-0.8,1.6l-0.3,0.2l0,0l-0.3-0.2l-0.8-1.6l-0.8,1.6 l-0.3,0.2l-0.3-0.2l-0.8-1.6l-0.8,1.6l-0.3,0.2l0,0l-0.3-0.2l-1.2-2.2c0-0.2,0.1-0.4,0.4-0.4c0.1,0,0.3,0,0.3,0.1l0.8,1.6l0.8-1.6 l0.3-0.2l0.3,0.2l0.8,1.6l0.8-1.6l0.3-0.2l0.3,0.2l0.8,1.6l0.8-1.6l0.3-0.2l0.3,0.2l0.8,1.6l0.8-1.6l0.3-0.2l0.3,0.2l0.8,1.6 l0.8-1.6l0.3-0.2l0,0l0.3,0.2l0.8,1.6l0.8-1.6l0.3-0.2l0.3,0.2l0.8,1.6l0.8-1.6l0.3-0.2l0.3,0.2l0.8,1.6l0.8-1.6 c0.1-0.2,0.4-0.2,0.6,0c0.1,0.1,0.1,0.2,0.1,0.3l-1.2,2.2C189.5,80.5,189.4,80.5,189.2,80.5z"></path>
<polygon class="rbsvgi_96" style="fill:#313854;" points="175.9,105.2 170.7,78.9 171.5,78.7 176.7,105.3 "></polygon>
<circle class="rbsvgi_97" style="fill:#313854;" cx="171.1" cy="78.8" r="1.7"></circle>
<polygon class="rbsvgi_98" style="fill:#313854;" points="186.6,105.2 191.7,78.9 191,78.7 185.8,105.2 "></polygon>
<circle class="rbsvgi_99" style="fill:#313854;" cx="191.4" cy="78.8" r="1.7"></circle>
<path class="rbsvgi_100" style="opacity:0.4;fill:#F7E3A8;enable-background:new;" d="M205.7,69.2c0,4.4-1.1,8.6-3.3,12.4c-3.8,6.5-7.3,13.1-10.6,19.9l-1.8,3.8h-16.5c10.6-1.1,22.5-20.3,20.8-38.7 S181,44.5,180.2,44.3h0.7C194.6,44.4,205.7,55.5,205.7,69.2z"></path>
<path class="rbsvgi_101" style="fill:#313854;" d="M190.8,106.5v2.7c0,0.7-0.6,1.3-1.3,1.3l0,0h-17.8c-0.7,0-1.3-0.6-1.3-1.3v0v-2.7c0-0.7,0.6-1.3,1.3-1.3l0,0 h17.8C190.2,105.2,190.8,105.8,190.8,106.5L190.8,106.5z"></path>
<path class="rbsvgi_102" style="fill:#1C1C43;" d="M190.8,107.6v1.6c0,0.7-0.6,1.3-1.3,1.3l0,0h-17.8c-0.7,0-1.3-0.6-1.3-1.3v0v-1.6H190.8z"></path>
<path class="rbsvgi_103" style="fill:#313854;" d="M190.8,111.7v2.7c0,0.6-0.4,1.1-1,1.2h-18.2c-0.6-0.1-1-0.6-1-1.2v-2.7c0-0.7,0.6-1.3,1.3-1.3l0,0h17.8 C190.4,110.5,190.9,111,190.8,111.7C190.8,111.7,190.8,111.7,190.8,111.7z"></path>
<path class="rbsvgi_104" style="fill:#1C1C43;" d="M190.8,112.8v1.6c0,0.6-0.4,1.1-1,1.2h-18.3c-0.6-0.1-1-0.6-1-1.2v-1.6H190.8z"></path>
<path class="rbsvgi_105" style="fill:#313854;" d="M190.8,116.9v2.7c0,0.6-0.4,1.1-1,1.2h-18.2c-0.6-0.1-1-0.6-1-1.2v-2.7c0-0.7,0.6-1.3,1.3-1.3l0,0h17.8 C190.4,115.7,190.9,116.2,190.8,116.9C190.8,116.9,190.8,116.9,190.8,116.9z"></path>
<path class="rbsvgi_106" style="fill:#1C1C43;" d="M190.8,118v1.6c0,0.6-0.4,1.1-1,1.2h-18.2c-0.6-0.1-1-0.6-1-1.2V118H190.8z"></path>
<path class="rbsvgi_107" style="fill:#1C1C43;" d="M175.8,120.8c0,2.8,2.2,5,5,5s5-2.2,5-5H175.8z"></path>
<path class="rbsvgi_108" style="fill:#807FF4;" d="M210.2,230.3h-11.7c-1.6,0-3-1-3.5-2.5l-4.9-15.2c-0.2-0.5,0.1-1.1,0.7-1.3c0.1,0,0.2,0,0.2,0 c8.9-0.7,17.8-0.7,26.7,0c0.6,0,1,0.5,0.9,1.1c0,0.1,0,0.2,0,0.2l-4.9,15.2C213.2,229.3,211.8,230.3,210.2,230.3z"></path>
<ellipse class="rbsvgi_109" style="fill:#1C1C43;" cx="204.4" cy="212.4" rx="13.1" ry="0.7"></ellipse>
<path class="rbsvgi_110" style="fill:#3E3EBC;" d="M204.9,201.6c0,0-0.1-8.5-10.8-9.8C194.1,191.7,194.4,203.8,204.9,201.6z"></path>
<path class="rbsvgi_111" style="fill:#3E3EBC;" d="M203.7,191.5c0,0,1.1-8.4,11.8-8.6C215.6,182.9,213.9,194.8,203.7,191.5z"></path>
<path class="rbsvgi_112" style="fill:#5948EB;" d="M203.7,184.6v27.7c0.4,0.1,0.8,0.1,1.2,0v-27.7c0-0.3-0.3-0.6-0.6-0.6h0l0,0C204,184,203.7,184.3,203.7,184.6z"></path>
<path class="rbsvgi_113" style="fill:#5948EB;" d="M204.2,192c0,0,6.3,6,13.5-5.6C217.7,186.4,205.2,183.9,204.2,192z"></path>
<path class="rbsvgi_114" style="fill:#5948EB;" d="M204.6,201.4c0,0,7,5.1,12.6-7.4C217.2,194,204.6,193.2,204.6,201.4z"></path>
<path class="rbsvgi_115" style="fill:#5948EB;" d="M204.4,202.5c0,0-0.2-8.7-13.5-5.5C190.8,197,197.9,207.5,204.4,202.5z"></path>
<path class="rbsvgi_116" style="fill:#5948EB;" d="M205,191.6c0,0,0-8.7-13.4-5.9C191.6,185.7,198.4,196.4,205,191.6z"></path>
<path class="rbsvgi_117" style="fill:#5948EB;" d="M0,0"></path></svg>
                                </i>
                            </div>
                            <div class="roadmap-item-info">
                                <strong class="text-color3">02</strong>
                                <div class="roadmap-item-info-inner">
                                    <h3 class="mb-0">Design</h3>
                                    <p class="mb-0">Ipsum dolor sit amet, consectetur adipiscing elit vestibulum ut nunc et enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item rev position-relative d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="roadmap-item-mckp">
                                <i>
                                    <svg class="Develop.svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 375.9 315" style="enable-background:new 0 0 375.9 315;" xml:space="preserve"><title>Develop</title>
                                        <path class="rbsvgi_0" style="fill:#EBEDFD;" d="M351.7,60.5C322.8,22.6,260.6,6.7,202,1.8c-29.5-2.4-59.2-2.4-88.7,0.2l-3.2,0.3C86.9,4.7,63,9.9,43.9,22.3 c-6.4,4.1-12.1,9-17.1,14.7C5.3,61.8,2.6,97.3,1,130.1C-0.8,167-2.1,206,15.5,238.4s54.4,54.2,91,65.5 c62.7,19.3,134.9,14,189.7-20.3c9.7-6,18.7-12.9,27-20.7c7.3-6.8,13.9-14.4,19.6-22.6c12-16.9,20.9-35.8,26.5-55.8 C381.3,142,378,95.1,351.7,60.5z"></path>
                                        <path class="rbsvgi_1" style="fill:#6899FC;" d="M258.4,199.7c8.2-5,10.8-15.7,5.8-23.9c-1.1-1.8-2.5-3.3-4.1-4.6c2.2-3,4.6-5.9,7.2-8.5l3.8-3.6l1.5,1.3 l4.3-2.6c2.2-1.3,5-0.6,6.4,1.5l4.2,6.9c1.3,2.2,0.6,5-1.5,6.4l-4.3,2.6c1,3.2,1.4,6.5,1.4,9.9l4.8,1.3c2.4,0.7,3.9,3.2,3.2,5.7 c0,0,0,0,0,0l-2.2,7.8c-0.7,2.4-3.2,3.9-5.7,3.2c0,0,0,0,0,0l-4.8-1.3c-1.3,2.2-2.8,4.2-4.6,6.1l2.6,4.3c1.3,2.2,0.6,5-1.5,6.4 l-6.9,4.2c-2.2,1.3-5,0.6-6.4-1.5L259,217c-2.5,0.7-5,1.2-7.6,1.3c-1.5-5.3-2.1-10.7-1.9-16.2C252.6,202.3,255.8,201.4,258.4,199.7z "></path>
                                        <path class="rbsvgi_2" style="fill:#313853;" d="M246.7,219.9H96.5c-3.8,0-6.9-3.1-6.9-6.9V110.3c0-3.8,3.1-6.9,6.9-6.9l0,0h150.2c3.8,0,6.9,3.1,6.9,6.9V213 C253.6,216.8,250.5,219.9,246.7,219.9z"></path>
                                        <path class="rbsvgi_3" style="fill:#41497A;" d="M246,218.4H97.2c-3,0-5.5-2.5-5.5-5.5l0,0V110.4c0-3,2.5-5.5,5.5-5.5H246c3,0,5.5,2.5,5.5,5.5v102.5 C251.5,215.9,249,218.4,246,218.4L246,218.4z"></path>
                                        <path class="rbsvgi_4" style="fill:#313853;" d="M241.2,208.4H102c-1.9,0-3.4-1.5-3.4-3.4v-91.4c0-1.9,1.5-3.4,3.4-3.4l0,0h139.2c1.9,0,3.4,1.5,3.4,3.4V205 C244.6,206.9,243.1,208.4,241.2,208.4z"></path>
                                        <path class="rbsvgi_5" style="fill:#313853;" d="M85.6,213.9c-0.5,0.9-0.8,1.9-0.8,2.9c0,3.4,2.8,6.2,6.2,6.2h161.3c3.4,0,6.2-2.8,6.2-6.2c0-1-0.3-2-0.8-2.9 H85.6z"></path>
                                        <path class="rbsvgi_6" style="fill:#313853;" d="M85.6,219.7c1.1,2,3.1,3.2,5.4,3.2h161.3c2.2,0,4.3-1.2,5.4-3.2H85.6z"></path>
                                        <path class="rbsvgi_7" style="opacity:0.2;fill:#444460;enable-background:new;" d="M246.3,103.3H136.8v73.2c0,1.6,1.3,2.9,2.9,2.9h113.9v-68.8C253.6,106.6,250.3,103.3,246.3,103.3z"></path>
                                        <path class="rbsvgi_8" style="opacity:0.21;fill:#E4E9FE;enable-background:new;" d="M266.2,176.1H143.6c-1.5,0-2.8-1.3-2.8-2.8l0,0V97.6c0-1.5,1.3-2.8,2.8-2.8l0,0h122.6c1.5,0,2.8,1.3,2.8,2.8 v75.8c0,1.5-1.2,2.7-2.7,2.7C266.3,176.1,266.2,176.1,266.2,176.1z"></path>
                                        <path class="rbsvgi_9" style="fill:#F9FBFC;" d="M271.4,170.6H148.7c-1.5,0-2.8-1.3-2.8-2.8l0,0V92.1c0-1.5,1.3-2.8,2.8-2.8l0,0h122.6c1.5,0,2.8,1.3,2.8,2.8 v75.8C274.1,169.4,272.9,170.6,271.4,170.6L271.4,170.6z"></path>
                                        <path class="rbsvgi_10" style="opacity:0.2;fill:#444460;enable-background:new;" d="M122.4,144.8h-13.2c-0.9,0-1.7-0.8-1.7-1.7v-13.9c0-0.9,0.8-1.7,1.7-1.7h13.2c0.9,0,1.7,0.8,1.7,1.7v13.9 c0.1,0.9-0.6,1.6-1.5,1.7C122.5,144.8,122.5,144.8,122.4,144.8z"></path>
                                        <path class="rbsvgi_11" style="fill:#87B7FD;" d="M121.4,170.1h-13.2c-0.9,0-1.7-0.8-1.7-1.7v-13.9c0-0.9,0.8-1.7,1.7-1.7h13.2c0.9,0,1.7,0.8,1.7,1.7v13.9 c0.1,0.9-0.6,1.6-1.5,1.7C121.5,170.1,121.5,170.1,121.4,170.1z"></path>
                                        <path class="rbsvgi_12" style="fill:#87B7FD;" d="M121.4,194.8h-13.2c-0.9,0-1.7-0.8-1.7-1.7v-13.9c0-0.9,0.8-1.7,1.7-1.7h13.2c0.9,0,1.7,0.8,1.7,1.7v13.9 c0.1,0.9-0.6,1.6-1.5,1.7C121.5,194.8,121.5,194.8,121.4,194.8z"></path>
                                        <path class="rbsvgi_13" style="fill:#8A6FEA;" d="M118.5,184.2c0-2.2-1.8-4-4-4s-4,1.8-4,4c0,0-0.6,4.2,4,7.5C119,188.4,118.5,184.2,118.5,184.2z"></path>
                                        <path class="rbsvgi_14" style="fill:#F9FBFC;" d="M114.7,187.1c-1.6,0.1-3-1.1-3.1-2.7c0-0.1,0-0.3,0-0.4c0.1-1.4,1.2-2.5,2.6-2.6c1.6-0.1,3,1.1,3.1,2.7 c0,0.1,0,0.3,0,0.4C117.2,185.9,116.1,187,114.7,187.1z"></path>
                                        <circle class="rbsvgi_15" style="fill:#8A6FEA;" cx="114.4" cy="161.2" r="5.5"></circle>
                                        <circle class="rbsvgi_16" style="fill:#F9FBFC;" cx="114.4" cy="161.2" r="4.4"></circle>
                                        <path class="rbsvgi_17" style="fill:#AD86EA;" d="M114.4,156.7c2,0,3.7,1.3,4.2,3.2c0,0.1,0.1,0.1,0.2,0.1l0,0l0.2-0.2c-0.8-2.5-3.4-4-6-3.2 c-1.6,0.5-2.8,1.7-3.2,3.2c0,0.1,0.1,0.2,0.2,0.2h0.2C110.7,158.1,112.4,156.7,114.4,156.7z"></path>
                                        <path class="rbsvgi_18" style="fill:#7558E9;" d="M119.3,161.3c-0.3,0-0.5,0.2-0.5,0.5c-0.3,2.2-2.2,3.9-4.4,3.8c-2.2,0-4.1-1.6-4.4-3.8c0-0.3-0.2-0.5-0.5-0.5 l0,0c-0.3,0-0.5,0.2-0.5,0.5c0,0,0,0.1,0,0.1c0.4,2.7,2.7,4.7,5.4,4.7c2.7,0,5-2,5.4-4.7c0.1-0.3-0.1-0.5-0.4-0.6 C119.4,161.3,119.3,161.3,119.3,161.3z"></path>
                                        <circle class="rbsvgi_19" style="fill:#F9FBFC;" cx="114.4" cy="161.2" r="4.4"></circle>
                                        <path class="rbsvgi_20" style="fill:#8A6FEA;" d="M118.7,162.6h-0.2c-0.7,2.3-3.1,3.5-5.4,2.8c-1.3-0.4-2.4-1.5-2.8-2.8c0-0.1-0.1-0.1-0.2-0.1l0,0l-0.2,0.2 c0.9,2.5,3.7,3.8,6.2,2.8c1.3-0.5,2.3-1.5,2.8-2.8c0.1-0.1,0-0.2-0.2-0.2L118.7,162.6z"></path>
                                        <path class="rbsvgi_21" style="fill:#8A6FEA;" d="M114.4,161.6L114.4,161.6l-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2l0,0l0.2,0.2v3.1L114.4,161.6z"></path>
                                        <path class="rbsvgi_22" style="fill:#8A6FEA;" d="M114.3,161.2L114.3,161.2c0.1-0.1,0.2-0.1,0.3,0c0,0,0,0,0,0l1.9,1.6c0.1,0.1,0.1,0.2,0,0.3c0,0,0,0,0,0l0,0 c-0.1,0.1-0.2,0.1-0.3,0c0,0,0,0,0,0l-1.9-1.6C114.2,161.5,114.2,161.3,114.3,161.2z"></path>
                                        <rect class="rbsvgi_23" x="114.3" y="157.1" style="fill:#CFD5FD;" width="0.2" height="0.4"></rect>
                                        <rect class="rbsvgi_24" x="114.3" y="164.8" style="fill:#CFD5FD;" width="0.2" height="0.4"></rect>
                                        <rect class="rbsvgi_25" x="110.3" y="161" style="fill:#CFD5FD;" width="0.4" height="0.2"></rect>
                                        <rect class="rbsvgi_26" x="118" y="161" style="fill:#CFD5FD;" width="0.4" height="0.2"></rect>
                                        <rect class="rbsvgi_27" x="111.6" y="158.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -79.2081 125.36)" style="fill:#CFD5FD;" width="0.2" height="0.4"></rect>
                                        <rect class="rbsvgi_28" x="117" y="163.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -81.5634 130.8152)" style="fill:#CFD5FD;" width="0.2" height="0.4"></rect>
                                        <rect class="rbsvgi_29" x="111.4" y="163.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -83.1341 126.86)" style="fill:#CFD5FD;" width="0.4" height="0.2"></rect>
                                        <rect class="rbsvgi_30" x="116.9" y="158.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -77.7081 129.2031)" style="fill:#CFD5FD;" width="0.4" height="0.2"></rect>
                                        <path class="rbsvgi_31" style="fill:#87B7FD;" d="M121.4,144.3h-13.2c-0.9,0-1.7-0.8-1.7-1.7v-13.9c0-0.9,0.8-1.7,1.7-1.7h13.2c0.9,0,1.7,0.8,1.7,1.7v13.9 c0.1,0.9-0.6,1.6-1.5,1.7C121.5,144.3,121.5,144.3,121.4,144.3z"></path>
                                        <polyline class="rbsvgi_32" style="fill:#EDD2A9;" points="105.7,142.5 107.1,141.5 107.7,139.3 107,139.1 106.6,140 107,136 106.3,136.2 105.6,140 104.8,141.7 105.6,142.2 "></polyline>
                                        <polygon class="rbsvgi_33" style="fill:#EDD2A9;" points="113.8,146.6 114,144.9 116,142.9 116.5,143.5 115.7,144.4 119.6,143.5 119.6,144.3 116,145.7 115.3,146.9 "></polygon>
                                        <polygon class="rbsvgi_34" style="fill:#534EB4;" points="88.8,187.3 96.2,223.9 101.9,223.3 98.1,221.9 99.5,221.5 97.5,187.3 "></polygon>
                                        <path class="rbsvgi_35" style="fill:#534EB4;" d="M100.7,186.7c0,0,9.5,8.9,8.1,19.6c-1.6,8.5-5.1,11.7-5.1,11.7l-1-0.2l1.6,4.1l-4.6-4.9c0,0,5.6-7.7,2.1-15.8 c-2.2-4.9-6.2-8.8-11.1-10.9c0,0,6.5-5.9,7-5.8L100.7,186.7z"></path>
                                        <path class="rbsvgi_36" style="fill:#E58A47;" d="M104.7,141.1c0,0-15.6,19-17.5,22.8c0,0-0.8,1.4-0.8,5.3s1.4,18.5,1.4,18.5l15.9,0.9l-5.3-18.2 c-1.3-1.8-3.1-3.1-5.2-3.8l13.4-24.1L104.7,141.1z"></path>
                                        <path class="rbsvgi_37" style="fill:#EDD2A9;" d="M94.8,164.8c0,0,0.7,2,1,3.2s-3.3-0.1-4.4-1.6l1.2-2.9L94.8,164.8z"></path>
                                        <path class="rbsvgi_38" style="fill:#EDD2A9;" d="M97.3,158.6c0,0,1,5.6,0,6.9s-4.3-0.9-5.6-2.9s-1.6-6.6,0.7-7C94.6,155.2,96.7,156.5,97.3,158.6z"></path>
                                        <path class="rbsvgi_39" style="fill:#E58A47;" d="M95.8,169c0,0,12.5-7.9,13.5-9.5s3.8-13.6,3.8-13.6l2.4,0.6c0,0-1.4,13.4-1.8,14.9S101,176,98.1,176 S94.4,172.2,95.8,169z"></path>
                                        <path class="rbsvgi_40" style="fill:#534EB4;" d="M90.6,155.8c1.1-1.4,2.9-2.1,4.6-1.7c2.9,0.5,3.7-0.1,3.7-0.1s-0.6,3.2-2.7,3.9s-2.6,0.5-2.6,0.5 c0.6,0.6,1,1.2,1.4,1.9c0.3,0.8-0.9-1-1.4-0.4s0,2,0.9,1.9s0.4,0.6,0,1.4s-0.9,1.6-1.5,1.4c-1.5-0.7-2.7-2.1-3.2-3.7 C89.1,158.7,88.9,156.5,90.6,155.8z"></path>
                                        <path class="rbsvgi_41" style="fill:#E4E9FE;" d="M191,162.7h-35.9c-0.7,0-1.3-0.6-1.3-1.3l0,0V99.2c0-0.7,0.6-1.3,1.3-1.3l0,0H191c0.7,0,1.3,0.6,1.3,1.3v0 v62.2C192.3,162.1,191.7,162.7,191,162.7L191,162.7z"></path>
                                        <path class="rbsvgi_42" style="fill:#87B7FD;" d="M184.3,108.6h-22.8c-0.6,0-1-0.4-1-1v-3.4c0-0.6,0.4-1,1-1h22.8c0.6,0,1,0.4,1,1v3.4 C185.3,108.2,184.9,108.6,184.3,108.6z"></path>
                                        <path class="rbsvgi_43" style="fill:#87B7FD;" d="M168.8,139.1h-4.9c-1.2,0-2.1-0.9-2.1-2.1v0l0,0c0-1.2,0.9-2.1,2.1-2.1h0h4.9c1.2,0,2.1,0.9,2.1,2.1v0l0,0 C170.9,138.2,170,139.1,168.8,139.1L168.8,139.1z"></path>
                                        <path class="rbsvgi_44" style="fill:#8A6FEA;" d="M183,139.1h-4.9c-1.2,0-2.1-0.9-2.1-2.1v0l0,0c0-1.2,0.9-2.1,2.1-2.1h0h4.9c1.2,0,2.1,0.9,2.1,2.1v0l0,0 C185.1,138.2,184.2,139.1,183,139.1L183,139.1z"></path>
                                        <rect class="rbsvgi_45" x="159.9" y="114.1" style="fill:#F9FBFC;" width="26.7" height="4.2"></rect>
                                        <rect class="rbsvgi_46" x="159.9" y="121.2" style="fill:#F9FBFC;" width="26.7" height="4.2"></rect>
                                        <rect class="rbsvgi_47" x="165.6" y="128.1" style="fill:#CED3FD;" width="15.4" height="1"></rect>
                                        <path class="rbsvgi_48" style="fill:#8A6FEA;" d="M271.5,150.7h-48.1c-3,0-5.4-2.4-5.4-5.4l0,0c0-3,2.4-5.4,5.4-5.4h48.1c3,0,5.4,2.4,5.4,5.4l0,0 C276.9,148.3,274.5,150.7,271.5,150.7z"></path>
                                        <path class="rbsvgi_49" style="fill:#E4E9FE;" d="M229.9,105.3H200c-2.4,0-4.4-2-4.4-4.4l0,0c0-2.4,2-4.4,4.4-4.4h29.9c2.4,0,4.4,2,4.4,4.4l0,0 C234.3,103.3,232.3,105.3,229.9,105.3z"></path>
                                        <circle class="rbsvgi_50" style="fill:#EFC14D;" cx="205.7" cy="100.9" r="1.4"></circle>
                                        <circle class="rbsvgi_51" style="fill:#9FC14D;" cx="215.2" cy="100.9" r="1.4"></circle>
                                        <circle class="rbsvgi_52" style="fill:#CD502B;" cx="223.9" cy="100.9" r="1.4"></circle>
                                        <circle class="rbsvgi_53" style="fill:#FFFFFF;" cx="114.6" cy="136.6" r="3.3"></circle>
                                        <path class="rbsvgi_54" style="fill:#8A6FEA;" d="M118.1,132.6h-0.6l-0.8-1.2l-0.3-0.2H113l-0.3,0.2l-0.8,1.2h-0.6c-0.9,0-1.7,0.8-1.7,1.7v4.8 c0,0.9,0.8,1.7,1.7,1.7h6.8c0.9,0,1.7-0.8,1.7-1.7v-4.8C119.8,133.4,119,132.6,118.1,132.6z M114.7,139.1c-1.4,0-2.5-1.1-2.5-2.5 s1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5C117.1,138,116.1,139,114.7,139.1z"></path>
                                        <circle class="rbsvgi_55" style="fill:#87B7FD;" cx="114.7" cy="136.7" r="1.6"></circle>
                                        <path class="rbsvgi_56" style="fill:#E4E9FE;" d="M234.4,133.6H209c-1.1,0-2-0.9-2-2v-15.3c0-1.1,0.9-2,2-2h25.4c1.1,0,2,0.9,2,2v15.3 C236.4,132.7,235.5,133.6,234.4,133.6z"></path>
                                        <path class="rbsvgi_57" style="fill:#DC4A42;" d="M221.7,123.8h-0.4l-11.4-6.3c-0.4-0.2-0.5-0.7-0.3-1.1c0.2-0.4,0.7-0.5,1.1-0.3l11,6.1l11-6.1 c0.4-0.2,0.9-0.1,1.1,0.3c0.2,0.4,0.1,0.9-0.3,1.1l-11.4,6.2L221.7,123.8z"></path>
                                        <path class="rbsvgi_58" style="fill:#534EB4;" d="M277.8,131.6h-32.9c-1,0-1.8-0.8-1.8-1.8l0,0V86.2c0-1,0.8-1.8,1.8-1.8l0,0h32.9c1,0,1.8,0.8,1.8,1.8v43.6 C279.6,130.8,278.8,131.6,277.8,131.6L277.8,131.6z"></path>
                                        <path class="rbsvgi_59" style="fill:#73CBFD;" d="M251.3,90.7h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,90.5,251.4,90.7,251.3,90.7z"></path>
                                        <path class="rbsvgi_60" style="fill:#73CBFD;" d="M266.3,90.7h-13.9c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h13.9c0.1,0,0.2,0.2,0.2,0.5l0,0 C266.6,90.5,266.5,90.7,266.3,90.7z"></path>
                                        <path class="rbsvgi_61" style="fill:#DF57A5;" d="M256.9,92.7h-4.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h4.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C257.1,92.5,257,92.7,256.9,92.7z"></path>
                                        <path class="rbsvgi_62" style="fill:#E4E9FE;" d="M264.2,92.7h-6.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h6.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C264.4,92.5,264.3,92.7,264.2,92.7z"></path>
                                        <path class="rbsvgi_63" style="fill:#E4E9FE;" d="M266.3,102.1h-13.9c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h13.9c0.1,0,0.2,0.2,0.2,0.5l0,0 C266.6,101.9,266.5,102.1,266.3,102.1z"></path>
                                        <path class="rbsvgi_64" style="fill:#73CBFD;" d="M251.3,104.1h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,103.9,251.4,104.1,251.3,104.1z"></path>
                                        <path class="rbsvgi_65" style="fill:#E4E9FE;" d="M256.9,104.1h-4.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h4.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C257.1,103.9,257,104.1,256.9,104.1z"></path>
                                        <path class="rbsvgi_66" style="fill:#DF57A5;" d="M264.2,104.1h-6.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h6.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C264.4,103.9,264.3,104.1,264.2,104.1z"></path>
                                        <path class="rbsvgi_67" style="fill:#DF57A5;" d="M269.8,94.6h-17.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h17.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C270,94.4,269.9,94.6,269.8,94.6z"></path>
                                        <path class="rbsvgi_68" style="fill:#73CBFD;" d="M266.2,96.6h-4.1l-0.2-0.2v-0.5l0.2-0.2h4.1l0.2,0.2v0.5L266.2,96.6z"></path>
                                        <path class="rbsvgi_69" style="fill:#E4E9FE;" d="M258.2,96.6h-5.8c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h5.8c0.1,0,0.2,0.2,0.2,0.5l0,0 C258.4,96.4,258.3,96.6,258.2,96.6z"></path>
                                        <path class="rbsvgi_70" style="fill:#73CBFD;" d="M261.3,96.6H259c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.3c0.1,0,0.2,0.2,0.2,0.5l0,0 C261.5,96.4,261.4,96.6,261.3,96.6z"></path>
                                        <path class="rbsvgi_71" style="fill:#E4E9FE;" d="M251.3,98.4h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,98.2,251.4,98.4,251.3,98.4z"></path>
                                        <path class="rbsvgi_72" style="fill:#E4E9FE;" d="M269.8,98.4h-17.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h17.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C270,98.2,269.9,98.4,269.8,98.4z"></path>
                                        <path class="rbsvgi_73" style="fill:#E4E9FE;" d="M251.3,105.9h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,105.7,251.4,105.9,251.3,105.9z"></path>
                                        <path class="rbsvgi_74" style="fill:#E4E9FE;" d="M267.9,105.9h-5.8c-0.2,0-0.3-0.1-0.3-0.3v-0.4c0-0.2,0.1-0.3,0.3-0.3h5.7c0.2,0,0.3,0.1,0.3,0.3v0.4 C268.1,105.8,268,105.9,267.9,105.9z"></path>
                                        <path class="rbsvgi_75" style="fill:#E4E9FE;" d="M258.2,105.9h-5.8c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h5.8c0.1,0,0.2,0.2,0.2,0.5l0,0 C258.4,105.7,258.3,105.9,258.2,105.9z"></path>
                                        <path class="rbsvgi_76" style="fill:#E4E9FE;" d="M261.3,105.9H259c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.3c0.1,0,0.2,0.2,0.2,0.5l0,0 C261.5,105.7,261.4,105.9,261.3,105.9z"></path>
                                        <path class="rbsvgi_77" style="fill:#EFC261;" d="M251.3,107.8h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,107.6,251.4,107.8,251.3,107.8z"></path>
                                        <path class="rbsvgi_78" style="fill:#73CBFD;" d="M255.4,107.8h-3c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h3c0.1,0,0.2,0.2,0.2,0.5l0,0 C255.7,107.5,255.6,107.7,255.4,107.8z"></path>
                                        <path class="rbsvgi_79" style="fill:#73CBFD;" d="M248.8,100.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 c0,0.3-0.1,0.5-0.2,0.5"></path>
                                        <path class="rbsvgi_80" style="fill:#E4E9FE;" d="M268.7,100.4h-6.6c-0.2,0-0.3-0.1-0.3-0.3v-0.4c0-0.2,0.1-0.3,0.3-0.3h6.5c0.2,0,0.3,0.1,0.3,0.3v0.4 C269,100.3,268.8,100.4,268.7,100.4z"></path>
                                        <path class="rbsvgi_81" style="fill:#EFC261;" d="M258.2,100.4h-5.8c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h5.8c0.1,0,0.2,0.2,0.2,0.5l0,0 C258.4,100.2,258.3,100.4,258.2,100.4z"></path>
                                        <path class="rbsvgi_82" style="fill:#EFC261;" d="M261.3,100.4H259c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.3c0.1,0,0.2,0.2,0.2,0.5l0,0 C261.5,100.2,261.4,100.4,261.3,100.4z"></path>
                                        <path class="rbsvgi_83" style="fill:#E4E9FE;" d="M266.3,109.8h-13.9c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h13.9c0.1,0,0.2,0.2,0.2,0.5l0,0 C266.6,109.6,266.5,109.8,266.3,109.8z"></path>
                                        <path class="rbsvgi_84" style="fill:#E4E9FE;" d="M256.9,111.7h-4.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h4.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C257.1,111.5,257,111.7,256.9,111.7z"></path>
                                        <path class="rbsvgi_85" style="fill:#E4E9FE;" d="M264.2,111.7h-6.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h6.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C264.4,111.5,264.3,111.7,264.2,111.7z"></path>
                                        <path class="rbsvgi_86" style="fill:#E4E9FE;" d="M266.3,121.2h-13.9c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h13.9c0.1,0,0.2,0.2,0.2,0.5l0,0 C266.6,121,266.5,121.2,266.3,121.2z"></path>
                                        <path class="rbsvgi_87" style="fill:#DF57A5;" d="M251.3,123.1h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,122.9,251.4,123.1,251.3,123.1z"></path>
                                        <path class="rbsvgi_88" style="fill:#73CBFD;" d="M256.9,123.1h-4.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h4.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C257.1,122.9,257,123.1,256.9,123.1z"></path>
                                        <path class="rbsvgi_89" style="fill:#E4E9FE;" d="M264.2,123.1h-6.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h6.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C264.4,122.9,264.3,123.1,264.2,123.1z"></path>
                                        <path class="rbsvgi_90" style="fill:#DF57A5;" d="M251.3,113.7h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,113.5,251.4,113.7,251.3,113.7z"></path>
                                        <path class="rbsvgi_91" style="fill:#DF57A5;" d="M264.9,113.7h-12.4c-0.2,0-0.3-0.1-0.3-0.3v0V113c0-0.2,0.1-0.3,0.3-0.3l0,0h12.4c0.2,0,0.3,0.1,0.3,0.3v0.4 C265.1,113.5,265,113.7,264.9,113.7z"></path>
                                        <path class="rbsvgi_92" style="fill:#E4E9FE;" d="M251.3,115.6h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,115.4,251.4,115.6,251.3,115.6z"></path>
                                        <path class="rbsvgi_93" style="fill:#E4E9FE;" d="M258.2,115.6h-5.8c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h5.8c0.1,0,0.2,0.2,0.2,0.5l0,0 C258.4,115.4,258.3,115.6,258.2,115.6z"></path>
                                        <path class="rbsvgi_94" style="fill:#E4E9FE;" d="M261.3,115.6H259c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.3c0.1,0,0.2,0.2,0.2,0.5l0,0 C261.5,115.4,261.4,115.6,261.3,115.6z"></path>
                                        <path class="rbsvgi_95" style="fill:#E4E9FE;" d="M251.3,117.5h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,117.3,251.4,117.5,251.3,117.5z"></path>
                                        <path class="rbsvgi_96" style="fill:#E4E9FE;" d="M268.2,117.5h-15.7c-0.2,0-0.3-0.1-0.3-0.3v0v-0.3c0-0.2,0.1-0.3,0.3-0.3l0,0h15.7c0.2,0,0.3,0.1,0.3,0.3v0.3 C268.5,117.4,268.4,117.5,268.2,117.5z"></path>
                                        <path class="rbsvgi_97" style="fill:#E4E9FE;" d="M251.3,124.9h-2.4c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.4c0.1,0,0.2,0.2,0.2,0.5l0,0 C251.5,124.7,251.4,124.9,251.3,124.9z"></path>
                                        <path class="rbsvgi_98" style="fill:#E4E9FE;" d="M269.8,124.9h-7.7c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h7.7c0.1,0,0.2,0.2,0.2,0.5l0,0 C270,124.7,269.9,124.9,269.8,124.9z"></path>
                                        <path class="rbsvgi_99" style="fill:#E4E9FE;" d="M258.2,124.9h-5.8c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h5.8c0.1,0,0.2,0.2,0.2,0.5l0,0 C258.4,124.7,258.3,124.9,258.2,124.9z"></path>
                                        <path class="rbsvgi_100" style="fill:#E4E9FE;" d="M261.3,124.9H259c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.3c0.1,0,0.2,0.2,0.2,0.5l0,0 C261.5,124.7,261.4,124.9,261.3,124.9z"></path>
                                        <path class="rbsvgi_101" style="fill:#EFC261;" d="M262.7,126.8h-10.3c-0.1,0-0.2-0.1-0.2-0.2v-0.5l0.2-0.2h10.3l0.2,0.2v0.5L262.7,126.8z"></path>
                                        <path class="rbsvgi_102" style="fill:#DF57A5;" d="M269.1,119.4h-6.9c-0.2,0-0.3-0.1-0.3-0.3v-0.3c0-0.2,0.1-0.3,0.3-0.3h6.9c0.2,0,0.3,0.1,0.3,0.3v0.3 C269.4,119.3,269.3,119.4,269.1,119.4z"></path>
                                        <path class="rbsvgi_103" style="fill:#EFC261;" d="M258.2,119.4h-5.8c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h5.8c0.1,0,0.2,0.2,0.2,0.5l0,0 C258.4,119.2,258.3,119.4,258.2,119.4z"></path>
                                        <path class="rbsvgi_104" style="fill:#EFC261;" d="M261.3,119.4H259c-0.1,0-0.2-0.2-0.2-0.5l0,0c0-0.3,0.1-0.5,0.2-0.5h2.3c0.1,0,0.2,0.2,0.2,0.5l0,0 C261.5,119.2,261.4,119.4,261.3,119.4z"></path>
                                        <circle class="rbsvgi_105" style="fill:#DE4ECC;" cx="276.7" cy="85.4" r="7.7"></circle>
                                        <path class="rbsvgi_106" style="fill:#F9FBFC;" d="M276.1,84.7l-3.1,1.1l3.1,1.1V88l-4.4-1.7v-1.2l4.4-1.7V84.7z"></path>
                                        <path class="rbsvgi_107" style="fill:#F9FBFC;" d="M277.1,83.5l4.4,1.7v1.2l-4.4,1.6v-1.1l3.1-1.1l-3.1-1.1V83.5z"></path>
                                        <circle class="rbsvgi_108" style="fill:#EFC14D;" cx="225.8" cy="215.1" r="8.3"></circle>
                                        <path class="rbsvgi_109" style="fill:#FFFFFF;" d="M230.2,214.6c0,0.5-0.1,0.9-0.2,1.4c-0.2,0.4-0.4,0.7-0.7,1c-0.3,0.2-0.7,0.4-1.1,0.4l-0.7-0.2 c-0.2-0.1-0.4-0.3-0.4-0.5H227c-0.4,0.5-0.9,0.7-1.5,0.7c-0.6,0-1.1-0.2-1.5-0.6c-0.4-0.4-0.6-1-0.6-1.6c-0.1-0.7,0.2-1.3,0.7-1.8 c0.5-0.5,1.2-0.7,1.9-0.7h1l0.9,0.2v2.6c0,0.5,0.1,0.7,0.4,0.7s0.4-0.2,0.6-0.5c0.1-0.4,0.2-0.9,0.2-1.3c0-1-0.5-2-1.4-2.5 c-0.5-0.3-1-0.4-1.5-0.4c-0.7,0-1.3,0.1-1.9,0.4c-0.5,0.3-0.9,0.8-1.2,1.3c-0.3,0.6-0.4,1.3-0.4,2c-0.2,1.5,0.9,2.9,2.5,3.1 c0.2,0,0.4,0,0.6,0h1.3l1.3-0.4v1c-0.8,0.3-1.7,0.5-2.6,0.5c-1.2,0.1-2.3-0.3-3.2-1.1c-0.8-0.8-1.2-1.9-1.1-3c0-0.8,0.2-1.7,0.6-2.4 c0.4-0.7,1-1.3,1.7-1.7c0.8-0.4,1.6-0.6,2.5-0.6c0.7,0,1.4,0.2,2.1,0.5c0.6,0.3,1.1,0.8,1.4,1.4 C230.1,213.1,230.3,213.9,230.2,214.6z M224.7,215.3c0,0.8,0.3,1.1,0.9,1.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.3,0.3-0.7,0.3-1.1v-1.2 h-0.5c-0.4,0-0.7,0.1-1,0.4C224.8,214.5,224.7,214.9,224.7,215.3z"></path>
                                        <path class="rbsvgi_110" style="fill:#EDD2A9;" d="M255.4,168.3l-1,3c0,0,3.1-0.1,4.2-1.5l-1.2-2.8L255.4,168.3z"></path>
                                        <polygon class="rbsvgi_111" style="fill:#E19975;" points="255,220.7 255.2,221.9 257,221.9 256.6,220.5 "></polygon>
                                        <path class="rbsvgi_112" style="fill:#534EB4;" d="M255.2,221.9c0,0-2.9,1.5-2.9,1.6s4.9-0.4,4.9-0.4l-0.3-1.1L255.2,221.9z"></path>
                                        <polygon class="rbsvgi_113" style="fill:#E19975;" points="269.6,218.2 270.3,219.3 271.9,218.7 271.1,217.5 "></polygon>
                                        <path class="rbsvgi_114" style="fill:#534EB4;" d="M270.3,219.3c0,0-2.2,2.5-2.1,2.5s4.4-2.2,4.4-2.2l-0.7-0.9L270.3,219.3z"></path>
                                        <path class="rbsvgi_115" style="fill:#EFC14D;" d="M251.7,189.1c0,0-5,16.3,2.9,31.9h2.3c0,0-4.7-17.7,1.2-32.1L251.7,189.1z"></path>
                                        <path class="rbsvgi_116" style="fill:#EFC14D;" d="M256.1,189.6c0,0,0.8,17,13.5,29.1l2.2-0.8c0,0-10.4-15.1-9.7-30.6L256.1,189.6z"></path>
                                        <path class="rbsvgi_117" style="fill:#E19975;" d="M253.8,151.4v-1l0,0l-0.2-0.7H253l-0.6-0.5c-0.2-0.2-0.5-0.2-0.7,0c0,0-0.1,0.1-0.1,0.2 c-0.2,0.4-0.3,0.8-0.4,1.2c0,0.1,0,0.3,0.1,0.4l0.9,1c0.1,0.1,0.3,0.2,0.5,0.1l0.7-0.2C253.6,151.8,253.8,151.6,253.8,151.4z"></path>
                                        <path class="rbsvgi_118" style="fill:#DE5070;" d="M262.4,173.4c0,0-6.5-7-6.9-9.6s-1.4-12.3-1.4-12.3l-2,0.4c0,0-0.7,13.9-0.1,15.5s4.5,9.7,7.1,10.5 S263.4,176.1,262.4,173.4z"></path>
                                        <path class="rbsvgi_119" style="fill:#E19975;" d="M253.3,161.9c0,0-1.5,4.9-0.5,6.1s4.3,0.1,5.7-1.8s1.6-6.4-0.7-6.8S253.9,159.9,253.3,161.9z"></path>
                                        <path class="rbsvgi_120" style="fill:#DE5070;" d="M262.1,190.4c0,0,1.3-14.1,1.3-17.9V172c-0.7-1.7-2.6-2.7-4.4-2.2c-1.6,0.4-3.3,0.9-4.8,1.6l0,0 c-0.9,0.7-1.7,1.5-2.4,2.4c-2.1,5.1-2.2,10.9-0.4,16.1L262.1,190.4z"></path>
                                        <path class="rbsvgi_121" style="fill:#E19975;" d="M243.5,152.1l-0.2-1l0,0l-0.3-0.7l-0.5,0.2l-0.7-0.4c-0.1-0.2-0.4-0.2-0.6,0c-0.1,0.1-0.1,0.2-0.1,0.3 c-0.1,0.4-0.2,0.9-0.2,1.3c0,0.2,0.1,0.3,0.2,0.4l1,0.8c0.1,0.1,0.4,0.1,0.5,0l0.7-0.3C243.5,152.6,243.6,152.4,243.5,152.1 C243.5,152.2,243.5,152.1,243.5,152.1z"></path>
                                        <path class="rbsvgi_122" style="fill:#DE5070;" d="M255.8,172.2c0,0-7.6-5.7-8.5-8.2s-3.5-11.9-3.5-11.9l-1.9,0.7c0,0,1.8,13.8,2.6,15.2s6.1,8.8,8.8,9.1 C256,177.4,257.3,174.7,255.8,172.2z"></path>
                                        <path class="rbsvgi_123" style="fill:#534EB4;" d="M258.8,159.3c0,0-3.9-1.7-5.8,1.8s2.1,0.1,2.7,0.8c0.6,0.7-0.8,2-0.4,2.5s1.1-0.9,1.5-0.1s-0.6,0.9-1.3,1.8 s0.6,2.1-0.4,2.9s-3.7,1.4-2,5.6s-2.7,5.3-0.9,11s14.4,9,16.8,2.1s-5.5-8.5-5-11.5s2.2-3.8-0.1-6.8s-3.8-4.8-3.1-6.7 c0.5-1.4-0.3-2.8-1.6-3.3C259.1,159.4,258.9,159.3,258.8,159.3z"></path>
                                        <path class="rbsvgi_124" style="fill:#F0C72F;" d="M269.4,135.7c-4.6,0-8.4,3.8-8.4,8.4s3.8,8.4,8.4,8.4s8.4-3.8,8.4-8.4c0,0,0,0,0,0 C277.7,139.5,274,135.8,269.4,135.7z M265.2,143.5c0-0.6,0.4-1,1-1s1,0.4,1,1c0,0.5-0.5,1-1,1C265.6,144.5,265.2,144.1,265.2,143.5 L265.2,143.5z M269.4,148.7c-1.3,0.1-2.5-1-2.6-2.3h5.3C271.9,147.7,270.7,148.7,269.4,148.7z M272.6,144.5c-0.6,0-1-0.4-1-1 c0-0.5,0.5-1,1-1c0.6,0,1,0.4,1,1S273.2,144.5,272.6,144.5z"></path>
                                        <polygon class="rbsvgi_125" style="fill:#F9FBFC;" points="144.7,203.8 144.3,202.8 157.6,196.2 174.3,196.5 192.6,189.6 206.5,189.6 221.3,184.6 221.5,184.7 233.4,186 240.1,182.5 240.6,183.5 233.6,187.1 233.4,187.1 221.5,185.8 206.6,190.7 192.7,190.7 174.5,197.6 174.4,197.6 157.8,197.3 "></polygon>
                                        <path class="rbsvgi_126" style="fill:#534EB4;" d="M193.6,177.5c0,0,13.2,21.4,11.5,36.2l9,0.2l-3.8-2.2l1.1-0.2c0,0-3.3-23-6.4-31.2s-4.2-5.4-4.2-5.4 L193.6,177.5z"></path>
                                        <path class="rbsvgi_127" style="fill:#534EB4;" d="M188.8,176.1c0,0,0.7,14.8-0.4,20.5s-4.4,16.8-4.4,16.8l8.4,0.2l-2.2-1.6l-1.4-0.8c0,0,6-16.1,6.5-23.8 c0.2-4.1,0.7-8.1,1.5-12.1L188.8,176.1z"></path>
                                        <polyline class="rbsvgi_128" style="fill:#EDD2A9;" points="206,132.2 207.4,131.3 208,129 207.4,128.9 206.9,129.7 207.4,125.8 206.7,125.9 206,129.7 205.2,131.5 205.9,132 "></polyline>
                                        <polygon class="rbsvgi_129" style="fill:#EDD2A9;" points="214.2,136.3 214.4,134.7 216.4,132.7 216.8,133.3 216.1,134.1 219.9,133.2 219.9,134 216.4,135.4 215.6,136.7 "></polygon>
                                        <path class="rbsvgi_130" style="fill:#87B7FD;" d="M205.1,130.9c0,0-15.6,19-17.5,22.8c0,0-0.8,1.4-0.8,5.3s1.4,18.5,1.4,18.5l15.9,0.9l-5.3-18.2 c-1.3-1.8-3.1-3.1-5.2-3.8l13.4-24.1L205.1,130.9z"></path>
                                        <path class="rbsvgi_131" style="fill:#EDD2A9;" d="M195.2,154.5c0,0,0.7,2,1,3.2s-3.3-0.1-4.4-1.6l1.2-2.9L195.2,154.5z"></path>
                                        <path class="rbsvgi_132" style="fill:#EDD2A9;" d="M197.7,148.4c0,0,1,5.6,0,6.9s-4.3-0.9-5.6-2.9s-1.6-6.6,0.7-7C195,144.9,197.2,146.2,197.7,148.4z"></path>
                                        <path class="rbsvgi_133" style="fill:#87B7FD;" d="M196.2,158.7c0,0,12.5-7.9,13.5-9.5s3.8-13.6,3.8-13.6l2.4,0.6c0,0-1.4,13.4-1.8,14.9s-12.7,14.6-15.6,14.6 S194.8,162,196.2,158.7z"></path>
                                        <path class="rbsvgi_134" style="fill:#534EB4;" d="M196.8,147.1c0,0,0.6-2.2-0.7-3.3s-3.8-0.9-4.1-0.5s1.5,1,1.1,1.4s-2.3,0-2.7,1.9s0.2,2.3,0.2,2.3 c-0.6,0.9-0.5,2,0.2,2.8c1.2,1.6,3.9,3,4.5,2.8s0.3-2.7,0.3-2.7s-1.6-0.2-1.6-1.2s0.7-1.1,1.1-0.7s0.5,1.2,0.7,1s-0.1-2.1-0.1-2.1 C196.2,148.3,196.6,147.7,196.8,147.1z"></path>
                                        <path class="rbsvgi_135" style="fill:#8A6FEA;" d="M204.2,203.2l-9.4,2.6c-2.6,0.7-4.1,3.4-3.4,6l1.8,6.5c0.7,2.6,3.4,4.1,6,3.4l2.8-0.8l2.8,2.7l1-3.8l2.8-0.8 c2.6-0.7,4.1-3.4,3.4-6l-1.8-6.5C209.4,204,206.8,202.5,204.2,203.2z"></path>
                                        <ellipse class="rbsvgi_136" transform="matrix(0.9646 -0.2639 0.2639 0.9646 -49.5673 59.5302)" style="fill:#FFFFFF;" cx="196.8" cy="214.3" rx="1.1" ry="1.1"></ellipse>
                                        <ellipse class="rbsvgi_137" transform="matrix(0.9646 -0.2639 0.2639 0.9646 -49.0332 60.7185)" style="fill:#FFFFFF;" cx="201.5" cy="212.9" rx="1.1" ry="1.1"></ellipse>
                                        <ellipse class="rbsvgi_138" transform="matrix(0.9646 -0.2639 0.2639 0.9646 -48.5415 61.9383)" style="fill:#FFFFFF;" cx="206.3" cy="211.7" rx="1.1" ry="1.1"></ellipse>
                                        <circle class="rbsvgi_139" style="fill:#EFC14D;" cx="157.6" cy="196.5" r="1.7"></circle>
                                        <circle class="rbsvgi_140" style="fill:#DE5070;" cx="221.5" cy="185.3" r="1.7"></circle>
                                        <path class="rbsvgi_141" style="fill:#DE5070;" d="M0.1,0"></path></svg>
                                </i>
                            </div>
                            <div class="roadmap-item-info">
                                <strong class="text-color3">03</strong>
                                <div class="roadmap-item-info-inner">
                                    <h3 class="mb-0">Develop</h3>
                                    <p class="mb-0">Ipsum dolor sit amet, consectetur adipiscing elit vestibulum ut nunc et enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item position-relative d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="roadmap-item-mckp">
                                <i>
                                    <svg class="Support.svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 315" style="enable-background:new 0 0 376 315;" xml:space="preserve"><title>Support</title>
                                        <path class="rbsvgi_0" id="Shape_57" style="fill:#EBEDFD;" d="M351.7,60.5C322.8,22.6,260.6,6.7,202,1.8c-29.5-2.4-59.2-2.4-88.7,0.2l-3.2,0.3 C86.9,4.7,63,9.9,43.9,22.3c-6.4,4.1-12.1,9-17.1,14.7C5.3,61.8,2.6,97.3,1,130.1C-0.8,167-2.2,206,15.5,238.4s54.4,54.2,91,65.5 c62.7,19.3,134.9,14,189.7-20.4c9.7-6,18.7-12.9,27-20.7c7.3-6.8,13.9-14.4,19.6-22.6c12-16.9,20.9-35.8,26.5-55.8 C381.3,142,378,95.1,351.7,60.5z"></path>
                                        <path class="rbsvgi_1" style="fill:#ECF1F7;" d="M253.9,205H119.1v-83c0-3.1,2.6-5.7,5.7-5.7h123.4c3.1,0,5.7,2.6,5.7,5.7V205z"></path>
                                        <path class="rbsvgi_2" style="fill:#243762;" d="M254.3,205.3H118.7V122c0-3.4,2.7-6.1,6.1-6.1h123.4c3.4,0,6.1,2.7,6.1,6.1c0,0,0,0,0,0V205.3z M119.4,204.7 h134.2V122c0-3-2.4-5.4-5.4-5.4H124.8c-3,0-5.4,2.4-5.4,5.4l0,0L119.4,204.7z"></path>
                                        <rect class="rbsvgi_3" x="127.1" y="124.8" style="fill:#FFFFFF;" width="119.2" height="79.7"></rect>
                                        <rect class="rbsvgi_4" x="127.1" y="124.7" style="fill:#C5D9FF;" width="119.2" height="7.5"></rect>
                                        <path class="rbsvgi_5" style="fill:#FFFFFF;" d="M132.7,129.9c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4v0 C134.1,129.3,133.5,129.9,132.7,129.9z M132.7,127.8c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7 C133.5,128.1,133.1,127.8,132.7,127.8z"></path>
                                        <path class="rbsvgi_6" style="fill:#FFFFFF;" d="M137.5,129.9c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4v0 C138.9,129.3,138.3,129.9,137.5,129.9z M137.5,127.8c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7 C138.3,128.1,137.9,127.8,137.5,127.8z"></path>
                                        <path class="rbsvgi_7" style="fill:#FFFFFF;" d="M141.9,129.9c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4v0 C143.3,129.3,142.7,129.9,141.9,129.9z M141.9,127.8c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7 C142.7,128.1,142.3,127.8,141.9,127.8z"></path>
                                        <polygon class="rbsvgi_8" style="fill:#243762;" points="127.4,204.4 126.8,204.4 126.8,124.4 177.7,124.4 177.7,125.1 127.4,125.1 "></polygon>
                                        <circle class="rbsvgi_9" style="fill:#AF9CDA;" cx="150.6" cy="147.8" r="13.3"></circle>
                                        <path class="rbsvgi_10" style="fill:#AF9CDA;" d="M239.5,198.5h-67.8c-1,0-1.8-0.8-1.8-1.8l0,0v-30.3c0-1,0.8-1.8,1.8-1.8l0,0h67.8c1,0,1.8,0.8,1.8,1.8l0,0 v30.3C241.3,197.7,240.5,198.5,239.5,198.5L239.5,198.5z"></path>
                                        <path class="rbsvgi_11" style="opacity:0.28;fill:#FFFFFF;enable-background:new;" d="M201.8,181.5h-24.3c-0.2,0-0.4-0.2-0.4-0.4V170c0-0.2,0.2-0.4,0.4-0.4h24.3c0.2,0,0.4,0.2,0.4,0.4v11.1 C202.2,181.3,202,181.5,201.8,181.5z"></path>
                                        <path class="rbsvgi_12" style="opacity:0.28;fill:#FFFFFF;enable-background:new;" d="M233.1,181.5h-24.3c-0.2,0-0.4-0.2-0.4-0.4V170c0-0.2,0.2-0.4,0.4-0.4h24.3c0.2,0,0.4,0.2,0.4,0.4v11.1 C233.5,181.3,233.3,181.5,233.1,181.5z"></path>
                                        <path class="rbsvgi_13" style="fill:#FFFFFF;" d="M152.3,151.3L152.3,151.3c0.3,0,0.5,0.2,0.5,0.5v1c0,0.3-0.2,0.5-0.5,0.5h-3.5c-0.3,0-0.5-0.2-0.5-0.5v-1 c0-0.3,0.2-0.5,0.5-0.5l0,0c0.3,0,0.5-0.2,0.5-0.5v-2.9c0-0.3-0.2-0.5-0.5-0.5l0,0c-0.3,0-0.5-0.2-0.5-0.5v-1 c0-0.3,0.2-0.5,0.5-0.5h2.6c0.3,0,0.5,0.2,0.5,0.5v4.8C151.9,151,152.1,151.3,152.3,151.3z"></path>
                                        <path class="rbsvgi_14" style="fill:#FFFFFF;" d="M150.5,142.4L150.5,142.4c0.6,0,1,0.4,1,1l0,0c0,0.6-0.4,1-1,1l0,0c-0.6,0-1-0.4-1-1l0,0 C149.5,142.8,149.9,142.4,150.5,142.4z"></path>
                                        <rect class="rbsvgi_15" x="170.5" y="139.7" style="fill:#AF9CDA;" width="58.5" height="0.7"></rect>
                                        <rect class="rbsvgi_16" x="170.5" y="155.3" style="fill:#AF9CDA;" width="58.5" height="0.7"></rect>
                                        <rect class="rbsvgi_17" x="170.5" y="146.5" style="fill:#AF9CDA;" width="24.5" height="0.7"></rect>
                                        <rect class="rbsvgi_18" x="136.6" y="185.7" style="fill:#AF9CDA;" width="25.6" height="0.7"></rect>
                                        <rect class="rbsvgi_19" x="136.6" y="192.5" style="fill:#AF9CDA;" width="25.6" height="0.7"></rect>
                                        <rect class="rbsvgi_20" x="200.4" y="146.5" style="fill:#AF9CDA;" width="25.6" height="0.7"></rect>
                                        <rect class="rbsvgi_21" x="176.4" y="192.3" style="fill:#FFFFFF;" width="58.5" height="0.7"></rect>
                                        <rect class="rbsvgi_22" x="176.4" y="186.9" style="fill:#FFFFFF;" width="24.5" height="0.7"></rect>
                                        <rect class="rbsvgi_23" x="206.3" y="186.9" style="fill:#FFFFFF;" width="25.6" height="0.7"></rect>
                                        <path class="rbsvgi_24" style="fill:#243762;" d="M186.8,122.8c-0.9,0-1.7-0.8-1.7-1.7c0-0.9,0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7v0 C188.5,122,187.7,122.8,186.8,122.8z M186.8,120.1c-0.6,0-1,0.4-1,1s0.4,1,1,1s1-0.4,1-1S187.4,120.1,186.8,120.1 C186.8,120.1,186.8,120.1,186.8,120.1z"></path>
                                        <path class="rbsvgi_25" style="fill:#243762;" d="M191.6,122c-0.5,0-0.9-0.4-0.9-0.9s0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9c0,0,0,0,0,0 C192.5,121.6,192.1,122,191.6,122z M191.6,120.9c-0.1,0-0.2,0.1-0.2,0.2l0.2,0.2c0.1,0,0.2-0.1,0.2-0.2 C191.8,121,191.8,120.9,191.6,120.9z"></path>
                                        <path class="rbsvgi_26" style="fill:#243762;" d="M267.3,217.7H105.7c-0.7,0-1.3-0.6-1.3-1.3l0,0V209c0-2.2,1.7-3.9,3.9-3.9h156.4c2.2,0,3.9,1.7,3.9,3.9v7.4 C268.6,217.1,268,217.7,267.3,217.7C267.3,217.7,267.3,217.7,267.3,217.7z"></path>
                                        <path class="rbsvgi_27" style="opacity:0.29;fill:#AF9CDA;enable-background:new;" d="M267.4,210.4H105.6c-0.7,0-1.3-0.6-1.3-1.3l0,0l0,0c0-2.1,1.7-3.8,3.8-3.8h0h156.7c2.1,0,3.8,1.7,3.8,3.8l0,0 c0.1,0.7-0.4,1.2-1.1,1.3C267.5,210.4,267.4,210.4,267.4,210.4z"></path>
                                        <path class="rbsvgi_28" style="fill:#243762;" d="M246.3,132.6h-68.6c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h68.6c0.2,0,0.3,0.1,0.3,0.3l0,0 C246.6,132.5,246.5,132.6,246.3,132.6z"></path>
                                        <path class="rbsvgi_29" style="fill:#C3C3E2;" d="M169.4,143.9H79.7c-2.1,0-3.8,1.7-3.8,3.8l0,0v35.6c0,2.1,1.7,3.8,3.8,3.8h0h64.5l11.1,11.1v-11.1h14.1 c2.1,0,3.8-1.7,3.8-3.8l0,0v-35.6C173.2,145.6,171.5,143.9,169.4,143.9L169.4,143.9z"></path>
                                        <path class="rbsvgi_30" style="fill:#ECF1F7;" d="M101.5,185.1c-11.2,0-20.3-9.1-20.3-20.3s9.1-20.3,20.3-20.3c11.2,0,20.3,9.1,20.3,20.3 S112.7,185.1,101.5,185.1L101.5,185.1z M101.5,145.1c-10.9,0-19.7,8.8-19.7,19.7c0,10.9,8.8,19.7,19.7,19.7s19.7-8.8,19.7-19.7l0,0 C121.2,153.9,112.4,145.1,101.5,145.1z"></path>
                                        <path class="rbsvgi_31" style="fill:#FFFFFF;" d="M163.4,155.2h-34.2c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h34.2c0.2,0,0.3,0.1,0.3,0.3 S163.6,155.2,163.4,155.2z"></path>
                                        <path class="rbsvgi_32" style="fill:#FFFFFF;" d="M163.4,170.5h-34.2c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h34.2c0.2,0,0.3,0.1,0.3,0.3 S163.6,170.5,163.4,170.5z"></path>
                                        <path class="rbsvgi_33" style="fill:#FFFFFF;" d="M146.3,163h-17.1c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h17.1c0.2,0,0.3,0.1,0.3,0.3l0,0 C146.7,162.9,146.5,163,146.3,163z"></path>
                                        <path class="rbsvgi_34" style="fill:#FFFFFF;" d="M146.3,176.7h-17.1c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h17.1c0.2,0,0.3,0.1,0.3,0.3l0,0 C146.7,176.5,146.5,176.7,146.3,176.7z"></path>
                                        <path class="rbsvgi_35" style="fill:#FFFFFF;" d="M163,163h-11.6c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3l0,0H163c0.2,0,0.3,0.1,0.3,0.3S163.2,163,163,163z"></path>
                                        <path class="rbsvgi_36" style="fill:#F7A9B4;" d="M117.9,140.9c-0.1-0.9-0.5-1.7-1.1-2.4c-0.6-0.6-1.2-1.4-1.6-2.2c-0.1-0.4-0.3-0.8-0.6-1.2 c-0.4-0.9-0.6-1.8-0.7-2.8l-0.2-1.7l0,0v-0.8c-0.2-1.7-1-3.3-2.2-4.5c-1.7-2.2-4.3-3.5-7.1-3.7l0,0c-3.2-0.3-6.3,0.9-8.5,3.3 c-2.5,1.4-4,4.1-3.7,7v1.1c-0.8,0.6-1.3,1.5-1.4,2.5l0,0c-0.1,0.8,0.1,1.5,0.5,2.2c-1.5,1.6-2.4,3.6-2.6,5.7 c-0.4,5.3,3.6,9.9,8.9,10.3c3,0.2,5.9-1,7.9-3.3c1,0.8,2.2,1.3,3.5,1.4l0,0c3.6,0.3,6.8-2.3,7.2-6c0,0,0-0.1,0-0.1l0,0v-1.3 C117.3,143.6,118,142.3,117.9,140.9z"></path>
                                        <path class="rbsvgi_37" style="fill:#F9D9EB;" d="M121,141.1c-0.2-1-0.2-1.9,0-2.9l1.2-2.6c0.2-0.4,0.7-0.6,1.1-0.5l0,0l1.4-1.7l2.2-2.5c0.2-0.3,0.9-0.5,1,0 s-1.7,3.7-1.7,3.7s0.9,0.4,1.1,0.9c0.1,0.2,0.2,0.5,0.2,0.7c0.3,0.4,0.6,0.8,0.7,1.3v0.2c0,0,0.2-0.1,0.6,0.9 c0.2,0.4,0.1,0.8-0.2,1.1c-0.2,0.2-0.4,0.4-0.7,0.5l-0.5,0.2l0.5,3.3l-6.7-0.3L121,141.1z"></path>
                                        <path class="rbsvgi_38" style="fill:#F9D9EB;" d="M124.3,140.4c-0.3-1.9-1.4-2.3-1.4-2.3l0.6-1.4c0.2-0.4,0.2-0.9,0-1.3c0-0.1,0-0.1-0.1-0.1c0,0,0,0,0,0 c-0.2-0.1-0.6-0.3-1.1,0.4l-0.7,1.3"></path>
                                        <path class="rbsvgi_39" style="fill:#243762;" d="M124.3,140.5c-0.1,0-0.1,0-0.1-0.1c-0.3-1.8-1.3-2.2-1.4-2.2l0,0l0.6-1.4c0.2-0.4,0.2-0.8,0-1.2h-0.1 c-0.2-0.1-0.5-0.2-0.9,0.4l-0.7,1.3c0,0.1-0.1,0.1-0.2,0.1s-0.1-0.1-0.1-0.2c0.2-0.5,0.4-0.9,0.7-1.3c0.5-0.8,1.1-0.6,1.3-0.5 l0.2,0.2c0.2,0.4,0.2,1,0,1.4c-0.2,0.6-0.5,1.1-0.5,1.3c0.8,0.5,1.3,1.4,1.4,2.3L124.3,140.5z"></path>
                                        <path class="rbsvgi_40" style="fill:#243762;" d="M130.7,162.2l-0.6-6.8c-0.2-2-0.7-9.9-0.9-12.7c-0.1-0.5-0.5-0.9-1-0.9l-6.9,0.7c-0.6,0.1-1.1,0.6-1,1.2 c0,0,0,0,0,0c0.7,4.5,1.3,15.8,1.3,15.8l-3.5-3.5c-0.9-0.9-1.7-1.8-2.5-2.8c-1.6-1.6-3.3-2.9-5.3-4l-0.2-0.2l0,0l-1.7-0.8h-12 l-1.8,0.2c-4.8,0.9-8.9,5.4-9.9,11.1c-0.2,0.9-0.2,1.9-0.2,2.8l-0.4,4.4c1,9.7,9.7,16.8,19.4,15.8c7.2-0.7,13.1-5.8,15.2-12.7 c1.5,0.6,3,1,4.6,1.1c1.4,0,2.8-0.3,4-1c1.2-0.5,2.2-1.3,2.9-2.4C131,166.1,130.8,164.1,130.7,162.2z"></path>
                                        <path class="rbsvgi_41" style="fill:#F9D9EB;" d="M113.7,138.4l-0.8-7.5c-0.2-1.4-0.8-2.7-1.7-3.8c-0.4,3.4-3.3,6-6.7,6h-6.1l0.7,6.8c0,0.3,0.1,0.7,0.2,1 l-1.2,6.3c-0.6,2.9,1.2,5.7,4.1,6.3c0,0,0,0,0,0c2.9,0.5,5.6-1.4,6.2-4.3l0.7-3.7C112.1,144.4,113.9,141.5,113.7,138.4z"></path>
                                        <path class="rbsvgi_42" style="opacity:0.46;fill:#EF92C7;enable-background:new;" d="M106.7,145.9c-2.8,0.3-5.6-1.2-6.9-3.7v0.5c-0.3,1.9,1.6,3.9,4.2,4.3l0,0c1.7,0.3,3.4-0.2,4.6-1.4l-1,0.2 L106.7,145.9z"></path>
                                        <path class="rbsvgi_43" style="fill:#243762;" d="M111.2,135.3L111.2,135.3c0.2,0,0.4-0.2,0.4-0.4v-0.8c0-0.2-0.2-0.4-0.4-0.4l0,0c-0.2,0-0.4,0.2-0.4,0.4v0.8 C110.8,135.1,111,135.3,111.2,135.3z"></path>
                                        <path class="rbsvgi_44" style="fill:#243762;" d="M104.5,136.1L104.5,136.1c0.2,0,0.4-0.2,0.4-0.4v-0.8c0-0.2-0.2-0.4-0.4-0.4l0,0c-0.2,0-0.4,0.2-0.4,0.4v0.8 C104.1,136,104.3,136.2,104.5,136.1z"></path>
                                        <path class="rbsvgi_45" style="fill:#F7A9B4;" d="M109.9,132.4h2c0.1-0.1,0.2-0.2,0-0.4c-0.3-0.2-0.7-0.3-1.1-0.3c-0.4,0-0.7,0.2-1,0.5 C109.6,132.2,109.7,132.3,109.9,132.4z"></path>
                                        <path class="rbsvgi_46" style="fill:#F7A9B4;" d="M102.9,133.4h2c0.1-0.1,0.1-0.2-0.1-0.4c-0.3-0.2-0.8-0.3-1.2-0.2c-0.4,0.1-0.8,0.3-1,0.6 C102.7,133.5,102.8,133.5,102.9,133.4z"></path>
                                        <path class="rbsvgi_47" style="fill:#243762;" d="M106.9,137.7h-0.2c0-0.1,0-0.2,0.1-0.2l0.9-0.2l0.3-0.2c0.1-0.1,0-0.2,0-0.3c-0.6-0.8-0.9-1.8-0.9-2.8 c0-0.1,0.1-0.2,0.2-0.2l0.2,0.2c0,0.9,0.3,1.8,0.8,2.6l0,0c0.1,0.2,0.1,0.5,0,0.7c-0.1,0.2-0.3,0.4-0.5,0.4H106.9z"></path>
                                        <path class="rbsvgi_48" style="opacity:0.46;fill:#EF92C7;enable-background:new;" d="M106.4,142.2L106.4,142.2c-0.1,0-0.1,0-0.1-0.1l0,0c0.2-0.4,0.6-0.6,1-0.6c0.4,0,0.8,0.2,1,0.5h-0.1 c-0.2-0.3-0.5-0.4-0.8-0.4c-0.4,0-0.8,0.2-1,0.5V142.2z"></path>
                                        <path class="rbsvgi_49" style="fill:#FFFFFF;" d="M106.4,135.3l-0.2-0.2c0-0.1,0.1-0.3,0.2-0.3l2-0.3l0.3,0.2c0,0.1-0.1,0.3-0.2,0.3 C108.5,135,106.4,135.3,106.4,135.3z"></path>
                                        <path class="rbsvgi_50" style="fill:#FFFFFF;" d="M110.5,137.5c-1.2,0-2.2-0.9-2.3-2.1l-0.2-1.5c0-0.3,0.1-0.6,0.3-0.8c0.2-0.2,0.5-0.4,0.8-0.4l3-0.3 c0.3,0,0.6,0.1,0.8,0.3c0.2,0.2,0.4,0.5,0.4,0.8l0.2,1.4c0.1,1.3-0.8,2.4-2.1,2.6C111.4,137.5,110.5,137.5,110.5,137.5z M112.2,132.8L112.2,132.8l-3.1,0.3l-0.4,0.2c-0.1,0.1-0.2,0.3-0.1,0.5l0.2,1.5c0.1,0.5,0.3,0.9,0.7,1.2c0.4,0.3,0.9,0.5,1.4,0.4 h0.6c1-0.1,1.8-1,1.7-2.1c0,0,0,0,0,0l-0.2-1.4c0-0.2-0.1-0.3-0.2-0.4L112.2,132.8z"></path>
                                        <path class="rbsvgi_51" style="fill:#FFFFFF;" d="M103.6,138.2c-0.5,0-1.1-0.2-1.5-0.5c-0.5-0.4-0.8-1-0.9-1.6l-0.2-1.5c-0.1-0.6,0.4-1.2,1-1.3l3-0.3 c0.6-0.1,1.2,0.4,1.3,1l0.2,1.4c0.1,0.6-0.1,1.3-0.5,1.8c-0.4,0.5-1,0.8-1.6,0.9h-0.8V138.2z M105.3,133.5L105.3,133.5l-3.1,0.3 c-0.3,0.1-0.6,0.3-0.6,0.7l0.2,1.5c0.1,0.5,0.3,0.9,0.7,1.2c0.4,0.3,0.9,0.5,1.4,0.4h0.6c1-0.1,1.8-1,1.7-2.1c0,0,0,0,0,0L106,134 C105.9,133.7,105.6,133.5,105.3,133.5z"></path>
                                        <path class="rbsvgi_52" style="fill:#FFFFFF;" d="M107.3,140.8h0.8c0.4,0,0.6-0.3,0.7-0.6l-0.2-1.8l-4.6,0.5C104.3,141.3,105.6,141,107.3,140.8z"></path>
                                        <path class="rbsvgi_53" style="fill:#243762;" d="M111.2,124.2h-8.1c-3.6,0-6.5,2.9-6.5,6.5v2.2h-0.1c-1.2,0.2-2,1.3-1.8,2.5l0.4,2.5c0.2,1.2,1.3,2,2.5,1.8 c0.3,0,0.6-0.1,0.8-0.3l1.7,2.3c0.4,0.5,1,0.8,1.6,0.8h2.4l0.2-0.2c0-0.1-0.1-0.2-0.2-0.2h-2.4c-0.5,0-0.9-0.2-1.2-0.6l-1.7-2.3 c0.4-0.5,0.7-1.1,0.6-1.8l-0.4-2.5c-0.2-0.9-0.8-1.6-1.7-1.8v-2.2c0-3.3,2.6-5.9,5.9-5.9l0,0h8.1c0.2,0,0.3-0.1,0.3-0.3v0 C111.5,124.4,111.4,124.2,111.2,124.2z"></path>
                                        <path class="rbsvgi_54" style="fill:#F7A9B4;" d="M105.1,142.7h-1c-0.3,0-0.5-0.2-0.5-0.5l0,0c0-0.3,0.2-0.5,0.5-0.5h1c0.3,0,0.5,0.2,0.5,0.5l0,0 C105.6,142.5,105.4,142.7,105.1,142.7z"></path>
                                        <path class="rbsvgi_55" style="fill:#243762;" d="M105.1,143h-1c-0.4,0-0.8-0.4-0.8-0.8l0,0c-0.1-0.4,0.2-0.7,0.6-0.8c0.1,0,0.1,0,0.2,0h1c0.4,0,0.8,0.4,0.8,0.8 S105.5,143,105.1,143z M104.1,141.9c-0.2,0-0.3,0.1-0.3,0.3s0.1,0.3,0.3,0.3l0,0h1c0.2,0,0.3-0.1,0.3-0.3s-0.1-0.3-0.3-0.3H104.1z"></path>
                                        <path class="rbsvgi_56" style="fill:#243762;" d="M97.3,137.6L97.3,137.6c-0.5,0.1-1-0.3-1.1-0.8v-0.6c-0.1-0.5,0.3-1,0.8-1.1l0,0c0.5-0.1,1,0.3,1.1,0.8v0.6 C98.1,137,97.8,137.5,97.3,137.6z"></path>
                                        <path class="rbsvgi_57" style="fill:#ECF1F7;" d="M97.1,137.8c-0.5,0-1-0.4-1.1-0.9v-0.6c-0.1-0.5,0.2-1.1,0.8-1.2c0,0,0.1,0,0.1,0c0.3,0,0.6,0,0.8,0.2 c0.2,0.2,0.4,0.4,0.4,0.7v0.6c0,0.3,0,0.6-0.2,0.8c-0.2,0.2-0.4,0.4-0.7,0.4H97.1L97.1,137.8z M97,135.3L97,135.3 c-0.3,0-0.5,0.1-0.6,0.3c-0.1,0.2-0.2,0.4-0.1,0.6v0.6c0.1,0.4,0.5,0.7,0.9,0.6l0,0c0.4-0.1,0.7-0.5,0.6-0.9v-0.6 c0-0.2-0.1-0.4-0.3-0.5L97,135.3z"></path>
                                        <path class="rbsvgi_58" style="fill:#3B3B9E;" d="M292.3,109H196c-2.1,0-3.8,1.7-3.8,3.8v0v38.5c0,2.1,1.7,3.8,3.8,3.8l0,0h9.9l1.3,10.9l10.9-10.9h74.2 c2.1,0,3.8-1.7,3.8-3.8v-38.5C296,110.7,294.4,109.1,292.3,109z"></path>
                                        <path class="rbsvgi_59" style="fill:#ECF1F7;" d="M265.1,152.6c-11.2,0-20.2-9-20.2-20.2c0-11.2,9-20.2,20.2-20.2c11.2,0,20.2,9,20.2,20.2 C285.2,143.5,276.2,152.5,265.1,152.6z M265.1,112.8c-10.8,0-19.5,8.7-19.5,19.5s8.7,19.5,19.5,19.5c10.8,0,19.5-8.7,19.5-19.5l0,0 C284.6,121.5,275.9,112.8,265.1,112.8z"></path>
                                        <path class="rbsvgi_60" style="fill:#FFFFFF;" d="M237.5,122.9h-34c-0.2,0-0.3-0.1-0.3-0.3c0-0.2,0.1-0.3,0.3-0.3c0,0,0,0,0,0h34c0.2,0,0.3,0.1,0.3,0.3v0 C237.9,122.8,237.7,122.9,237.5,122.9z"></path>
                                        <path class="rbsvgi_61" style="fill:#FFFFFF;" d="M237.5,138.1h-34c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h34c0.2,0,0.3,0.1,0.3,0.3l0,0 C237.9,137.9,237.7,138.1,237.5,138.1z"></path>
                                        <path class="rbsvgi_62" style="fill:#FFFFFF;" d="M237.5,130.6h-17c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3l0,0h17c0.2,0,0.3,0.1,0.3,0.3l0,0 C237.9,130.5,237.7,130.6,237.5,130.6z"></path>
                                        <path class="rbsvgi_63" style="fill:#FFFFFF;" d="M237.5,144.2h-17c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3l0,0h17c0.2,0,0.3,0.1,0.3,0.3l0,0 C237.9,144.1,237.7,144.2,237.5,144.2z"></path>
                                        <path class="rbsvgi_64" style="fill:#FFFFFF;" d="M215.5,130.6H204c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3l0,0h11.5c0.2,0,0.3,0.1,0.3,0.3 S215.7,130.6,215.5,130.6z"></path>
                                        <path class="rbsvgi_65" style="fill:#243762;" d="M283,128.8L283,128.8l-4.7-19.1l-1.3,0.4l-5.1,1.7l-0.9,0.3l1.7,7.6h-15.9c-4.8,0-8.9,3.9-9.5,9l-0.2,1.6 c-1,8.1,3.6,15.7,11.2,18.7l1,0.3c8.2,2.6,17.1-0.8,21.6-8.1c1.4-2.3,2.2-4.8,2.6-7.4C283.6,132.1,283.4,130.4,283,128.8z"></path>
                                        <path class="rbsvgi_66" style="fill:#243762;" d="M269.2,104.3l-0.5-7.3c0-0.2,0-0.4-0.1-0.6c0.1-0.3,0.1-0.6,0.1-0.9c0-2.5-2.1-4.6-4.6-4.6l0,0 c-1.1,0-2.2,0.4-3.1,1.2c-1.9-2-5-2.1-6.9-0.2c-0.8,0.7-1.3,1.7-1.5,2.7c-1.7,0.4-2.9,2-2.7,3.7c0.1,1.2,0.9,2.3,2,2.8l0.3,4.5 c0.4,3,3.1,5.2,6.1,4.9l5.8-0.4C267.1,109.8,269.3,107.3,269.2,104.3z"></path>
                                        <path class="rbsvgi_67" style="fill:#F9D9EB;" d="M268.3,106.7c1.3-0.1,2.3-1.3,2.2-2.6c-0.1-1.3-1.3-2.3-2.6-2.2l0,0h-0.3l-0.2-2.4c0-0.2,0-0.3-0.1-0.5 c-0.9,1.6-3,2.2-4.6,1.3c-0.7-0.4-1.3-1.1-1.6-1.9c-0.9,1-2.1,1.7-3.4,1.9c-1.5,0.2-2.9-0.4-4-1.4c-0.3,0.6-0.4,1.2-0.3,1.8l0.3,3.3 v0.9l0.4,6.5c0.1,2.2,1.5,4.2,3.6,5l0.7,3.7c0.5,3.3,3.5,5.7,6.8,5.3c3.1-0.6,5.1-3.9,4.4-7.4l-1.3-8.5l-0.2-2.6L268.3,106.7z"></path>
                                        <path class="rbsvgi_68" style="opacity:0.46;fill:#EF92C7;enable-background:new;" d="M262.8,116.5l-2.9,0.2h-1.6c1,1.2,3.3,1.8,5.6,1.2l0,0c2.9-0.7,4.9-2.8,4.4-4.7l-0.3-1.3 C267.5,114.5,265.4,116.4,262.8,116.5z"></path>
                                        <path class="rbsvgi_69" style="opacity:0.46;fill:#EF92C7;enable-background:new;" d="M269.2,104.2c-0.1-0.7-0.7-1.3-1.5-1.4v0.5c0,0.2,0.1,0.4,0.1,0.6v1.9C268.6,105.7,269.2,105,269.2,104.2z"></path>
                                        <path class="rbsvgi_70" style="fill:#243762;" d="M256.2,105.4L256.2,105.4c-0.2,0-0.4-0.1-0.4-0.3v-0.7c0-0.2,0.1-0.4,0.3-0.4l0,0c0.2,0,0.4,0.1,0.4,0.3v0.7 C256.5,105.2,256.4,105.4,256.2,105.4z"></path>
                                        <path class="rbsvgi_71" style="fill:#243762;" d="M262.3,105L262.3,105c-0.2,0-0.4-0.1-0.4-0.3V104c0-0.2,0.1-0.4,0.3-0.4l0,0c0.2,0,0.4,0.1,0.4,0.3v0.7 C262.6,104.9,262.5,105,262.3,105z"></path>
                                        <path class="rbsvgi_72" style="fill:#243762;" d="M254.4,102.8c0.1-0.2,0.2-0.3,0.4-0.4l0.5-0.4l0.4-0.4l0.5-0.4c0.2,0,0.5,0.2,0.5,0.4c0.1,0.5-0.1,1-0.5,1.3 c-0.3,0.3-0.8,0.5-1.3,0.4C254.5,103.2,254.4,103,254.4,102.8z"></path>
                                        <path class="rbsvgi_73" style="fill:#243762;" d="M263.9,102.7h-2.6c-0.2-0.1-0.2-0.4,0-0.7c0.3-0.4,0.9-0.6,1.4-0.6c0.6,0,1.1,0.4,1.3,0.9 C264.2,102.4,264.1,102.7,263.9,102.7z"></path>
                                        <path class="rbsvgi_74" style="fill:#243762;" d="M258.9,108.5c-0.3,0-0.7-0.2-0.9-0.4c-0.3-0.3-0.3-0.7-0.2-1.1l1-3.3c0-0.1,0.1-0.2,0.2-0.1s0.2,0.1,0.1,0.2 l-1,3.3c-0.1,0.3,0,0.6,0.2,0.8c0.2,0.2,0.4,0.3,0.7,0.3h1.8l0.2,0.2l-0.2,0.2L258.9,108.5L258.9,108.5z"></path>
                                        <path class="rbsvgi_75" style="fill:#FFFFFF;" d="M262.7,111.7l-0.8,0.4c-0.3,0.2-0.8,0.1-1-0.2l-0.8-1.8l4.6-2.1C265.8,110.5,264.4,111,262.7,111.7z"></path>
                                        <polygon class="rbsvgi_76" style="fill:#FFFFFF;" points="257.8,119.5 254.8,124.1 261.4,129.6 263.9,124.6 "></polygon>
                                        <polygon class="rbsvgi_77" style="fill:#FFFFFF;" points="269.8,119.5 272.8,124.1 266.2,129.6 263.7,124.6 "></polygon>
                                        <path class="rbsvgi_78" style="fill:#4C65BA;" d="M268.7,111.8h-0.2c-0.4,0-0.8-0.4-0.8-0.8c0,0,0-0.1,0-0.1l0.7-9.9c0-0.4,0.4-0.8,0.8-0.8c0,0,0.1,0,0.1,0h0.2 c0.4,0,0.8,0.4,0.8,0.8c0,0,0,0.1,0,0.1l-0.7,9.9C269.5,111.5,269.2,111.8,268.7,111.8z"></path>
                                        <path class="rbsvgi_79" style="fill:#F9D9EB;" d="M271.4,102.5c0,0-2.3-0.9-2.5,1.1s0.1,1.5,0.3,1.4s-0.6,0.6-0.3,1.8s0.6,1.3,0.7,1.2c-0.7,0.5-0.9,1.5-0.3,2.2 c0,0.1,0.1,0.1,0.1,0.2c0.8,0.6,1.7,1.1,2.6,1.4l5.1-1.7C276.6,106.9,275.4,102.6,271.4,102.5z"></path>
                                        <path class="rbsvgi_80" style="fill:#243762;" d="M269.7,105.3H269c-0.1,0-0.1-0.1-0.1-0.2h0.2c0.6,0.1,1.3,0.1,1.9-0.1h0.2c0,0.1,0,0.2-0.1,0.2L269.7,105.3z"></path>
                                        <path class="rbsvgi_81" style="fill:#243762;" d="M269.7,108.3H269c-0.1,0-0.1-0.1-0.1-0.2h0.2c0.6,0.1,1.3,0.1,1.9-0.1h0.2c0,0.1,0,0.2-0.1,0.2L269.7,108.3z"></path>
                                        <path class="rbsvgi_82" style="fill:#C5D9FF;" d="M245.9,81h-19.2c-0.3,0.1-0.6,0.3-0.6,0.7v15.9c-0.1,0.6,0.4,1.1,1,1.2c0,0,0.1,0,0.1,0h7.6l6.2,7.4 c0.2,0.2,0.5,0.1,0.5-0.3v-6.7c0-0.2,0.1-0.4,0.3-0.4h4.1c0.6,0,1-0.5,1-1.2V82.2C247,81.6,246.5,81.1,245.9,81 C245.9,81,245.9,81,245.9,81z"></path>
                                        <path class="rbsvgi_83" style="fill:#FFFFFF;" d="M234,86.8c-0.5,0-0.9-0.5-0.8-1c0,0,0-0.1,0-0.1c0.6-1.7,2.4-2.6,4.1-2.2c0.8,0.2,1.5,0.7,1.9,1.4 c1,1.4,0.7,3.4-0.6,4.5l-1.5,1.3v0.5c0,0.4-0.4,0.8-0.8,0.8H236c-0.3,0-0.5-0.2-0.5-0.5c0,0,0-0.1,0-0.1v-0.9c0-0.4,0.2-0.8,0.5-1.1 l1.5-1.3c0.5-0.4,0.7-1,0.5-1.6c-0.1-0.6-0.5-1.1-1.1-1.3c-0.9-0.3-1.8,0.2-2.1,1C234.8,86.5,234.4,86.8,234,86.8L234,86.8z"></path>
                                        <path class="rbsvgi_84" style="fill:#FFFFFF;" d="M236.3,93.7L236.3,93.7c0.4,0,0.8,0.4,0.8,0.8c0,0,0,0.1,0,0.1l0,0c0,0.4-0.4,0.8-0.8,0.8c0,0-0.1,0-0.1,0l0,0 c-0.4,0-0.8-0.4-0.8-0.8c0,0,0-0.1,0-0.1l0,0C235.5,94,235.8,93.7,236.3,93.7z"></path>
                                        <path class="rbsvgi_85" style="fill:#F7A9B4;" d="M108.5,94.4h19.2c0.3,0.1,0.6,0.3,0.6,0.7V111c0.1,0.6-0.4,1.1-1,1.2c0,0-0.1,0-0.1,0h-7.6l-6.2,7.4 c-0.2,0.2-0.5,0.1-0.5-0.3v-6.8c0-0.2-0.1-0.4-0.3-0.4h-4.1c-0.6,0-1-0.5-1-1.2V95.6C107.5,95,107.9,94.5,108.5,94.4z"></path>
                                        <path class="rbsvgi_86" style="fill:#FFFFFF;" d="M119.6,106L119.6,106c0.2,0,0.5,0.2,0.5,0.4v0.9c0,0.2-0.2,0.4-0.4,0.4l0,0h-3.4c-0.2,0-0.4-0.2-0.4-0.4l0,0 v-0.9c0-0.2,0.2-0.4,0.4-0.4l0,0l0,0c0.2,0,0.4-0.2,0.4-0.4l0,0v-2.8c0-0.2-0.2-0.4-0.4-0.4l0,0l0,0c-0.2,0-0.4-0.2-0.4-0.4l0,0v-1 c0-0.2,0.2-0.4,0.4-0.4l0,0h2.5c0.2,0,0.4,0.2,0.4,0.4l0,0v4.6C119.1,105.8,119.3,106,119.6,106z"></path>
                                        <path class="rbsvgi_87" style="fill:#FFFFFF;" d="M117.9,97.5L117.9,97.5c0.6,0,1,0.4,1,1l0,0c0,0.6-0.4,1-1,1l0,0c-0.6,0-1-0.4-1-1l0,0 C116.9,97.9,117.3,97.5,117.9,97.5z"></path>
                                        <path class="rbsvgi_88" style="fill:#FFFFFF;" d="M232.6,170.4v-2.9c0-0.8,0.9-1.5,2-1.5h42.8c1.1,0,2,0.7,2,1.5v28.4c0,0.8-0.9,1.5-2,1.5h-42.8 c-1.1,0-2-0.7-2-1.5v-4.6"></path>
                                        <path class="rbsvgi_89" style="fill:#C5D9FF;" d="M232.6,172v-4.5c0-0.8,0.9-1.5,2-1.5h42.8c1.1,0,2,0.7,2,1.5v4.3"></path>
                                        <path class="rbsvgi_90" style="fill:#243762;" d="M233,172h-0.7v-4.5c0.2-1.1,1.2-1.9,2.3-1.8h42.8c1.1-0.1,2.1,0.7,2.3,1.8v4.3H279v-4.3c0-0.7-0.7-1.2-1.6-1.2 h-42.8c-0.9,0-1.6,0.5-1.6,1.2V172z"></path>
                                        <path class="rbsvgi_91" style="fill:#F7A9B4;" d="M279.1,171.8L279.1,171.8z"></path>
                                        <rect class="rbsvgi_92" x="232.6" y="171.5" style="fill:#243762;" width="46.5" height="0.5"></rect>
                                        <path class="rbsvgi_93" style="fill:#FFFFFF;" d="M236,170.2c-0.6,0-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1S236.6,170.2,236,170.2L236,170.2z M236,168.7c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4v0C236.4,168.9,236.2,168.7,236,168.7z"></path>
                                        <path class="rbsvgi_94" style="fill:#FFFFFF;" d="M238.8,170.2c-0.6,0-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1 C239.9,169.7,239.4,170.2,238.8,170.2z M238.8,168.7c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4v0 C239.2,168.9,239,168.7,238.8,168.7z"></path>
                                        <path class="rbsvgi_95" style="fill:#FFFFFF;" d="M241.5,170.2c-0.6,0-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1 C242.6,169.7,242.1,170.2,241.5,170.2z M241.5,168.7c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4v0 C241.9,168.9,241.7,168.7,241.5,168.7z"></path>
                                        <line class="rbsvgi_96" style="fill:none;" x1="242.2" y1="179.7" x2="272.3" y2="179.7"></line>
                                        <path class="rbsvgi_97" style="fill:#243762;" d="M272.3,179.9h-30.1c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h30.1l0.2,0.2 C272.5,179.8,272.4,179.9,272.3,179.9L272.3,179.9z"></path>
                                        <line class="rbsvgi_98" style="fill:none;" x1="242.2" y1="187" x2="257.2" y2="187"></line>
                                        <path class="rbsvgi_99" style="fill:#243762;" d="M257.2,187.3h-15c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2h15l0.2,0.2 C257.5,187.1,257.4,187.3,257.2,187.3z"></path>
                                        <line class="rbsvgi_100" style="fill:none;" x1="242.2" y1="183.4" x2="253.4" y2="183.4"></line>
                                        <path class="rbsvgi_101" style="fill:#243762;" d="M253.4,183.7h-11.2c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h11.2c0.1,0,0.2,0.1,0.2,0.2 C253.7,183.5,253.6,183.7,253.4,183.7z"></path>
                                        <line class="rbsvgi_102" style="fill:none;" x1="261" y1="183.4" x2="272.3" y2="183.4"></line>
                                        <path class="rbsvgi_103" style="fill:#243762;" d="M272.3,183.7H261l-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2l0,0h11.2l0.2,0.2C272.5,183.5,272.4,183.7,272.3,183.7z"></path>
                                        <path class="rbsvgi_104" style="fill:#FFFFFF;" d="M148.3,80.7v-2.5c0-0.7,0.8-1.3,1.7-1.3h37.1c0.9,0,1.7,0.6,1.7,1.3v24.7c0,0.7-0.8,1.3-1.7,1.3H150 c-0.9,0-1.7-0.6-1.7-1.3v-4"></path>
                                        <path class="rbsvgi_105" style="fill:#AF9CDA;" d="M148.3,82.1v-3.9c0-0.7,0.8-1.3,1.7-1.3h37.1c0.9,0,1.7,0.6,1.7,1.3v3.7"></path>
                                        <path class="rbsvgi_106" style="fill:#243762;" d="M148.6,82.1H148v-3.9c0.1-1,1-1.7,2-1.6c0,0,0,0,0,0h37.1c1-0.1,1.9,0.6,2,1.6c0,0,0,0,0,0v3.7h-0.7v-3.7 c0-0.5-0.6-1-1.4-1h-37c-0.8,0-1.4,0.5-1.4,1V82.1z"></path>
                                        <path class="rbsvgi_107" style="fill:#F7A9B4;" d="M188.6,81.9L188.6,81.9z"></path>
                                        <rect class="rbsvgi_108" x="148.3" y="81.6" style="fill:#243762;" width="40.3" height="0.5"></rect>
                                        <path class="rbsvgi_109" style="fill:#FFFFFF;" d="M151.2,80.6c-0.6,0-1-0.4-1-1s0.4-1,1-1s1,0.4,1,1S151.8,80.6,151.2,80.6z M151.2,79.3c-0.2,0-0.3,0.1-0.3,0.3 c0,0.2,0.1,0.3,0.3,0.3c0.2,0,0.3-0.1,0.3-0.3C151.5,79.4,151.4,79.3,151.2,79.3z"></path>
                                        <path class="rbsvgi_110" style="fill:#FFFFFF;" d="M153.6,80.6c-0.6,0-1-0.4-1-1s0.4-1,1-1s1,0.4,1,1S154.2,80.6,153.6,80.6z M153.6,79.3c-0.2,0-0.3,0.1-0.3,0.3 c0,0.2,0.1,0.3,0.3,0.3c0.2,0,0.3-0.1,0.3-0.3C153.9,79.4,153.8,79.3,153.6,79.3z"></path>
                                        <path class="rbsvgi_111" style="fill:#FFFFFF;" d="M156,80.6c-0.6,0-1-0.4-1-1s0.4-1,1-1s1,0.4,1,1C156.9,80.1,156.5,80.5,156,80.6z M156,79.3 c-0.2,0-0.3,0.1-0.3,0.3c0,0.2,0.1,0.3,0.3,0.3c0.2,0,0.3-0.1,0.3-0.3C156.3,79.4,156.2,79.3,156,79.3z"></path>
                                        <line class="rbsvgi_112" style="fill:none;" x1="155.9" y1="88.8" x2="182" y2="88.8"></line>
                                        <path class="rbsvgi_113" style="fill:#243762;" d="M182,89h-26.1c-0.1,0-0.2-0.1-0.2-0.2l0.2-0.2H182c0.1,0,0.2,0.1,0.2,0.2C182.3,88.9,182.2,89,182,89z"></path>
                                        <line class="rbsvgi_114" style="fill:none;" x1="155.9" y1="95.1" x2="169" y2="95.1"></line>
                                        <path class="rbsvgi_115" style="fill:#243762;" d="M169,95.4h-13.1c-0.1,0-0.2-0.1-0.2-0.2l0.2-0.2H169c0.1,0,0.2,0.1,0.2,0.2C169.2,95.3,169.1,95.4,169,95.4z"></path>
                                        <line class="rbsvgi_116" style="fill:none;" x1="155.9" y1="92" x2="165.7" y2="92"></line>
                                        <path class="rbsvgi_117" style="fill:#243762;" d="M165.7,92.2H156c-0.1,0-0.2-0.1-0.2-0.2l0.2-0.2h9.7c0.1,0,0.2,0.1,0.2,0.2C165.9,92.1,165.8,92.2,165.7,92.2z"></path>
                                        <line class="rbsvgi_118" style="fill:none;" x1="172.3" y1="92" x2="182" y2="92"></line>
                                        <path class="rbsvgi_119" style="fill:#243762;" d="M182,92.2h-9.7c-0.1,0-0.2-0.1-0.2-0.2l0.2-0.2h9.7c0.1,0,0.2,0.1,0.2,0.2C182.3,92.1,182.2,92.2,182,92.2z"></path>
                                        <path class="rbsvgi_120" style="fill:#243762;" d="M0,0"></path></svg>
                                </i>
                            </div>
                            <div class="roadmap-item-info">
                                <strong class="text-color3">04</strong>
                                <div class="roadmap-item-info-inner">
                                    <h3 class="mb-0">Support</h3>
                                    <p class="mb-0">Ipsum dolor sit amet, consectetur adipiscing elit vestibulum ut nunc et enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Roadmap Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-100 bg-color10 pb-100 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-3" class="particles-js top_right mx-w25 w-100" data-color="#3E4A59" data-size="90" data-count="1" data-speed="2" data-hide="1200" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-1.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Latest</span> Updates</h2>
                    <i class="btm-ln bg-color3"></i>
                </div><!-- Sec Title -->
                <div class="blog-wrap position-relative w-100">
                    <div class="row post-caro">
                        @foreach ($blogs as $item)
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
        </div>
    </section>
@endsection
