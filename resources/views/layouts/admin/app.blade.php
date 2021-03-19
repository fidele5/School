@include("layouts.admin.header")
@include("layouts.admin.nav")
@include("layouts.admin.sidebar")
<div class="app-content content">
    <div class="content-overlay"></div>
	<div class="content-wrapper">

        @yield('content')

    </div>
</div>
@include('layouts.admin.footer')
