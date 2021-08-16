@extends('layout.backoffice')

@section('content') <div class="wrapper ">
        @include('partials.backoffice.dashboard')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Home</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <h1 class="mt-5 pt-5 text-center">Welcome to the Admin page</h1>
        </div>
    </div>
@endsection
