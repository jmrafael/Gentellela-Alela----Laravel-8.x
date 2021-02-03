@include('layouts.headerMain')

<!-- Main Sidebar Container -->
@include('layouts.sidebar')
<!-- /.Main Sidebar Container -->


<!-- Navbar -->
@include('layouts.topBar')
<!-- /.navbar -->

<!-- Content Wrapper-->
<div class="right_col" role="main">
	@yield('content')
</div>
<!-- /.content-wrapper -->


@include('layouts.footer')

@include('dialogs.logout')

@include('layouts.footerMainScripts')
