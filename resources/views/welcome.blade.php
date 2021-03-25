@extends("layouts.guest.app")
@section("content")
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
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
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #262626 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first" data-skin="Column White">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  slider-link-1" style="padding: 70px 0px 70px 0px;" data-sync-height="column-height" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/finesse.png) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 20px;"><img src="upload/hp2-col-1-icon.png" alt="" width="40" height="40" title="hp2-col-1-icon" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Finesse</h3>
                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px ;font-weight: 500 ;font-style: normal ;">Overall in here</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="gdlr-core-pbf-column-link" href="#" target="_self"></a>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" data-skin="Column White">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  slider-link-2" style="padding: 70px 0px 70px 0px;" data-sync-height="column-height" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/hp2-col-2.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 20px;"><img src="upload/hp2-col-2-icon.png" alt="" width="49" height="45" title="hp2-col-2-icon" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Graduation</h3>
                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px ;font-weight: 500 ;font-style: normal ;">Getting Diploma</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="gdlr-core-pbf-column-link" href="#" target="_self"></a>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" data-skin="Column White">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  slider-link-3" style="padding: 70px 0px 70px 0px;" data-sync-height="column-height" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/hp2-col-3.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 20px;"><img src="upload/hp2-col-3-icon.png" alt="" width="50" height="44" title="hp2-col-3-icon" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Athletics</h3>
                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px ;font-weight: 500 ;font-style: normal ;">Sport Clubs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="gdlr-core-pbf-column-link" href="#" target="_self"></a>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" data-skin="Column White">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  slider-link-4" style="padding: 70px 0px 70px 0px;" data-sync-height="column-height" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/hp2-col-4.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 20px;"><img src="upload/hp2-col-4-icon.png" alt="" width="41" height="41" title="hp2-col-4-icon" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Social</h3>
                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px ;font-weight: 500 ;font-style: normal ;">Overall in here</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="gdlr-core-pbf-column-link" href="#" target="_self"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 125px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #1e2d49 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="upload/logo-white.png" alt="" width="262" height="35" title="logo-white" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 31px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #51be78 ;">About Our University</h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
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
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px -40px 0px;padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-width: 0px;z-index: 999 ;position: relative ;"><img src="upload/about-building-1-800x132.jpg" width="1320" height="218" alt="" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 220px 0px 170px 0px;">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/hp2-video-bg-1.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.1"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 710px ;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg"><img src="upload/icon-play.png" alt="" width="82" height="82" title="icon-play" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 38px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Video Tour in Kingster</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 19px ;font-weight: 500 ;text-transform: none ;color: #ffffff ;">
                                            <p>Take a tour in Kingster and you will find the best university in the state. The video will take you to every places in this university.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover ;background-position: center ;" data-parallax-speed="0.8"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="min-height: 575px ;" data-sync-height="height-half">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/shutterstock_734589535.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
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
                    <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 55px 0px;" data-skin="Column White">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #1e1e1e ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 35px;"><img src="upload/col-icon-1.png" alt="" width="41" height="41" title="col-icon-1" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 700 ;text-transform: none ;">Education Services</h3></div>
                                                        <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                                            <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized.</p> <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" style="font-style: normal ;margin-top: 0px ;">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 31px;"><img src="upload/col-icon-2.png" alt="" width="43" height="45" title="col-icon-2" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 700 ;text-transform: none ;">International Hubs</h3></div>
                                                        <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                                            <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized.</p> <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" style="font-style: normal ;margin-top: 0px ;">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 33px;"><img src="upload/col-icon-3.png" alt="" width="40" height="43" title="col-icon-3" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 700 ;text-transform: none ;">Bachelor’s and Master’s</h3></div>
                                                        <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                                            <p>
                                                                {{ __("pages.description") }}
                                                            </p>
                                                            <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" style="font-style: normal ;margin-top: 0px ;">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 29px;"><img src="upload/col-icon-4.png" alt="" width="47" height="47" title="col-icon-4" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 700 ;text-transform: none ;">University Life</h3></div>
                                                        <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                                            <p>
                                                                {{ __("pages.description") }}
                                                            </p>
                                                            <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" style="font-style: normal ;margin-top: 0px ;">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
@endsection
