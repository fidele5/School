@extends("layouts.admin.app")
@section("content")
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Enseignants</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item ">
                            <a href="{{ route('home-admin')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">
                            Enseignants
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
                    <h4 class="card-title">Enseignants</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>Post nom</th>
                                        <th>Prenom</th>
                                        <th>Genre</th>
                                        <th>Nationalité</th>
                                        <th>Domaine</th>
                                        <th>Grade</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enseignants as $key=>$enseignant)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $enseignant->user->nom }}</td>
                                            <td>{{ $enseignant->user->postnom }}</td>
                                            <td>{{ $enseignant->user->prenom }}</td>
                                            <td>{{ $enseignant->user->genre }}</td>
                                            <th>{{ $enseignant->user->nationalite }}</th>
                                            <td>{{ $enseignant->domaine }}</td>
                                            <td>{{ $enseignant->grade }}</td>
                                            <td>{{ $enseignant->user->email}}</td>
                                            <td>{{ $enseignant->user->telephone }}</td>
                                            <td>
                                                <a href="{{ route("enseignants.edit", $enseignant) }}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <a href="{{ route("enseignants.destroy", $enesignant) }}">
                                                    <i class="bx bx-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>Post nom</th>
                                        <th>Prenom</th>
                                        <th>Genre</th>
                                        <th>Nationalité</th>
                                        <th>Domaine</th>
                                        <th>Grade</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
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
