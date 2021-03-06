@extends("layouts.guest.app")
@section("content")
    <section class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 text-left">
                        <h1 class="font-weight-bold">{{ __("pages.events") }}</h1>
                        <p class="lead">{{ __("pages.ic_events") }}.</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb justify-content-start justify-content-md-end">
                            <li><a href="#">{{ __("pages.home") }}</a></li>
                            <li class="active">{{ __("pages.events") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="timeline" id="timeline">
                        <div class="timeline-body">
                            @if (count($evenements))
                                @foreach ($evenements as $evenement)
                                    @if ($evenement->id % 2 == 0)
                                        <article class="timeline-box blog-post right appear-animation" data-appear-animation="fadeIn">
                                            <div class="timeline-box-arrow"></div>
                                                <header class="blog-post-header mb-4">
                                                    <div class="owl-carousel owl-theme dots-style-2 nav-style-2" data-plugin-options="{'items': 1, 'dots': true, 'nav': false, 'animateIn': 'animate__fadeIn', 'animateOut': 'animate__fadeOut'}">

                                                        <div>
                                                            <a href="{{-- route("evenement.show",$evenement) --}}">
                                                                <img src="/uploads/{{ $evenement->publication->photo }}" class="img-fluid" alt="" />
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <i class="post-format-icon lnr lnr-picture bg-primary text-color-light text-7 p-3"></i>
                                                </header>
                                                <h2 class="font-weight-semibold text-5">
                                                    <a href="{{-- route("evenement.show",$evenement) --}}" class="link-color-dark">
                                                        {{ $evenement->publication->titre }}
                                                    </a>
                                                </h2>
                                                <div class="d-flex mb-3">
                                                    <i class="fas fa-calendar mt-1 mr-2" aria-hidden="true"></i> <span class="post-date text-color-primary">{{ $evenement->date_debut }}</span> |
                                                    <i class="fas fa-calendar-check text-color-primary mt-1 mr-2"></i><span class="post-date text-color-primary pr-3">{{ $evenement->date_fin }}</span>
                                                    <i class="fas fa-map-marker text-color-primary mt-1 mr-2"></i><span class="post-date text-color-primary pr-3">{{ $evenement->lieu }}</span>
                                                </div>
                                                <p class="text-truncate" style="max-width: 250px">{{ $evenement->publication->texte }}</p>
                                                <a href="{{-- route("evenements.show",$evenement) --}}" class="text-color-primary font-weight-bold learn-more">{{ __("pages.read_more") }} <i class="fas fa-angle-right" aria-label="Read more"></i></a>
                                            </article>
                                        @else
                                        <article class="timeline-box blog-post left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                            <div class="timeline-box-arrow"></div>
                                            <header class="blog-post-header mb-4">
                                                <div class="owl-carousel owl-theme dots-style-2 nav-style-2" data-plugin-options="{'items': 1, 'dots': true, 'nav': false, 'animateIn': 'animate__fadeIn', 'animateOut': 'animate__fadeOut'}">
                                                    <div>
                                                        <a href="{{-- route("evenement.show",$evenement) --}}">
                                                            <img src="/uploads/{{ $evenement->publication->photo }}" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <i class="post-format-icon lnr lnr-picture bg-primary text-color-light text-7 p-3"></i>
                                            </header>
                                            <h2 class="font-weight-semibold text-5">
                                                <a href="blog-single-post.html" class="link-color-dark">
                                                    {{ $evenement->publication->titre }}
                                                </a>
                                            </h2>
                                            <div class="d-flex mb-3">
                                                <i class="fas fa-calendar mt-1 mr-2" aria-hidden="true"></i> <span class="post-date text-color-primary">{{ $evenement->date_debut }}</span> |
                                                <i class="fas fa-calendar-check text-color-primary mt-1 mr-2"></i><span class="post-date text-color-primary pr-3">{{ $evenement->date_fin }}</span>
                                                <i class="fas fa-map-marker text-color-primary mt-1 mr-2"></i><span class="post-date text-color-primary pr-3">{{ $evenement->lieu }}</span>
                                            </div>
                                            <p class="text-truncate" style="max-width: 250px">{{ $evenement->publication->texte }}</p>
                                            <a href="{{-- route("evenement.show",$evenement) --}}" class="text-color-primary font-weight-bold learn-more">{{ __("pages.read_more") }} <i class="fas fa-angle-right" aria-label="Read more"></i></a>
                                        </article>
                                    @endif
                                @endforeach
                            @else
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>H??las</strong> Aucun ??v??nement pr??vu
                                </div>

                                <script>
                                  $(".alert").alert();
                                </script>
                            @endif
                            </div>
                        </div>
                        <hr class="mt-5 mb-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mb-3 mb-sm-0">
                            </div
                            <div class="col-auto">
                                {{ $evenements->links("vendor.pagination.bootstrap-4") }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
