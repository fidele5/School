@extends("layouts.guest.app")
@section("content")
            <section class="page-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-left">
                            <h1 class="font-weight-bold">{{ __("pages.calendar") }}</h1>
                            <p class="lead">{{ __("pages.event_calendar") }}</p>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                                <li><a href="index.html">{{ __("home") }}</a></li>
                                <li class="active">{{ __("pages.calendar") }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
           
            <div class="container mb-4" >
                <div id="calendar"></div>
            </div>
               
@endsection
