@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Enseignants</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('filieres.create')}}">Enseignants</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Nouveau
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
                    <h4 class="card-title">Nouvel enseignant</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("enseignants.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-50">
                                  <label for="inputfirstname4">Nom</label>
                                  <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="inputfirstname4" value="{{ old('nom') }}" placeholder="Nom" />
                                  @error('nom')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-50">
                                    <label for="inputfirstname4">Postnom</label>
                                    <input type="text" class="form-control @error('postnom') is-invalid @enderror" name="postnom" id="inputfirstname4" value="{{ old('postnom') }}" placeholder="Post nom" />
                                    @error('postnom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-50">
                                    <label for="inputfirstname4">Prenom</label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="inputfirstname4" value="{{ old('prenom') }}" placeholder="Prenom" />
                                    @error('prenom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="d-block">Genre</label>
                                    <div class="custom-control-inline">
                                        <div class="radio mr-1">
                                            <input type="radio" name="genre" id="radio5" value="M" checked/>
                                            <label for="radio5">Homme</label>
                                        </div>

                                        <div class="radio">
                                            <input type="radio" name="genre" id="radio888" value="F" />
                                            <label for="radio888">Femme</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="email">Adresse email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="nationalite">Nationalité</label>
                                <input type="text" name="nationalite" class="form-control @error('nationalite') is-invalid @enderror" id="nationalite" placeholder="Nationalité" value="{{ old('nationalite') }}" />
                                @error('nationalite')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="grade">Grade</label>
                                <input type="text" name="grade" class="form-control @error('grade') is-invalid @enderror" id="grade" placeholder="Grade" value="{{ old('grade') }}" />
                                @error('grade')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="domaine">Domaine</label>
                                <input type="text" name="domaine" class="form-control @error('domainet') is-invalid @enderror" id="domaine" placeholder="Domaine" value="{{ old('domaine') }}" />
                                @error('domaine')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="telephone">Telephone</label>
                                <input type="phone" name="telephone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Telephone" value="{{ old('telephone') }}" />
                                @error('telephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="text-bold-600" for="adresse">Adresse physique</label>
                                <textarea name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" placeholder="Adresse physique">{{ old('adresse') }}</textarea>
                                @error('adresse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Enregistrer</button>
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
