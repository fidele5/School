@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Promotions</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('promotions.index')}}">Promotions</a>
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
                    <h4 class="card-title">Nouvelle promotion</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("promotions.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-title-floating">Nom</label>
                                            <input type="text" value="{{ old('nom') }}" id="first-title-floating" class="form-control champ @error('nom') is-invalid @enderror" placeholder="Nom de la filière" name="nom">
                                            @error('nom')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="filiere">Filière</label>
                                            <select name="filiere" id="filiere" class="custom-select @error('filiere') is-invalid @enderror">
                                                @foreach ($filieres as $filiere)
                                                    <option value="{{ $filiere->id }}" @if (old('filiere') == $filiere->id)
                                                        selected
                                                    @endif>{{ $filiere->nom }}</option>
                                                @endforeach
                                            </select>
                                            @error('categorie')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
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
