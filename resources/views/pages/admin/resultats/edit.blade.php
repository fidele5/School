@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Resultats</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('resultats.index')}}">Resultats</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Editer
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- // Basic Floating Label Form section start -->
<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title">Editer un résultat</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("resultats.update", $resultat) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="etudiant">Etudiant</label>
                                <select name="etudiant_id" id="etudiant" class="custom-select @error('etudiant_id') is-invalid @enderror">
                                    @foreach ($etudiants as $etudiant)
                                        <option value="{{ $etudiant->id }}" @if ($resultat->etudiant_id == $etudiant->id)
                                            selected=""
                                        @endif>{{ $etudiant->matricule }} - {{$etudiant->user->nom}} {{$etudiant->user->postnom}} {{$etudiant->user->prenom}}</option>
                                    @endforeach
                                </select>
                                @error('etudiant_id')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cours">Cours</label>
                                <select name="cours_id" id="cours" class="custom-select @error('cours_id') is-invalid @enderror">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" @if ($resultat->cours_id == $course->id)
                                            selected=""
                                        @endif>{{ $course->intitule }}</option>
                                    @endforeach
                                </select>
                                @error('cours_id')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="moyenne">Moyenne</label>
                                <input type="number" class="form-control @error('moyenne') is-invalid @enderror" name="moyenne" id="moyenne" value="{{ $resultat->moyenne }}" placeholder="Email" />
                                @error('moyenne')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="nationalite">Examen</label>
                                <input type="number" name="examen" class="form-control @error('examen') is-invalid @enderror" id="examen" placeholder="Examen" value="{{ $resultat->examen }}" />
                                @error('examen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Mettre à jour</button>
                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Annuler</button>
                            </div>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection
