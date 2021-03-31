@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Cours</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="{{ route('courses.index')}}">Cours</a>
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
                    <h4 class="card-title">Editer cours</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form row" method="POST" action="{{ route("courses.update", $course)}}">
                            @csrf
                            @method("patch")
                            <div class="col-12">
                                <div class="form-group mb-10">
                                  <label for="intitule">Inititulé</label>
                                  <input type="text" class="form-control @error('intitule') is-invalid @enderror" name="intitule" id="intitule" value="{{ $course->intitule }}" placeholder="Intitulé" />
                                  @error('intitule')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group mb-10">
                                    <label for="volume_horaire">Volume horaire</label>
                                    <input type="text" class="form-control @error('volume_horaire') is-invalid @enderror" name="volume_horaire" id="volume_horaire" value="{{ $course->volume_horaire }}" placeholder="Volume horaire" />
                                    @error('volume_horaire')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 mb-10">
                                <div class="form-group">
                                    <label for="promotion">Promotion</label>
                                    <select name="promotion" id="promotion" class="custom-select @error('promotion') is-invalid @enderror">
                                        @foreach ($promotions as $promotion)
                                            <option value="{{ $promotion->id }}" @if ($course->promotion_id == $promotion->id)
                                                selected
                                            @endif>{{ $promotion->nom }} {{ $promotion->filiere->nom }}</option>
                                        @endforeach
                                    </select>
                                    @error('promotion')
                                        <small class="text-light-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mb-10">
                                <div class="form-group">
                                    <label for="enseignant">Enseignant</label>
                                    <select name="enseignant" id="enseignant" class="custom-select @error('enseignant') is-invalid @enderror">
                                        @foreach ($enseignants as $enseignant)
                                            <option value="{{ $enseignant->id }}" @if ($course->enseignant_id == $enseignant->id)
                                                selected
                                            @endif>{{ $enseignant->user->email }}</option>
                                        @endforeach
                                    </select>
                                    @error('enseignant')
                                        <small class="text-light-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <fieldset class="form-group">
                                    <label for="textarea-counter">Description</label>
                                    <textarea data-length=20 class="form-control char-textarea champ  @error('description') is-invalid @enderror" id="textarea-counter" rows="5" name="description" placeholder="Description">{{ $course->description }}</textarea>
                                    @error('description')
                                        <small class="text-light-danger">{{ $message }}</small>
                                    @enderror
                                </fieldset>
                                <small class="counter-value float-right mb-10"><span class="char-count">0</span> / 20 </small>
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
