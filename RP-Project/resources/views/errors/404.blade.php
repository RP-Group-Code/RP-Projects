<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERORR PAGE !!!</title>
    @includeIf('layout/style')

</head>

<body style="background-color: rgb(19, 19, 4)">
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid mb-5">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="text-danger">Error Page</h1> --}}
                    </div>
                    <div class="col-sm-6">
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white"> Error Page</li>
                        </ol> --}}
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content mt-5">
            <div class="container">
                <div class="error-page">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <h1 class="headline text-danger mr-4"> ERROR</h1>
                                </div>
                                <div class="col">
                                    <small class="text-warning mr-4"> Periksa kembali Akses Akun !!! </small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="error-content ml-4">
                                <h3><i class="fas fa-exclamation-triangle text-warning"> Oops! Page not found.</i> </h3>
                                <p class="text-white mr-4">
                                    Kami tidak dapat menemukan halaman yang anda inginkan. Sementara itu, Mungkin anda bisa
                                    <a href="#">kembali ke dashboard</a> atau
                                    mencoba mengakses form lainnya. <br> <p class="text-warning mr-4"> <b> Silahkan Lakukan Laporan Pada Developer Sistem / Atasan Jika Ingin Mengakses Halaman !!! </p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.error-content -->
                    <center>
                        <div class="image-eror mt-3">
                            <img src="{{ url('') }}/img/eror.png" class="img mt-5" width='65%' height='70%'
                                alt="User Image">
                        </div>
                    </center>
                </div>
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
    </div>

    @includeIf('layout/script')
</body>

</html>
