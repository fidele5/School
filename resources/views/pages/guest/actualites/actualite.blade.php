@extends("layouts.guest.app")
@section("content")
    <section class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-left">
                    <h1 class="font-weight-bold">{{ __("pages.news") }}</h1>
                    <p class="lead">{{ $actualite->publication->titre }}</p>
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
    <div class="container">
        <div class="row">
            <aside class="sidebar col-md-4 col-lg-3 order-2">
                <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" role="tablist">
                    <div class="card">
                        <div id="toggleSidebarSearch" class="accordion-body accordion-body-show-border-top collapse show" role="tabpanel" aria-labelledby="sidebarSearchForm">
                            <div class="card-body pt-4">
                                <form id="sidebarSearchForm" class="sidebar-search" action="https://www.okler.net/previews/ezy/2.1.0/page-search-results.html" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control line-height-1 bg-light-5" name="s" id="s" placeholder="Search..." required="">
                                        <span class="input-group-btn">
                                        <button class="btn btn-light" type="submit"><i class="fas fa-search text-color-primary"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordion-header" role="tab" id="categories">
                            <h3 class="text-3 mb-0">
                                <a href="#" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">CATEGORIES</a>
                            </h3>
                        </div>
                        <div id="toggleCategories" class="accordion-body collapse show" aria-labelledby="categories">
                            <div class="card-body">
                                <ul class="list list-unstyled">
                                    @foreach ($categories as $categorie)
                                        <li class="mb-2">
                                            <a href="#" class="font-weight-semibold active"><i class="fas fa-angle-right ml-1 mr-1"></i>{{ $categorie->designation }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">
                        <div class="d-flex mb-3">
                            <span class="post-date text-color-primary pr-3">{{ date("D d, M Y", strtotime($actualite->created_at)) }}</span>
                        </div>
                        <header class="blog-post-header mb-3">
                            <img src="/uploads/actualites/{{ $actualite->publication->photo }}" class="img-fluid" alt="" />
                        </header>
                        <p class="mb-4">{{ $actualite->publication->texte }}</p>
                        <footer class="blog-post-footer border border-left-0 border-right-0 py-4 mt-5">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-12 col-sm-auto mb-3 mb-sm-0 mb-md-3 mb-lg-0">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="#" class="badge badge-light badge-sm badge-pill px-3 py-2">{{ $actualite->categorie_actualite->designation }}</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="text-2">{{ __("pages.share_post") }}</span>
                                        <ul class="social-icons social-icons-light social-icons-1 ml-3">
                                            <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-instagram"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </article>
                    <div class="row">
                        <div class="col">
                            <span class="top-sub-title">{{ __("pages.about_author") }}</span>
                            <div class="icon-box icon-box-style-1 align-items-center mt-3">
                                <div class="icon-box-icon">
                                    <img src="/profiles/ico.png" class="img-fluid rounded-circle mr-2" alt="" />
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h4 class="font-weight-bold line-height-1 mb-1">{{ $actualite->publication->user->prenom }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="font-weight-bold text-3 mb-4">{{ __("pages.related_post") }}</h2>
                        </div>
                        @foreach ($relatedactualites as $related)
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <a href="{{ route("actualite.single", $related) }}">
                                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/blog/posts/post-1-square.jpg'}">
                                        <div class="card-body p-4">
                                            <h3 class="font-weight-bold text-4 mb-1">{{ $related->publication->titre }}</h3>
                                            <p>
                                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                                <time class="font-tertiary text-1" datetime="2020-01-16">{{ date("Y-D-M", strtotime($related->created_at)) }}</time>
                                            </p>
                                            <p class="text-truncate" style="max-width: 250px">{{ $related->publication->texte }}</p>
                                            <p class="text-color-dark font-weight-semibold mb-0">
                                                <img src="/profiles/ico.png" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />
                                                {{ __("pages.by") }} {{ $related->publication->user->prenom }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
@endsection
