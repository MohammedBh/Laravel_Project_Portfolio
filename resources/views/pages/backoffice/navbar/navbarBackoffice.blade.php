@extends('layout.backoffice')
@section('content')
    @include('partials.backoffice.dashboard')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Navbar - Static</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">titre</th>
                                            <th scope="col">icon1</th>
                                            <th scope="col">icon2</th>
                                            <th scope="col">icon3</th>
                                            <th scope="col">icon4</th>
                                            <th scope="col">icon5</th>
                                            <th scope="col">nav1</th>
                                            <th scope="col">nav2</th>
                                            <th scope="col">nav3</th>
                                            <th scope="col">nav4</th>
                                            <th scope="col">nav5</th>
                                            <th scope="col">btn_icon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($navbars as $navbars)
                                            <tr>
                                                <th scope="row">{{ $navbars->id }}</th>
                                                <td>{{ $navbars->img }}</td>
                                                <td>{{ $navbars->h1 }}</td>
                                                <td>{{ $navbars->icon1 }}</td>
                                                <td>{{ $navbars->icon2 }}</td>
                                                <td>{{ $navbars->icon3 }}</td>
                                                <td>{{ $navbars->icon4 }}</td>
                                                <td>{{ $navbars->icon5 }}</td>
                                                <td>{{ $navbars->nav1 }}</td>
                                                <td>{{ $navbars->nav2 }}</td>
                                                <td>{{ $navbars->nav3 }}</td>
                                                <td>{{ $navbars->nav4 }}</td>
                                                <td>{{ $navbars->nav5 }}</td>
                                                <td>{{ $navbars->btn_icon }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @include('partials.modal.modalNavbar')
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/navbar/{{ $navbars->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
