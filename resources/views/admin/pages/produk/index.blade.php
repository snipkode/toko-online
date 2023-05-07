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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-perfect">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Link</th>
                                        <th>Kupon</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hasil as $item)
                                        <tr>
                                            <td class="text-nowrap">{{ $item->product_name }}</td>
                                            <td class="text-nowrap">{{ substr($item->description, 0, 40) . '...' }}</td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-sm btn-primary"
                                                    onclick="alert('{{ $item->link }}')">
                                                    <i class='bx bxs-download'></i>
                                                </button>
                                            </td>
                                            <td class="text-nowrap">{{ $item->kode ? $item->kode : 'No' }}</td>
                                            <td class="text-nowrap">{{ idr_format($item->harga) }}</td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-sm btn-warning" onclick="alert({{ $item->product_id }})">
                                                    <i class='bx bxs-edit'></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More rows here -->
                                </tbody>
                            </table>
                        </div>
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
