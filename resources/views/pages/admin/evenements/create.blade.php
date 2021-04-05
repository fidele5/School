@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Evenements</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="{{ route("home-admin")}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route("evenements.index")}}">Evenements</a>
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
                <div class="card-header">
                    <h4 class="card-title">Nouvel évenement</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("evenements.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="titre">Titre</label>
                                            <input type="text" id="titre" value="{{ old('titre') }}" class="form-control champ @error('titre') is-invalid @enderror" placeholder="Titre" name="titre">
                                            @error('titre')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="categorie">Catégorie</label>
                                            <select name="categorie" id="categorie" class="custom-select @error('categorie') is-invalid @enderror">
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}" @if (old('categorie') == $categorie->id)
                                                        selected
                                                    @endif>{{ $categorie->designation }}</option>
                                                @endforeach
                                            </select>
                                            @error('categorie')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-group mb-10">
                                            <label for="textarea-counter">Contenu</label>
                                            <textarea data-length=20 class="form-control char-textarea champ @error('contenu') is-invalid @enderror" id="textarea-counter" rows="5" name="contenu" placeholder="Contenu">{{ old('contenu') }}</textarea>
                                            @error('contenu')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </fieldset>
                                        <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="lieu">Lieu</label>
                                            <input type="text" name="lieu" id="lieu" placeholder="Lieu de l'évenement" class="form-control champs @error('lieu') is-invalid @enderror" value="{{ old('lieu') }}" />
                                            @error('lieu')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="debut">Début</label>
                                            <input type="datetime-local" value="{{ old('debut') }}" name="debut" id="debut" placeholder="Début de l'évenement" class="form-control champs @error('debut') is-invalid @enderror" />
                                            @error('debut')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="fin">Fin</label>
                                            <input type="datetime-local" name="fin" id="fin" value="{{ old('fin')}}" placeholder="Fin de l'évenement" class="form-control champs @error('fin') is-invalid @enderror" />
                                            @error('fin')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label for="photo"> Photo <small class="text-warning text-lowercase text-right" >  <em>{{ __("pages.required") }} *</em> </small> </label>
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="photo">Choose file</label>
                                                <input type="file" value="{{ old('photo')}}" class="custom-file-input champ @error('photo') is-invalid @enderror" name="photo" id="photo">
                                                @error('photo')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </fieldset>
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
