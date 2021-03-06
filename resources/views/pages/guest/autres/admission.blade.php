@extends("layouts.guest.app")
@section("content")
        <section class="page-header mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="index.html">{{ __("pages.home") }}</a></li>
                                <li class="active">{{ __("pages.register") }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="font-weight-bold">{{ __("pages.register") }}</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container container-lg-custom">
                    <div class="row">
                        <div class="col">
                            
                            <div class="alert alert-primary msg" style="display: none" role="alert">
                                <strong>Perfecto ! votre instription a été acceptée avec succès </strong> <a href="" class="alert-link">Telecharger la fiche</a>
                            </div>
                            
                            <form id="shopCheckout" action="{{ route("saveStudent") }}" method="post">
                                @csrf
                                <div class="row mb-5">
                                    <div class="col-md-6 mb-5 mb-md-0">
                                        <h2 class="font-weight-bold mb-3">{{ __("pages.identity") }}</h2>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="text-color-dark font-weight-semibold" for="billing_name">{{ __("pages.name") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre nom" maxlength="20" minlength="4"  class="form-control champ line-height-1 bg-light-5" name="nom" id="billing_name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-color-dark font-weight-semibold" for="billing_last_name">{{ __("pages.post_name") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre postnom" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="postnom" id="billing_last_name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="billing_company">{{ __("pages.nick_name") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre prenom" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="prenom" id="billing_company" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="billing_address">{{ __("pages.address") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre adresse" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="adresse" id="billing_address" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="billing_country">{{ __("pages.nationality") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre nationalite" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="nationalite" id="billing_country" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="billing_city">{{ __("pages.gender") }}:</label>
                                                <select class="form-control champ line-height-1 bg-light-5" name="genre" id="billing_city">
                                                    <option value="homme">{{ __("pages.man") }}</option>
                                                    <option value="femme">{{ __("pages.woman") }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="text-color-dark font-weight-semibold" for="billing_email">{{ __("pages.email") }}:</label>
                                                <input type="email" value="" data-msg-required="Entrer votre email" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="email" id="billing_email" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-color-dark font-weight-semibold" for="billing_phone">{{ __("pages.phone_number") }}:</label>
                                                <input type="tel" value="" data-msg-required="Entrer votre numero de telephone" maxlength="12" minlength="10" class="form-control champ line-height-1 bg-light-5" name="telephone" id="billing_phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="billing_city">{{ __("pages.promotions") }}:</label>
                                                <select class="form-control champ line-height-1 bg-light-5" name="promotion_id" id="billing_city">
                                                    @foreach($filieres as $filiere)
                                                       <optgroup label="{{ $filiere->nom }}">
                                                        @foreach($filiere->promotions as $promotion)
                                                            <option value="{{ $promotion->id }}">{{ $promotion->nom }} - {{ $filiere->nom }}</option>
                                                        @endforeach
                                                        <optgroup>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="text-color-dark font-weight-semibold" for="shipping_city">{{ __("pages.birth_place") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre lieu de naissance" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="lieu_naissance" id="shipping_city" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="text-color-dark font-weight-semibold" for="shipping_birth_date">{{ __("pages.birth_date") }}:</label>
                                                <input type="date" value="" data-msg-required="Entrer votre date de naissance" class="form-control champ line-height-1 bg-light-5" name="date_naissance" id="shipping_birth_date" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="shipping_company">{{ __("pages.comming_school") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre école de provenance" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="ecole_provenance" id="shipping_company" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="shipping_address">{{ __("pages.percentage") }}:</label>
                                                <input type="number" value="" data-msg-required="Entrer votre pourcentage" min="50" max="99" maxlength="2" minlength="2" class="form-control champ line-height-1 bg-light-5" name="pourcentage" id="shipping_address" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="shipping_option">{{ __("pages.option_laureat") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre option lauréat" maxlength="20" minlength="4" class="form-control champ line-height-1 bg-light-5" name="option_laureat" id="shipping_option" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="text-color-dark font-weight-semibold" for="shipping_year">{{ __("pages.year_laureat") }}:</label>
                                                <input type="text" value="" data-msg-required="Entrer votre année laureat" maxlength="4" minlength="4" class="form-control champ line-height-1 bg-light-5" name="annee_laureat" id="shipping_year" placeholder="ex : 2019-2020" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3" type="submit">{{ __("pages.submit") }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
@endsection
