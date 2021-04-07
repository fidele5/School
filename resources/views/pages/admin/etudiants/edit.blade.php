@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Etudiant</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('filieres.create')}}">Etudiant</a>
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
                    <h4 class="card-title">Editer étudiant</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("etudiants.update", $etudiant) }}">
                            @csrf
                            @method("patch")
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-50">
                                  <label for="inputfirstname4">Nom</label>
                                  <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="inputfirstname4" value="{{ $etudiant->user->nom }}" placeholder="Nom" />
                                  @error('nom')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-50">
                                    <label for="inputfirstname4">Postnom</label>
                                    <input type="text" class="form-control @error('postnom') is-invalid @enderror" name="postnom" id="inputfirstname4" value="{{ $etudiant->user->postnom }}" placeholder="Post nom" />
                                    @error('postnom')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-50">
                                    <label for="inputfirstname4">Prenom</label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="inputfirstname4" value="{{ $etudiant->user->prenom }}" placeholder="Nom" />
                                    @error('prenom')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="d-block">Genre</label>
                                    <div class="custom-control-inline">
                                        <div class="radio mr-1">
                                            <input type="radio" name="genre" id="radio5" value="M" @if($etudiant->user->genre == 'M') checked="" @endif />
                                            <label for="radio5">Homme</label>
                                        </div>

                                        <div class="radio">
                                            <input type="radio" name="genre" id="radio888" value="F" @if($etudiant->user->genre == 'F' ) checked="" @endif />
                                            <label for="radio888">Femme</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="email">Adresse email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $etudiant->user->email  }}" placeholder="Email" />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="nationalite">Nationalité</label>
                                <input type="text" name="nationalite" class="form-control @error('nationalite') is-invalid @enderror" id="nationalite" placeholder="Nationalité" value="{{ $etudiant->user->nationalite }}" />
                                @error('nationalite')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="lieu_naissance">Lieu de naissance</label>
                                <input type="text" name="lieu_naissance" class="form-control @error('lieu_naissance') is-invalid @enderror" id="lieu_naissance" placeholder="Lieu de naissance" value="{{ $etudiant->lieu_naissance }}" />
                                @error('lieu_naissance')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="date_naissance">Date de naissance</label>
                                <input type="date" name="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" id="date_naissance" placeholder="Date de naissance" value="{{ $etudiant->date_naissance }}" />
                                @error('date_naissance')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="lieu_naissance">Pourcentage</label>
                                <input type="number" name="pourcentage" min="50" max="100" class="form-control @error('pourcentage') is-invalid @enderror" id="pourcentage" placeholder="Pourcentage" value="{{ $etudiant->pourcentage }}" />
                                @error('pourcentage')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="lieu_naissance">Matricule</label>
                                <input type="text" name="matricule" class="form-control @error('matricule') is-invalid @enderror" id="matricule" placeholder="Matricule" value="{{ $etudiant->matricule }}" />
                                @error('matricule')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="ecole_provenance">Ecole de provenance</label>
                                <input type="text" name="ecole_provenance" class="form-control @error('ecole_provenance') is-invalid @enderror" id="ecole_provenance" placeholder="Ecole de provenance" value="{{ $etudiant->ecole_provenance }}" />
                                @error('ecole_provenance')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="lieu_naissance">Option lauréat</label>
                                <input type="text" name="option_laureat" class="form-control @error('option_laureat') is-invalid @enderror" id="option_laureat" placeholder="Option lauréat" value="{{ $etudiant->option_laureat }}" />
                                @error('option_laureat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="lieu_naissance">Année lauréat</label>
                                <input type="text" name="annee_laureat" class="form-control @error('annee_laureat') is-invalid @enderror" id="annee_laureat" placeholder="Année lauréat" value="{{ $etudiant->annee_laureat }}" />
                                @error('annee_laureat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="promotion">Promotion</label>
                                <select name="promotion" id="promotion" class="custom-select @error('promotion') is-invalid @enderror">
                                    @foreach ($promotions as $promotion)
                                        <option value="{{ $promotion->id }}" @if ($etudiant->promotion->id == $promotion->id)
                                            selected=""
                                        @endif>{{ $promotion->nom }}</option>
                                    @endforeach
                                </select>
                                @error('promotion')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="telephone">Telephone</label>
                                <input type="phone" name="telephone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Telephone" value="{{ $etudiant->user->telephone }}" />
                                @error('telephone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="adresse">Adresse physique</label>
                                <textarea name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" placeholder="Adresse physique">{{ $etudiant->user->adresse }}</textarea>
                                @error('adresse')
                                    <small class="text-danger">{{ $message }}</small>
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
