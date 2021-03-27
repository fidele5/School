@extends("layouts.guest.app")
@section("content")
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    {{-- Home Caroussel --}}
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #191919 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400%7COpen+Sans:600" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                        <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>
                                                    @foreach ($caroussels as $caroussel)
                                                        @switch($caroussel->id)
                                                            @case(1)
                                                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="/upload/slider-hp2-1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="/upload/{{ $caroussel->image }}" alt="" title="slider-hp2-1" width="1800" height="958" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-1" data-x="48" data-y="center" data-voffset="-96" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">{{ $caroussel->titre }}</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-2" data-x="45" data-y="center" data-voffset="-17" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">Kingster</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-3" data-x="414" data-y="center" data-voffset="-16" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">University</div>
                                                                    <div class="tp-caption rev-btn rev-hiddenicon " id="slide-5-layer-6" data-x="46" data-y="center" data-voffset="97" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 8; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Take A Tour</div>
                                                                </li>
                                                            @break

                                                            @case(2)
                                                                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-hp2-2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="upload/{{ $caroussel->image }}" alt="" title="slider-hp2-2" width="1800" height="958" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-6-layer-1" data-x="536" data-y="center" data-voffset="-114" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">{{ $caroussel->titre }}</div>
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-6-layer-8" data-x="537" data-y="center" data-voffset="-10" data-width="['754']" data-height="['121']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":350,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(61,177,102,0.87);"></div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-6-layer-2" data-x="563" data-y="center" data-voffset="-15" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":580,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">Kingster</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-6-layer-3" data-x="896" data-y="center" data-voffset="-15" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":690,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">University</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-6-layer-9" data-x="538" data-y="center" data-voffset="129" data-width="['746']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":980,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 746px; max-width: 746px; white-space: normal; font-size: 19px; line-height: 31px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">{{ $caroussel->description }}.</div>
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-6-layer-10" data-x="539" data-y="center" data-voffset="201" data-width="['285']" data-height="['6']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":1290,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgb(61,177,102);"></div>
                                                                </li>
                                                            @break

                                                            @case(3)
                                                                <li data-index="rs-7" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-hp2-3-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="upload/{{ $caroussel->image }}" alt="" title="slider-hp2-3" width="1800" height="916" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-7-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 35px; line-height: 33px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">{{ $caroussel->titre }}</div>
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-7-layer-8" data-x="center" data-hoffset="" data-y="center" data-voffset="-14" data-width="['347']" data-height="['112']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(61,177,102,0.87);"></div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-7-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="-20" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">Tiger Kings</div>
                                                                    <div class="tp-caption rev-btn " id="slide-7-layer-12" data-x="center" data-hoffset="" data-y="center" data-voffset="113" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(61,177,102);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]" data-paddingright="[28,28,28,28]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[28,28,28,28]" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">{{ $caroussel->description }}</div>
                                                                </li>
                                                            @break

                                                            @case(4)
                                                                <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-hp2-4-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="upload/{{ $caroussel->image }}" alt="" title="slider-hp2-4" width="1800" height="958" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-8-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="106" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 32px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">{{ $caroussel->titre }}</div>
                                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-8-layer-8" data-x="center" data-hoffset="" data-y="center" data-voffset="-2" data-width="['588']" data-height="['114']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(61,177,102,0.87);"></div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-8-layer-2" data-x="center" data-hoffset="-184" data-y="center" data-voffset="-10" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">Kingster</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-8-layer-14" data-x="center" data-hoffset="171" data-y="center" data-voffset="-9" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">University</div>
                                                                </li>
                                                            @break

                                                            @default
                                                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-hp2-1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="upload/slider-hp2-1.jpg" alt="" title="slider-hp2-1" width="1800" height="958" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-1" data-x="48" data-y="center" data-voffset="-96" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">The Best University Of The State</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-2" data-x="45" data-y="center" data-voffset="-17" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">Kingster</div>
                                                                    <div class="tp-caption   tp-resizeme" id="slide-5-layer-3" data-x="414" data-y="center" data-voffset="-16" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">University</div>
                                                                    <div class="tp-caption rev-btn rev-hiddenicon " id="slide-5-layer-6" data-x="46" data-y="center" data-voffset="97" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 8; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Take A Tour</div>
                                                                </li>
                                                        @endswitch
                                                    @endforeach
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End home caroussel --}}


                    {{-- About section --}}

                    <div class="gdlr-core-pbf-wrapper " style="padding: 125px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #1e2d49 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="upload/marieaux.png" alt="" width="262" height="35" title="logo-white" /></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 31px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #51be78 ;">{{ __("pages.about_our_university") }}</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 23px ;text-transform: none ;color: #d8e3fb ;">
                                                        <p>
                                                            {{ __("pages.title_card") }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 19px ;font-weight: 500 ;text-transform: none ;color: #ffffff ;">
                                                        <p>{{ __("pages.description") }}.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="gdlr-core-button-id-44682"><span class="gdlr-core-content" >Read More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="font-size: 18px ;color: #ffffff ;"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- End about section --}}


                    {{-- Vision section --}}
                    <h3 class="h1-responsive font-weight-bold my-5 text-center">Notre vision</h3>
                   <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        
                                        <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                                            <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="2">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_2"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="3">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_3"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="4">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_4"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">{{ __("pages.finesse_title") }}</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="2">Discipline</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="3">Excellence</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="4">Spiritualité</div>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                                <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_24">{{ __("pages.finesse_title") }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p></p>
                                                    <p>{{ __("pages.finesse_text") }}</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="2" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">{{ __("pages.discipline") }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p></p>
                                                    <p>{{ __("pages.discipline_text") }}</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="3" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_26">{{ __("pages.excellence") }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p></p>
                                                    <p>{{ __("pages.excellence_text") }}</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="4" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_27">{{ __("pages.spirituality") }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p></p>
                                                    <p> <blockquote>{{ __("pages.spirituality_text") }}</blockquote></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End vision section --}}

                    
                    {{-- news and events --}}
                    <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;" data-skin="Blut Title Column Service">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-event-item gdlr-core-item-pdb" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 37px ;">
                                            <div class="gdlr-core-block-item-title-inner clearfix">
                                                <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">{{ __("pages.events") }}</h3>
                                                <div class="gdlr-core-block-item-title-divider" style="font-size: 24px ;border-bottom-color: #dcdcdc ;border-bottom-width: 2px ;"></div>
                                            </div><a class="gdlr-core-block-item-read-more" href="{{ route("evenement") }}" target="_self" style="color: #3db166 ;">{{ __("pages.view_all_events") }}</a></div>
                                        <div class="gdlr-core-event-item-holder clearfix">
                                            @if(count($evenements) > 0)
                                                @foreach($evenements as $evenement)
                                                <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                    <div class="gdlr-core-event-item-thumbnail">
                                                        <a href="#"><img src="upload/tyler-callahan-662157-unsplash-600x333.jpg" width="900" height="500" alt="" /></a>
                                                    </div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month"><span class="gdlr-core-date" >17</span><span class="gdlr-core-month">Dec</span></span>
                                                    <div class="gdlr-core-event-item-content-wrap">
                                                        <h3 class="gdlr-core-event-item-title"><a href="#" >Fintech &#038; Key Investment Conference</a></h3>
                                                        <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">1:00 pm - 5:00 pm</span></span><span class="gdlr-core-event-item-info gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">Kingster Grand Hall</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="alert alert-info" >
                                                    Aucun évenement prévu!
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 40px ;">
                                            <div class="gdlr-core-block-item-title-inner clearfix">
                                                <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">{{ __("pages.news") }}</h3>
                                                <div class="gdlr-core-block-item-title-divider" style="font-size: 24px ;border-bottom-width: 2px ;"></div>
                                            </div><a class="gdlr-core-block-item-read-more" href="{{ route("actualite") }}" target="_self" style="color: #3db166 ;">{{ __("pages.read_all_news") }}</a></div>
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                            @if(count($actualites) > 0)
                                                @foreach($actualites as $actualite)
                                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                                        <div class="gdlr-core-blog-grid ">
                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                <a href="#"><img src="upload/shutterstock_481869205-600x333.jpg" width="900" height="500" alt="" /></a>
                                                            </div>
                                                            <div class="gdlr-core-blog-grid-content-wrap">
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span></div>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ;"><a href="#" >Professor Tom comments on voluntary recalls by snack brands</a></h3></div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="alert alert-info">
                                                    Rien pour le moment
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End news and events --}}

                    {{-- Team --}}
                    <section class="team-section text-center my-5 container">
                        <h3 class="h1-responsive font-weight-bold my-5">Administration</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle z-depth-1"
                                    alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
                                <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
                                <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci sed quia non numquam modi tempora eius.</p>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle z-depth-1"
                                    alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
                                <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
                                <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
                                    doloremque rem laudantium totam aperiam.</p>
                            </div>
        
                            <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-1"
                                    alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
                                <p class="text-uppercase blue-text"><strong>Photographer</strong></p>
                                <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim est fugiat nulla id eu laborum.</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
                                    alt="Sample avatar">
                                </div>
                                <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
                                <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
                                <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
                                    totam officia voluptates perferendis voluptatibus aut.</p>
                            </div>
                        </div>
                    </section>
                    {{-- End team --}}

                    {{-- Submission section --}}

                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="min-height: 575px ;" data-sync-height="height-half">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/bac.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 80px 120px 55px 90px;" data-sync-height="height-half" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/hp-2-half.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 29px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">{{ __("pages.submission_request") }}</h3>
                                                    </div>
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-weight: 500 ;font-style: normal ;color: #51be78 ;">
                                                         {{ __("pages.submission_sub_title") }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;text-transform: none ;color: #ffffff ;">
                                                        <p>
                                                            {{ __("pages.submission_text") }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 15px ;color: #ffffff ;padding: 12px 29px 17px 31px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >
                                                        {{ __("pages.apply_now") }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End submission section --}}
                </div>
            </div>
@endsection
