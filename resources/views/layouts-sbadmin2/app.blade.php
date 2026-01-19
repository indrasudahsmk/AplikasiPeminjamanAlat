<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts-sbadmin2.header')
</head>

<body id="page-top">

    <div id="wrapper">
        @include('layouts-sbadmin2.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('layouts-sbadmin2.navbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('layouts-sbadmin2.footer')

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts-sbadmin2.logout-modal')

    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}  "></script>
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}   "></script>

    <script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    @session('success')
        <script>
            Swal.fire({
                title: "Sukses",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endsession

    @session('error')
        <script>
            Swal.fire({
                title: "Gagal",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endsession
</body>

</html>
