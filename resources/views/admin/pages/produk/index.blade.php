@extends('admin.layouts.general')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <!-- Read/Update/Delete table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Kupon</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Panduan Belajar HTML</td>
                                    <td>Description of product 1</td>
                                    <td>-</td>
                                    <td>Rp 120.000</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class='bx bxs-edit'></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class='bx bxs-trash' ></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Menjadi Full Stack Javascript</td>
                                    <td>Description of product 2</td>
                                    <td>-</td>
                                    <td>Rp 54.000</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class='bx bxs-edit'></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class='bx bxs-trash' ></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- More rows here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        @include('admin.components.footer')
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
