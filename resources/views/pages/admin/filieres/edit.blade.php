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
                    <h4 class="card-title">Editer une filière</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("filieres.update", $filiere) }}" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="form-group col-12">
                                        <label for="first-title-floating">Nom</label>
                                        <input type="text" value="{{ $filiere->nom }}" id="first-title-floating" class="form-control champ @error('nom') is-invalid @enderror" placeholder="Nom de la filière" name="nom">
                                        @error('nom')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control champ @error('description') is-invalid @enderror" placeholder="Description de la filière" name="description">{{ $filiere->description}}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="cycle_id">Cycle</label>
                                        <select name="cycle_id" id="cycle_id" class="custom-select @error('cycle_id') is-invalid @enderror">
                                            @foreach ($cycles as $cycle)
                                                <option value="{{ $cycle->id }}" @if ($filiere->cycle_id == $cycle->id)
                                                    selected
                                                @endif>{{ $cycle->designation }}</option>
                                            @endforeach
                                        </select>
                                        @error('cycle_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control champ @error('image') is-invalid @enderror" placeholder="Image de la filière" name="image" value="{{ $filiere->image }}" />
                                        @error('image')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
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
