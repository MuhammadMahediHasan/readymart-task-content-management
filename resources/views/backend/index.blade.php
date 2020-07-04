<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.layouts.css')
    </head>
    <body class="sb-nav-fixed">
        @include('backend.layouts.navbar')
        <div id="layoutSidenav">
            @include('backend.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('main_section')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('backend.layouts.js')
    </body>
</html>
