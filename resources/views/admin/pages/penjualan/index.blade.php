@extends('admin.layouts.general')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <!-- Read/Update/Delete table -->
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>John Doe</td>
                            <td>Product A</td>
                            <td>2</td>
                            <td>$10.00</td>
                            <td>$20.00</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jane Smith</td>
                            <td>Product B</td>
                            <td>1</td>
                            <td>$15.00</td>
                            <td>$15.00</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bob Johnson</td>
                            <td>Product C</td>
                            <td>4</td>
                            <td>$20.00</td>
                            <td>$80.00</td>
                          </tr>
                          <!-- more rows here -->
                        </tbody>
                      </table>                      
                </div>
            </div>
        </div>
        <!-- / Content -->
        @include('admin.components.footer')
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
