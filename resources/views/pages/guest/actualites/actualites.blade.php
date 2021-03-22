@extends("layouts.guest.app")
@section("content")
@include("layouts.guest.breadcumb")

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image" style="padding-bottom: 40px ;">
                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                        @if (count($actualites) > 0)
                                            @foreach ($actualites as $actualite)
                                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20">
                                                    <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <div class="gdlr-core-blog-modern-inner">
                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image"><img src="upload/shutterstock_135948689-400x377.jpg" width="700" height="660"  alt="" /></div>
                                                            <div class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Albert joint research on mobile money in Tanzania</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="gdlr-core-load-more-wrap gdlr-core-js gdlr-core-center-align gdlr-core-item-pdlr" data-ajax="gdlr_core_post_ajax" data-target="gdlr-core-blog-item-holder" data-target-action="append"><a href="#" class="gdlr-core-load-more gdlr-core-button-color" data-ajax-name="paged" data-ajax-value="2">Load More</a></div>
                                        @else
                                            <div class="alert alert-primary text-center" role="alert">
                                                Aucune nouvelle Dommage!
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
