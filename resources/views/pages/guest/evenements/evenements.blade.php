@extends("layouts.guest.app")
@section("content")
@include("layouts.guest.breadcumb")

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper ">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-event-item gdlr-core-item-pdb">
                                        <div class="gdlr-core-event-item-holder clearfix">
                                            @if (count($evenements) > 0)
                                                @foreach ($evenements as $evenement)
                                                    <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix" style="margin-bottom: 45px ;">
                                                        <div class="gdlr-core-event-item-thumbnail">
                                                            <a href="#"><img src="/upload/shutterstock_218235004-400x257.jpg" width="700" height="450" alt="" /></a>
                                                        </div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month"><span class="gdlr-core-date" >02</span><span class="gdlr-core-month">Sep</span></span>
                                                        <div class="gdlr-core-event-item-content-wrap">
                                                            <h3 class="gdlr-core-event-item-title"><a href="#" >Asia Pacific Studies Fall Festival</a></h3>
                                                            <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">8:00 am - 5:00 pm</span></span><span class="gdlr-core-event-item-info gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">Kingster Grand Hall</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="alert alert-primary text-center" role="alert">
                                                    Aucun événement prévu
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
