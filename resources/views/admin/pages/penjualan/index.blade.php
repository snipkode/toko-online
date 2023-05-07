@extends('admin.layouts.general')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <!-- Read/Update/Delete table -->
                    <div class="card px-3 py-4">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Pembeli</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Kuantitas</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#31221</th>
                                    <td>Alam Wibowo</td>
                                    <td>Product A</td>
                                    <td>2</td>
                                    <td>Rp 120.000</td>
                                    <td>Rp 240.000</td>
                                    <td>Pending</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class='bx bxs-edit'></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class='bx bxs-trash'></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                  <th scope="row">#31221</th>
                                  <td>Alam Wibowo</td>
                                  <td>Product A</td>
                                  <td>2</td>
                                  <td>Rp 120.000</td>
                                  <td>Rp 240.000</td>
                                  <td>Pending</td>
                                  <td>
                                      <button class="btn btn-sm btn-warning">
                                          <i class='bx bxs-edit'></i>
                                      </button>
                                      <button class="btn btn-sm btn-danger">
                                          <i class='bx bxs-trash'></i>
                                      </button>
                                  </td>
                              </tr>
                              <tr>
                                <th scope="row">#31221</th>
                                <td>Alam Wibowo</td>
                                <td>Product A</td>
                                <td>2</td>
                                <td>Rp 120.000</td>
                                <td>Rp 240.000</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">
                                        <i class='bx bxs-edit'></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </td>
                            </tr>

                                <!-- more rows here -->
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
