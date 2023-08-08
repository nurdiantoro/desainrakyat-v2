@include('backend.component.header')

<!-- Page Wrapper -->
<div id="wrapper">

    @include('backend.component.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('backend.component.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div style="overflow: auto; max-height:500px">
                    @yield('content')
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Desainrakyat.com</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@include('backend.component.footer')
