<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title') - {{config('app.name')}} Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css" rel="stylesheet" />
        <link href="{{asset('/')}}admin/css/styles.css" rel="stylesheet" />
        <link href="{{asset('/')}}admin/css/custom.css" rel="stylesheet" />
        @stack('styles')
    </head>
    <body class="sb-nav-fixed" style="background: #eaeaea">
        @include('admin.layouts.header')
        <div id="layoutSidenav">
            @include('admin.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 py-4">
                        @yield('content')
                    </div>
                </main>
                @include('admin.layouts.footer')
            </div>
        </div>
        <script src="{{ asset('/') }}admin/js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/')}}admin/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('/')}}admin/js/custom.js"></script>
        <script>
            $.ajaxSetup({
                dataType: 'json',
                beforeSend: function(xhr) {
                    // xhr.setRequestHeader("auth_key","<?php echo csrf_token() ?>"); 
                },
                data: {
                    "_token": "{{ csrf_token() }}",
                }
            });
        </script>
        @stack('script')
    </body>
</html>
