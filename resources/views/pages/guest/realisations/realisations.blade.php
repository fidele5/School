@extends("layouts.guest.app")
@section("content")
        <section class="page-header mb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 text-left">
                        <h1><a href="index.html">{{ __("pages.realization") }}</a></h1>
                        <p class="lead">{{ __("pages.ic_realization") }}</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb justify-content-start justify-content-md-end">
                            <li>{{ __("pages.home") }}</li>
                            <li class="active">{{ __("pages.realization") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mb-4 pb-3">
            <div class="row align-items-center mb-4">
                <div class="col-12 col-md-8 col-lg-9">
                    <ul id="portfolioLoadMoreFilter" class="nav sort-source justify-content-center justify-content-md-start mb-4 mb-md-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        @if (count($categories) > 0)
                            <li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">SHOW ALL</a></li>
                            @foreach ($categories as $categorie)
                                <li class="nav-item" data-option-value=".{{ $categorie->designation }}"><a class="nav-link text-uppercase" href="#">{{ $categorie->designation }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pl-3">
                    <div class="sort-destination-loader sort-destination-loader-showing mb-4">
                        <ul id="portfolioLoadMoreWrapper" class="portfolio-list sort-destination" data-sort-id="portfolio" data-ajax-url="/ajax/portfolio-overlay-ajax-load-more.html" data-total-pages="3">
                            @if (count($realisations) > 0 )
                                @foreach ($realisations as $realisation)
                                    <li class="col-12 col-md-6 col-lg-4 p-0 isotope-item {{ $realisation->categorie_realisation->designation }}">
                                        <div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'accY' : -50}">
                                            <a href="portfolio-detail-1.html">
                                                <span class="image-frame image-frame-style-1 image-frame-effect-1">
                                                    <span class="image-frame-wrapper">
                                                        <img src="/realisations/{{ $realisation->titre }}" class="img-fluid" alt="EZ Watch 2">
                                                        <span class="image-frame-inner-border"></span>
                                                        <span class="image-frame-action">
                                                            <span class="image-frame-action-icon">
                                                                <i class="lnr lnr-link text-color-light"></i>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <div class="alert alert-info alert-dismissible fade show mb-4" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <strong>Holy guacamole!</strong> Aucune realisation disponible.
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
                @if (count($realisations) > 0)
                    <div class="col-12 mb-4 d-flex justify-content-center">
                        <div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                        <button id="portfolioLoadMore" type="button" class="btn btn-primary btn-rounded btn-wide-5 btn-icon-effect-2 outline-none font-weight-semibold text-0">
                            <span>{{ __("pages.see_all") }}</span>
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                @endif
            </div>
        </div>
@endsection
