@extends("layouts.guest.app")
@section("content")
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="index.html">{{ __("pages.home") }}</a></li>
                                <li class="active">{{ __("pages.courses") }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ __("pages.courses") }}</h1>
                            <p class="lead">{{ __("pages.all_courses") }}</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container mb-5 pb-3">
                <div class="row">
                    <div class="col-md-12 mb-5 mb-md-0">
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
                                                    <div class="card-header accordion-header" role="tab" id="accordionMinimal{{ $filiere->id }}">
                                                        <h5 class="mb-0">
                                                            <a href="#" data-toggle="collapse" data-target="#accordionMinimalCollapse{{ $filiere->id }}" aria-expanded="false" aria-controls="accordionMinimalCollapse{{ $filiere->id }}">{{ $promotion->nom }} - {{ $filiere->nom }}</a>
                                                        </h5>
                                                    </div>
                                                    <div id="accordionMinimalCollapse{{ $filiere->id }}" class="collapse show" role="tabpanel" aria-labelledby="accordionMinimal{{ $filiere->id }}" data-parent="#accordionMinimal">
                                                        <div class="card-body">
                                                            <table class="table table-responsive-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>{{ __("pages.intitule") }}</th>
                                                                        <th>{{ __("pages.description") }}</th>
                                                                        <th>{{ __("pages.ponderation") }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($promotion->cours as $cour)
                                                                        <tr>
                                                                            <th scope="row">{{ $cour->id }}</th>
                                                                            <td>{{ $cour->intitule }}</td>
                                                                            <td>{{ $cour->description }}</td>
                                                                            <td>{{ $cour->ponderation }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                    
                                                                </tbody>
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
                    </div>
                </div>
            </div>
@endsection
