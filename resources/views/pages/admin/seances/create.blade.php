@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Seances</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="{{ route('home-admin') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('seances.index') }}">Seances</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Nouvelle
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
                    <h4 class="card-title">Nouvelle séance</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        @if (isset($heure_debut))
                        <p>{{ $heure_debut }}</p>
                        @elseif (isset($heure_fin))
                        <p>{{ $heure_fin}}</p>
                        @elseif (isset($cours))
                        <p>{{ $cours }}</p>
                        @endif
                        
                        <form class="form" method="POST" action="{{ route("seances.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-title-floating">Heure de début</label>
                                            <input type="datetime-local" value="{{ old('heure_debut')}}" id="first-title-floating" class="form-control champ @error('heure_debut') is-invalid @enderror" placeholder="Heure de debut" name="heure_debut">
                                            @error('heure_debut')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            @if (isset($heure_debut))}
                                                <small class="text-danger">{{ $heure_debut }}</small>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-title-floating">Heure de fin</label>
                                            <input type="datetime-local" value="{{ old('heure_fin')}}" id="first-title-floating" class="form-control champ @error('heure_fin') is-invalid @enderror" placeholder="Heure de fin" name="heure_fin">
                                            @error('heure_fin')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            @if (isset($heure_fin))
                                                <small class="text-danger">{{ $heure_fin }}</small>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Cours</label>
                                            <select name="cours_id" id="cours" class="custom-select @error('cours_id') is-invalid @enderror">
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}" @if(old('cours_id') == $course->id) selected="" @endif>{{ $course->intitule }}</option>
                                                @endforeach
                                                @error('cours_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                @if (isset($cours))
                                                    <small class="text-danger">{{ $cours }}</small>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Horaire</label>
                                            <select name="horaire_id" id="horaire" class="custom-select @error('horaire_id') is-invalid @enderror">
                                                @foreach ($horaires as $horaire)
                                                    <option value="{{ $horaire->id }}" @if(old('horaire_id') == $horaire->id) selected="" @endif>{{ $horaire->promotion->nom }} {{ $horaire->promotion->filiere->nom }} : Du {{ $horaire->debut }} au {{ $horaire->fin }}</option>
                                                @endforeach
                                                @error('promotion_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-group mb-0">
                                            <label for="textarea-counter">Description</label>
                                            <textarea data-length=20 class="form-control char-textarea champ @error('description') is-invalid @enderror" id="textarea-counter" rows="5" name="description" placeholder="Description">{{ old('description')}}</textarea>
                                            @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </fieldset>
                                        <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
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
