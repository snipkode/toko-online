@extends('admin.layouts.general')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                @include('admin.components.widget.hero')
                @include('admin.components.widget.revenue')
                @include('admin.components.widget.report')
            </div>
        </div>
        <!-- / Content -->
        @include('admin.components.footer')
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
