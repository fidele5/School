@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">{{ __("pages.actualite") }}</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="#">{{ __("pages.edit") }}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{ __("pages.actualite") }}
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
                                    <div class="form-label-group">
                                        <input type="text" id="first-title-floating" class="form-control champ" placeholder="{{ __("pages.title") }}"
                                            name="titre" value="{{ $actualite->publication->titre }}">
                                        <label for="first-title-floating">{{ __("pages.title") }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-label-group">
                                        <select name="categorie_id" id="categorie" class="custom-select">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}"  {{ ($categorie->id == $actualite->categorie_id)?"selected":"" }} >{{ $categorie->designation }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-label-group mb-0">
                                        <textarea data-length=500 class="form-control char-textarea champ" id="textarea-counter" rows="5" name="texte" placeholder="{{ __("pages.content") }}">{{ $actualite->publication->texte }}</textarea>
                                        <label for="textarea-counter">{{ __("pages.content") }}</label>
                                    </fieldset>
                                    <small class="counter-value float-right"><span class="char-count">0</span> / 500 </small>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">{{ __("pages.submit") }}</button>
                                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">{{ __("pages.reset") }}</button>
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
