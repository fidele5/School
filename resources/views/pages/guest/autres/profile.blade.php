@extends("layouts.admin.app")
@section("content")
<div class="content-body">
	<!-- page user profile start -->
    <section class="page-user-profile">
        <div class="row">
            <div class="col-12">
                <!-- user profile heading section start -->
                <div class="card">
                    <div class="card-content">
                        <div class="user-profile-images">
                            <img src="/backend/images/profile/post-media/profile-banner.jpg" class="img-fluid rounded-top user-timeline-image" alt="user timeline image">
                            <img src="/profiles/ico.png" class="user-profile-image rounded" alt="user profile image" height="140" width="140">
                        </div>
                        <div class="user-profile-text">
                            <h4 class="mb-0 text-bold-500 profile-text-color">{{ Auth::user()->prenom }}</h4>
                            <small>{{ Auth::user()->role }}</small>
                        </div>
                        <div class="card-body px-0">
                            <ul
                            class="nav user-profile-nav justify-content-center justify-content-md-start nav-tabs border-bottom-0 mb-0"
                            role="tablist">
                                <li class="nav-item pb-0">
                                    <a class="nav-link d-flex px-1" id="profile-tab" data-toggle="tab" href="#profile"
                                    aria-controls="profile" role="tab" aria-selected="true"><i class="bx bx-copy-alt"></i><span
                                        class="d-none d-md-block">Profile</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="feed" aria-labelledby="feed-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-1">Info
                                                        <i class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                                    </h5>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex align-items-center mb-25">
                                                            <i class="bx bx-receipt mr-50 cursor-pointer"></i> <span>{{ Auth::user()->name }}</span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-25">
                                                            <i class="bx bx-envelope mr-50 cursor-pointer"></i><span>{{ Auth::user()->email }}</span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-25">
                                                            <i class="bx bx-phone mr-50 cursor-pointer"></i> <span>{{ Auth::user()->telephone }}</span>
                                                        </li>

                                                        <li class="d-flex align-items-center mb-25">
                                                            <i class="bx bx-flag mr-50 cursor-pointer"></i><span>{{ Auth::user()->nationalite }}</span>
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <i class="bx bx-calendar-check mr-50 cursor-pointer"></i> <span>{{ Auth::user()->created_at }}</span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-25">
                                                            <i class="bx bx-receipt mr-50 cursor-pointer"></i> <span>{{ count(Auth::user()->publications) }} publications</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                         <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-1">
                                                        {{ __("pages.edit_profile") }}
                                                    </h5>
                                                    <div class="row">
                                                        <form class="form-horizontal" method="POST" action="{{-- route("users.update",Auth::user()) --}}">
                                                            @csrf
                                                            @method("patch")
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label>{{ __("pages.name") }}</label>
                                                                    </div>
                                                                    <div class="col-md-8 form-group ">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="text" id="fname-icon" class="form-control" name="name" placeholder="{{ __("pages.name") }}" value="{{ Auth::user()->name }}">
                                                                            <div class="form-control-position">
                                                                                <i class="bx bx-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>{{ __("pages.email") }}</label>
                                                                    </div>
                                                                    <div class="col-md-8 form-group">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="email" id="email-icon" class="form-control" name="email" placeholder="{{ __("pages.email") }}" value="{{ Auth::user()->email }}">
                                                                            <div class="form-control-position">
                                                                                <i class="bx bx-mail-send"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>{{ __("pages.phone_number") }}</label>
                                                                    </div>
                                                                    <div class="col-md-8 form-group">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="number" id="contact-icon" class="form-control" name="telephone" value="{{ Auth::user()->telephone }}" placeholder="{{ __("pages.phone_number") }}">
                                                                            <div class="form-control-position">
                                                                                <i class="bx bx-mobile"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>{{ __("pages.password") }}</label>
                                                                    </div>
                                                                    <div class="col-md-8 form-group">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="password" id="pass-icon" class="form-control" name="password" placeholder="{{ __("pages.password") }}">
                                                                            <div class="form-control-position">
                                                                                <i class="bx bx-lock"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 d-flex justify-content-end ">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
