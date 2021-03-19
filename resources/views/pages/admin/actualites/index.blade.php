@extends("layouts.admin.app")
@section("content")
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ __("pages.actualites") }}</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item ">
                            <a href="index.html"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ __("pages.actualites") }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __("pages.actualites") }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <a id="addRow" href="{{ route("actualites.create") }}" class="btn btn-primary mb-2 align-items-center">
                            <i class="bx bx-plus"></i>&nbsp; {{ __("pages.add") }}
                        </a>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>{{ __("pages.title") }}</th>
                                        <th>{{ __("pages.content") }}</th>
                                        <th>{{ __("pages.comments") }}</th>
                                        <th>{{ __("pages.category") }}</th>
                                        <th>{{ __("pages.actions") }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actualites as $actualite)
                                        <tr>
                                            <td>{{ $actualite->publication->titre }}</td>
                                            <td class="text-truncate" style="max-width: 250px">{{ $actualite->publication->texte }}</td>
                                            <td>0</td>
                                            <td>{{ $actualite->categorie->designation }}</td>
                                            <td>
                                                <a href="{{ route("actualites.edit", $actualite) }}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <a href="{{ route("actualites.destroy", $actualite) }}">
                                                    <i class="bx bx-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{ __("pages.title") }}</th>
                                        <th>{{ __("pages.content") }}</th>
                                        <th>{{ __("pages.comments") }}</th>
                                        <th>{{ __("pages.category") }}</th>
                                        <th>{{ __("pages.actions") }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
