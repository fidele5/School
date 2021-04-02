        <footer id="footer" class="footer-hover-links-light mt-0" data-plugin-image-background data-plugin-options="{'imageUrl': '/img/footer/background-1.png', 'bgPosition': 'center 100%'}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 align-self-center text-center mb-5 mb-lg-0">
                        <a href="index.html" class="logo">
                            <img src="/uploads/marie.png" class="img-fluid mb-lg-5" alt="EZY Website Template">
                        </a>
                    </div>
                    <div class="col-lg-3 text-center text-lg-left mb-5 mb-lg-0">
                        <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ __("pages.get_in_touch") }}</h4>
                        <ul class="list list-unstyled">
                            <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">{{ __("pages.address") }}</span> {{ get_option("address") }}</li>
                            <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">{{ __("pages.phone_number") }}</span> <a href="tel:{{ get_option("phone") }}" class="link-color-light">{{ get_option("phone") }}</a></li>
                            <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">EMAIL</span> <a href="https://www.okler.net/cdn-cgi/l/email-protection#d3beb2babf93b6abb2bea3bfb6fdb0bcbe" class="link-color-light"><span class="__cf_email__" data-cfemail="432e222a2f03263b222e332f266d202c2e">[email&#160;protected]</span></a></li>
                        </ul>
                        <ul class="social-icons social-icons-icon-dark social-icons-lg">
                            <li class="social-icons-instagram"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-icons-twitter mx-2"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-center text-lg-left mb-5 mb-lg-0">
                        <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ __("pages.useful_links") }}</h4>
                        <ul class="list list-unstyled mb-0">
                            <li><a href="{{ route("contact") }}">{{ __("pages.contact") }}</a></li>
                            <li><a href="{{ route("horaire") }}">{{ __("pages.horaire") }}</a></li>
                            <li><a href="{{ route("actualite") }}">{{ __("pages.news") }}</a></li>
                            <li><a href="{{ route("evenement") }}">{{ __("pages.events") }}</a></li>
                            <li><a href="{{ route("apropos") }}">{{ __("pages.about") }}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-center text-lg-left">
                        <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ __("pages.news") }}</h4>
                        <div class="recent-posts">
                            <ul class="list list-unstyled d-flex flex-column align-items-center align-items-lg-start">
                                @foreach ($actualites as $actualite)
                                <li>
                                    <a href="#">{{ $actualite->publication->titre }}</a>
                                    <span>{{ $actualite->created_at }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row text-center text-md-left align-items-center">
                        <div class="col-md-7 col-lg-8">
                            <ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <p class="text-md-right pb-0 mb-0">{{ get_option("copyright") }}. © {{ date("Y") }}. {{ __("pages.all_right_reserved") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/common/common.min.js"></script>
    <script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/validate.js"></script>
    <script src="/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendor/vide/jquery.vide.min.js"></script>
    <script src="/vendor/vivus/vivus.min.js"></script>
    <script src="/js/theme.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/views/view.contact.js"></script>
    <script src="/js/custom.js"></script>
    <script async src="/js/theme.init.js"></script>
    <script src="/js/examples/examples.lightboxes.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/fullcalendar.js"></script>
    @if (Route::currentRouteName() == "calendrier")
    <script>
        var d = new Date();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: d.toDateString(),
            navLinks: true,
            editable: true,
            eventLimit: true,
            events: <?=json_encode($events)?>
        });
    </script>
    @endif
</body>

</html>
