@extends('admin.layouts.general')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <x-slot name="header">
                <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Profile') }}
                </h3>
            </x-slot>

            <div class="row py-12">
                <div class="col-md-4">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-3">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
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
