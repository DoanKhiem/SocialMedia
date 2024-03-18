{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    @include('backend.layouts.head')--}}
{{--    @yield('head')--}}
{{--</head>--}}

{{--<body id="page-top">--}}

{{--<!-- Page Wrapper -->--}}
{{--<div id="wrapper">--}}

{{--    <!-- Sidebar -->--}}
{{--    @include('backend.layouts.sidebar')--}}
{{--    <!-- End of Sidebar -->--}}

{{--    <!-- Content Wrapper -->--}}
{{--    <div id="content-wrapper" class="d-flex flex-column">--}}

{{--        <!-- Main Content -->--}}
{{--        <div id="content">--}}

{{--            <!-- Topbar -->--}}
{{--            @include('backend.layouts.navbar')--}}
{{--            <!-- End of Topbar -->--}}

{{--            <!-- Begin Page Content -->--}}
{{--            @yield('content')--}}
{{--            <!-- /.container-fluid -->--}}

{{--        </div>--}}
{{--        <!-- End of Main Content -->--}}

{{--        <!-- Footer -->--}}
{{--        <footer class="sticky-footer bg-white">--}}
{{--            <div class="container my-auto">--}}
{{--                <div class="copyright text-center my-auto">--}}
{{--                    <span>Copyright &copy; Your Website 2020</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
{{--        <!-- End of Footer -->--}}

{{--    </div>--}}
{{--    <!-- End of Content Wrapper -->--}}

{{--</div>--}}
{{--<!-- End of Page Wrapper -->--}}

{{--<!-- Scroll to Top Button-->--}}
{{--<a class="scroll-to-top rounded" href="#page-top">--}}
{{--    <i class="fas fa-angle-up"></i>--}}
{{--</a>--}}

{{--<!-- Logout Modal-->--}}
{{--<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>--}}
{{--                <button class="close" type="button" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">×</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>--}}
{{--                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                   document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@include('backend.layouts.footer')--}}
{{--@yield('footer')--}}
{{--</body>--}}

{{--</html>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.layouts.head')
    @yield('head')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('backend.layouts.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('backend.layouts.navbar')
        <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('backend.layouts.footer')
@yield('footer')
</body>
</html>
