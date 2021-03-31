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
                                                        @foreach ($evenement->publication->photos as $photo)
                                                        <div>
                                                            <a href="{{ route("evenement.show", $evenement) }}">
                                                                <img src="/photos/{{ $photo->titre }}" class="img-fluid" alt="" />
                                                            </a>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <i class="post-format-icon lnr lnr-picture bg-primary text-color-light text-7 p-3"></i>
                                                </header>
                                                <h2 class="font-weight-semibold text-5">
                                                    <a href="{{ route("evenement.show", $evenement) }}" class="link-color-dark">
                                                        {{ $evenement->publication->titre }}
                                                    </a>
                                                </h2>
                                                <div class="d-flex mb-3">
                                                    <span class="post-date text-color-primary pr-3">{{ date("d, m Y", strtotime($evenement->created_at)) }}</span>
                                                    <a href="{{ route("evenements.show", $evenement) }}#comments">
                                                        <span class="post-comments d-flex align-items-center px-3"><i class="lnr lnr-bubble mr-1" aria-label="5 users comment this post"></i> {{ count($evenement->publication->commentaires) }}</span>
                                                    </a>
                                                </div>
                                                <p class="text-truncate" style="max-width: 250px">{{ $evenement->publication->texte }}</p>
                                                <a href="{{ route("evenements.show", $evenement) }}" class="text-color-primary font-weight-bold learn-more">{{ __("pages.read_more") }} <i class="fas fa-angle-right" aria-label="Read more"></i></a>
                                            </article>
                                        @else
                                        <article class="timeline-box blog-post left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                            <div class="timeline-box-arrow"></div>
                                            <header class="blog-post-header mb-4">
                                                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                                    <div class="row mx-0">
                                                        @foreach ($evenement->publication->photos as $photo)
                                                            <div class="col-6 col-md-4 p-0">
                                                                <a href="/photos/{{ $photo->titre }}">
                                                                    <span class="image-frame image-frame-style-1 image-frame-effect-1">
                                                                        <span class="image-frame-wrapper">
                                                                            <img src="/photos/{{ $photo->titre }}" class="img-fluid" alt="">
                                                                            <span class="image-frame-inner-border"></span>
                                                                            <span class="image-frame-action">
                                                                                <span class="image-frame-action-icon">
                                                                                    <i class="lnr lnr-magnifier text-color-light"></i>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </header>
                                            <h2 class="font-weight-semibold text-5">
                                                <a href="blog-single-post.html" class="link-color-dark">
                                                    {{ $evenement->publication->titre }}
                                                </a>
                                            </h2>
                                            <div class="d-flex mb-3">
                                                <span class="post-date text-color-primary pr-3">{{ date("d, m Y", strtotime($evenement->created_at)) }}</span>
                                                <a href="{{ route("evenement.show", $evenement) }}#comments">
                                                <span class="post-comments d-flex align-items-center px-3"><i class="lnr lnr-bubble mr-1" aria-label="2 users comment this post"></i> {{ count($evenement->publication->commentaires) }}</span>
                                                </a>
                                            </div>
                                            <p class="text-truncate" style="max-width: 250px">{{ $evenement->publication->texte }}</p>
                                            <a href="{{ route("evenement.show", $evenement) }}" class="text-color-primary font-weight-bold learn-more">{{ __("pages.read_more") }} <i class="fas fa-angle-right" aria-label="Read more"></i></a>
                                        </article>
                                    @endif
                                @endforeach
                            @else
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>Hélas</strong> Aucun événement prévu
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
