@extends("layouts.guest.app")
@section("content")
    <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-left">
                    <h1 class="font-weight-bold">{{ __("pages.news") }}</h1>
                    <p class="lead">{{ __("pages.ic_news") }}</p>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start justify-content-md-end">
                        <li><a href="/">{{ __("pages.home") }}</a></li>
                        <li class="active">{{ __("pages.news") }}</li>
                    </ul>
                </div>
            </div>
        </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row masonry-loader masonry-loader-showing portfolio-list portfolio-list-style-2" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
                    @if(count($actualites) > 0)
                        @foreach ($actualites as $actualite)
                            <div class="col-sm-6 col-md-4 isotope-item mb-5 p-0">
                                <div class="portfolio-item">
                                    <article class="blog-post">
                                        <span class="top-sub-title text-color-primary">{{ date('d-m-Y', strtotime($actualite->created_at)) }}</span>
                                            <h2 class="font-weight-bold text-4 mb-3">
                                            <a href="{{ route("actualite.single",$actualite) }}" class="link-color-dark">{{ $actualite->publication->titre }}</a>
                                        </h2>
                                        <div class="owl-carousel owl-theme dots-style-2 nav-style-2" data-plugin-options="{'items': 1, 'dots': true, 'nav': false, 'animateIn': 'animate__fadeIn', 'animateOut': 'animate__fadeOut'}">

                                            <div>
                                                <a href="{{ route("actualite.single",$actualite) }}">
                                                    <div class="image-frame hover-effect-2">
                                                        <div class="image-frame-wrapper">
                                                            <img src="/uploads/actualites/{{ $actualite->publication->photo }}" class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="d-flex opacity-6 my-2">

                                        </div>
                                        <hr class="mt-0 mb-3">
                                        <p class="text-color-light-3 text-truncate" style="max-width: 250px">{{ $actualite->publication->texte }}.</p>
                                        <a href="{{ route("actualite.single",$actualite) }}" class="text-color-primary font-weight-bold learn-more">{{ __("pages.read_more") }} <i class="fas fa-angle-right text-3" aria-label="Read more"></i></a>
                                    </article>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>Helas!</strong> aucune nouvellle
                        </div>
                        <script>
                          $(".alert").alert();
                        </script>
                    @endif
                </div>
                <hr class="mt-5 mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">

                    </div>
                </div>
            </div>
        </section>
@endsection
