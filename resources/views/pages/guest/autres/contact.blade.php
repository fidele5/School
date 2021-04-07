@extends("layouts.guest.app")
@section("content")
        <section class="page-header mb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-left">
                            <h1 class="font-weight-bold">{{ __("pages.contact") }}</h1>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                                <li><a href="#">{{ __("pages.home") }}</a></li>
                                <li class="active">{{ __("pages.contact") }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div id="googlemaps" class="google-map"></div>
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col">
                            <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">{{ __("pages.get_in_touch") }}</h2>
                            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">{{ __("pages.more_infos") }}</p>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                                    <div class="icon-box icon-box-style-1">
                                        <div class="icon-box-icon">
                                            <i class="lnr lnr-apartment text-color-primary"></i>
                                        </div>
                                        <div class="icon-box-info mt-1">
                                            <div class="icon-box-info-title">
                                                <h3 class="font-weight-bold text-4 mb-0">{{ __("pages.address") }}</h3>
                                            </div>
                                            <p>1234 Street Name, City Name, USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                                    <div class="icon-box icon-box-style-1">
                                        <div class="icon-box-icon icon-box-icon-no-top">
                                            <i class="lnr lnr-envelope text-color-primary"></i>
                                        </div>
                                        <div class="icon-box-info mt-1">
                                            <div class="icon-box-info-title">
                                                <h3 class="font-weight-bold text-4 mb-0">{{ __("pages.email") }}</h3>
                                            </div>
                                            <p><a href="https://www.okler.net/cdn-cgi/l/email-protection#621b0d1722060d0f030b0c4c010d0f"><span class="__cf_email__" data-cfemail="a7dec8d2e7c3c8cac6cec989c4c8ca">[email&#160;protected]</span></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    <div class="icon-box icon-box-style-1">
                                        <div class="icon-box-icon">
                                            <i class="lnr lnr-phone-handset text-color-primary"></i>
                                        </div>
                                        <div class="icon-box-info mt-1">
                                            <div class="icon-box-info-title">
                                                <h3 class="font-weight-bold text-4 mb-0">{{ __("pages.phone_number") }}</h3>
                                            </div>
                                            <p><a href="tel:+1234567890">(123) 456-7890</a> - <a href="tel:+1234567890">(123) 456-7890</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 appear-animation" data-appear-animation="fadeInRightShorter">
                            <form class="contact-form form-style-2" action="{{ route("email") }}" method="POST">
                                @csrf
                                <div class="contact-form-success alert alert-success d-none">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>
                                <div class="contact-form-error alert alert-danger d-none">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message d-block"></span>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="{{ __("pages.name") }}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="{{ __("pages.email") }}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="{{ __("pages.subject") }}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="{{ __("pages.message") }}" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <input type="submit" value="{{ __("pages.send_messsage") }}" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
@endsection
