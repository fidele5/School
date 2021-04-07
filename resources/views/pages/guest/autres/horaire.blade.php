@extends("layouts.guest.app")
@section("content")
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="index.html">{{ __("pages.home") }}</a></li>
                                <li class="active">{{ __("pages.horaire") }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ __("pages.horaire") }}</h1>
                            <p class="lead">{{ __("pages.horaire_courses") }}</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container mb-5 pb-3">
                <div class="row">
                    <div class="col-md-12 mb-5 mb-md-0">
                        @if (count($cycles) > 0)
                        <ul class="nav nav-tabs nav-tabs-default" id="tabDefault" role="tablist">
                            @foreach ($cycles as $cycle)
                            <li class="nav-item">
                                <a class="nav-link {{ ($cycle->id == 1) ? "active" : "" }}" id="default-portfolio-tab" data-toggle="tab" href="#{{ $cycle->designation }}" role="tab" aria-controls="default-portfolio" aria-expanded="true">{{ $cycle->designation }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="tabDefaultContent">
                            @foreach ($cycles as $cycle)
                                <div class="tab-pane fade pt-4 pb-4" id="{{ $cycle->designation }}" role="tabpanel" aria-labelledby="default-process-tab">
                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                        @foreach ($cycle->filieres as $filiere)
                                            @foreach ($filiere->promotions as $promotion)
                                                <div class="card">
                                                    <div class="card-header accordion-header" role="tab" id="accordionMinimal{{ $promotion->id }}">
                                                        <h5 class="mb-0">
                                                            <a href="#" data-toggle="collapse" data-target="#accordionMinimalCollapse{{ $promotion->id }}" aria-expanded="false" aria-controls="accordionMinimalCollapse{{ $promotion->id }}">{{ $promotion->nom }} - {{ $filiere->nom }}</a>
                                                        </h5>
                                                    </div>
                                                    <div id="accordionMinimalCollapse{{ $promotion->id }}" class="collapse" role="tabpanel" aria-labelledby="accordionMinimal{{ $promotion->id }}" data-parent="#accordionMinimal">
                                                        <div class="card-body">
                                                            <table class="table table-responsive-sm">

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @else
                        <div class="alert alert-primary" role="alert">
                            Aucun contenu trouvé
                        </div>
                        @endif
                    </div>
                </div>
            </div>
@endsection
