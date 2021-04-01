@extends("layouts.guest.app")
@section("content")
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="index.html">{{ __("pages.home") }}</a></li>
                                <li class="active">{{ __("pages.filieres") }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ __("pages.filieres") }}</h1>
                            <p class="lead">{{ __("pages.ic_filieres") }}</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container py-2">
                <div class="row">
                    <div class="col">
                        @if (count($cycles) > 0)
                            @foreach ($cycles as $cycle)
                                <h4>{{ __("pages.cycle") }} - {{ $cycle->designation }}</h4>
                                <hr class="pb-2 mb-4">
                                <div class="row justify-content-center">
                                    <div class="col-10 col-sm-8 col-md-12 overflow-hidden p-0">
                                        <div class="owl-carousel carousel-center-active-items carousel-center-active-items-style-2 dots-style-3 pb-4 mb-0" data-plugin-carousel data-plugin-options="{'autoplay': false, 'dots': false, 'nav': true, 'loop': true, 'margin': 40, 'responsive': { '0': {'items': 1}, '576': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 5}}}">
                                            @if (count($cycle->filieres) > 0)
                                                @foreach ($cycle->filieres as $filiere)
                                                    <div>
                                                        <a href="blog-single-post.html">
                                                            <article class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/blog/posts/post-7-square.jpg'}">
                                                                <div class="card-body p-5">
                                                                    <h3 class="font-weight-bold text-4 mb-1">{{ $filiere->nom }}</h3>
                                                                    <p>
                                                                        <i class="far fa-clock mt-1 text-color-primary"></i>
                                                                        <time class="font-tertiary text-1" datetime="2020-01-10">Jan 10, 2020</time>
                                                                    </p>
                                                                    <p>{{ $filiere->description }}</p>
                                                                    <p class="text-color-dark font-weight-semibold mb-0">
                                                                        <img src="img/authors/author-2.jpg" class="rounded-circle img-thumbnail-small d-inline-block mr-2" width="25" height="25" alt=""> by John Doe
                                                                    </p>
                                                                </div>
                                                            </article>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="alert alert-secondary" role="alert">
                                                    Aucune filière disponnible
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-success" role="alert">
                                Nous sommes encore nouveau! un peu de patience! aucune filière organisée
                            </div>
                        @endif
                    </div>
                </div>
            </div>
@endsection
