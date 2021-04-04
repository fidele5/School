@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Horaires</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="{{ route('home-admin') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('horaires.index') }}">Horaires</a>
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
                    <h4 class="card-title">Editer horaire</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("horaires.update", $horaire) }}" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-title-floating">Date de debut</label>
                                            <input type="date" value="{{ $horaire->debut }}" id="first-title-floating" class="form-control champ @error('debut') is-invalid @enderror" placeholder="Date de debut" name="debut">
                                            @error('debut')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-title-floating">Date de fin</label>
                                            <input type="date" value="{{ $horaire->fin }}" id="first-title-floating" class="form-control champ @error('fin') is-invalid @enderror" placeholder="Date de fin" name="fin">
                                            @error('fin')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mb-10">
                                        <div class="form-group">
                                            <label for="promotion">Promotion</label>
                                            <select name="promotion_id" id="promotion" class="custom-select @error('promotion_id') is-invalid @enderror">
                                                @foreach ($promotions as $promotion)
                                                    <option value="{{ $promotion->id }}" @if ($course->promotion_id == $promotion->id)
                                                        selected
                                                    @endif>{{ $promotion->nom }} {{ $promotion->filiere->nom }}</option>
                                                @endforeach
                                            </select>
                                            @error('promotion_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-group mb-0">
                                            <label for="textarea-counter">Description</label>
                                            <textarea data-length=20 class="form-control char-textarea champ @error('description') is-invalid @enderror" id="textarea-counter" rows="5" name="description" placeholder="Description">{{ $horaire->description }}</textarea>
                                            @error('descriptionu')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </fieldset>
                                        <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
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
