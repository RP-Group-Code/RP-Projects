@extends('layout.index')
{{-- @section('content') --}}

    <section class="content-header ml-5">
        <div class="row mt-2 ml-2 mr-4">
            <div class="col-sm-6">
                <h1 class="m-0">Home Page</h1>
                <title>View | Home Page</title>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product Lists</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <ol class="breadcrumb mt-3 ml-3 mb-3">
            <li class="active">" Data Product - Home Page "</li>
        </ol>
    </section>

    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Product Lists</h5>
                        </div>
                        <div class="col-sm offset-md-6">
                            <a class="title-header-button"><a class="btn btn-primary" href="create.php"><i
                                        class="fas fa-store-alt"> <b><i class="fas fa-plus"></i></b></i></a></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="data_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            ?>
                            @foreach ($home as $hm)
                                <tr>
                                    <td align="center">{{ $no++ }}</td>
                                    <td>{{ $hm->gambar }}</td>
                                    <td>{{ $hm->title }}</td>
                                    <td>{{ $hm->subtitle }}</td>
                                    <td>{{ $hm->deskripsi }}</td>
                                    <td>{{ $hm->harga }}</td>
                                    <td>{{ $hm->kategori }}</td>
                                    <td align="center">
                                        <a class="btn btn-warning ml-5">
                                            <i class="fa fa-edit fa-lg text-black"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger tombol-hapus">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
