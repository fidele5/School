@extends("layouts.admin.app")
@section("content")
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Evenements</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item ">
                            <a href="{{ route('home-admin')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">
                            Evenements
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
                    <h4 class="card-title">Evenements</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Catégorie</th>
                                        <th>Début</th>
                                        <th>Fin</th>
                                        <th>Lieu</th>
                                        <th>Photo</th>
                                        <th>Action}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($evenements as $evenement)
                                        <tr>
                                            <td>{{ $evenement->publication->titre }}</td>
                                            <td class="text-truncate" style="max-width: 250px">{{ $evenement->publication->texte }}</td>
                                            <td>{{ $evenement->categorie_evenement->designation }}</td>
                                            <td>{{ $evenement->date_debut }}</td>
                                            <td>{{ $evenement->date_fin }}</td>
                                            <td>{{ $evenement->lieu }}</td>
                                            <td>{{ $evenement->photo }}</td>
                                            <td>
                                                <a href="{{ route("evenements.edit", $evenement) }}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <a class="delete" href="{{ route("evenements.destroy", $evenement) }}">
                                                    <i class="bx bx-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Catégorie</th>
                                        <th>Début</th>
                                        <th>Fin</th>
                                        <th>Lieu</th>
                                        <th>Photo</th>
                                        <th>Action}</th>
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
