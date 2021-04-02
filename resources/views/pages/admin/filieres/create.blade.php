@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Filières</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('filieres.create')}}">Filières</a>
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
                    <h4 class="card-title">Nouvelle filière</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("filieres.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-title-floating">Nom</label>
                                            <input type="text" value="{{ old('nom')}}" id="first-title-floating" class="form-control champ @error('nom') is-invalid @enderror" placeholder="Nom de la filière" name="nom">
                                            @error('nom')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control champ @error('description') is-invalid @enderror" placeholder="Description de la filière" name="description">{{ old('description')}}</textarea>
                                            @error('description')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="categorie">Cycle</label>
                                            <select name="cycle_id" id="cycle" class="custom-select @error('cycle') is-invalid @enderror">
                                                @foreach ($cycles as $cycle)
                                                    <option value="{{ $cycle->id }}" @if (old('cycle_id') == $cycle->id)
                                                        selected
                                                    @endif>{{ $cycle->designation }}</option>
                                                @endforeach
                                            </select>
                                            @error('cycle_id')
                                                <small class="text-light-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control champ @error('image') is-invalid @enderror" placeholder="Image de la filière" name="image" value="{{ old('image')}}" />
                                            @error('image')
                                                <small class="text-danger">{{$message}}</small>
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
