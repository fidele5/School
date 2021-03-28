@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Actualités</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="{{ route('home-admin') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('actualites.index')}}">Actualités</a>
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
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title">{{ __('pages.edit_actualite') }}</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form" method="POST" action="{{ route("actualites.update", $actualite) }}">
                        @csrf
                        @method("patch")
                        <div class="form-body">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-title-floating">Titre</label>
                                        <input type="text" value="{{ $actualite->publication->titre}}" id="first-title-floating" class="form-control champ @error('titre') is-invalid @enderror" placeholder="Titre" name="titre">
                                        @error('titre')
                                            <small>{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Catégorie</label>
                                        <select name="categorie" id="categorie" class="custom-select @error('categorie') is-invalid @enderror">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}" @if($actualite->categorie_realisation_id == $categorie->id) selected="" @endif>{{ $categorie->designation }}</option>
                                            @endforeach
                                            @error('categorie')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group mb-0">
                                        <label for="textarea-counter">Contenu</label>
                                        <textarea data-length=20 class="form-control char-textarea champ @error('contenu') is-invalid @enderror" id="textarea-counter" rows="5" name="contenu" placeholder="Contenu de la réalisation">{{ $actualite->publication->texte}}</textarea>
                                        @error('contenu')
                                            <small class="text-light-danger">{{ $message }}</small>
                                        @enderror
                                    </fieldset>
                                    <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
                                </div>

                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Photo <small class="text-warning text-lowercase text-right" >  <em>{{ __("pages.required") }} *</em> </small> </label>
                                        <div class="custom-file">
                                            <input type="file" value="{{ $actualite->publication->photo }}" class="custom-file-input champ @error('photo') is-invalid @enderror" name="photo" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            @error('photo')
                                                <small class="text-light-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </fieldset>
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
