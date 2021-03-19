@extends("layouts.admin.app")
@section("content")
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">{{ __('pages.actualites') }}</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item ">
                        <a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="#">{{ __('pages.add') }}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{ __('pages.actualite') }}
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
                    <h4 class="card-title">{{ __('pages.add_actualite') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route("actualites.store") }}">
                            @csrf
                            <div class="form-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="first-title-floating" class="form-control champ" placeholder="{{ __('pages.title') }}"
                                                name="titre">
                                            <label for="first-title-floating">{{ __('pages.title') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <select name="categorie_id" id="categorie" class="custom-select">
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->designation }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <fieldset class="form-label-group mb-0">
                                            <textarea data-length=20 class="form-control char-textarea champ" id="textarea-counter" rows="5" name="contenu" placeholder="{{ __("pages.content") }}"></textarea>
                                            <label for="textarea-counter">{{ __('pages.content') }}</label>
                                        </fieldset>
                                        <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile"> {{ __("pages.pictures") }} <smal class="text-warning text-lowercase text-right" >  <em>{{ __("pages.required") }} *</em> </smal> </label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input champ" name="photos[]" id="inputGroupFile01" multiple>
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>
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
