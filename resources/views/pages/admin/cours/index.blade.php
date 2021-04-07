@extends("layouts.admin.app")
@section("content")
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Cours</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item ">
                            <a href="{{ route('home-admin')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">
                            Cours
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
                    <h4 class="card-title">Cours</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Intitulé</th>
                                        <th>Description</th>
                                        <th>Volume horaire</th>
                                        <th>Promotion</th>
                                        <th>Enseignant</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $key=>$course)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $course->intitule }}</td>
                                            <td class="text-truncate" style="max-width: 120px;">{{ $course->description }}</td>
                                            <td>{{ $course->volume_horaire }} heures</td>
                                            <td>{{ $course->promotion->nom }}</td>
                                            <th>{{ $course->enseignant->user->email }}</th>
                                            <td>
                                                <a href="{{ route("courses.edit", $course) }}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <a class="delete" href="{{ route("courses.destroy", $course) }}">
                                                    <i class="bx bx-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Intitulé</th>
                                        <th>Description</th>
                                        <th>Volume horaire</th>
                                        <th>Promotion</th>
                                        <th>Enseignant</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                         <div class="col-6">
                            <a href="{{ route('courses.export')}}" class="btn btn-secondary"><i class="fa fa-arrow-down"></i> Télécharger le modèle</a>
                        </div>
                        <form class="form col-6" method="POST" action="{{ route('courses.import')}}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-8">
                                    <input type="file" value="Fichier excel à uploader" id="file" name="file" accept="document/xlsx" class="form-control form-control-file @error('file') is-invalid @enderror" />
                                </div>

                                <div class="col-4">
                                    <button class="btn btn-primary mt-10" type="submit">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
