@extends("layouts.admin.app")
@section("content")
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Séances</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item ">
                            <a href="{{ route('home-admin')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">
                            Seances
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
                    <h4 class="card-title">Seances</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table row-grouping">
                                <thead>
                                    <tr>
                                        <th>Heure début</th>
                                        <th>Heure fin</th>
                                        <th class="group">Horaire</th>
                                        <th>Cours</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seances as $seance)
                                        <tr>
                                            <td>{{ $seance->heure_debut }}</td>
                                            <td >{{ $seance->heure_fin }}</td>
                                            <td>{{ $seance->horaire->promotion->nom }} {{$seance->horaire->promotion->filiere->nom}} : Du {{ $seance->horaire->debut}} au {{$seance->horaire->fin}}</td>
                                            <td >{{ $seance->cours->intitule }}</td>
                                            <td>
                                                <a href="{{ route("seances.edit", $seance) }}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <a class="delete" href="{{ route("seances.destroy", $seance) }}">
                                                    <i class="bx bx-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Heure début</th>
                                        <th>Heure fin</th>
                                        <th>Horaire</th>
                                        <th>Cours</th>
                                        <th>Actions</th>
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
