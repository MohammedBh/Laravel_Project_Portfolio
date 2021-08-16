@extends('layout.backoffice')
@section('content')
    @include('partials.backoffice.dashboard')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Portfolio - Static</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Simple Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Paragraphe</th>
                                            <th scope="col">li1</th>
                                            <th scope="col">li2</th>
                                            <th scope="col">li3</th>
                                            <th scope="col">li4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $portfolios)
                                            <tr>
                                                <th scope="row">{{ $portfolios->id }}</th>
                                                <td>{{ $portfolios->portfolioTitle }}</td>
                                                <td>{{ $portfolios->p }}</td>
                                                <td>{{ $portfolios->li1 }}</td>
                                                <td>{{ $portfolios->li2 }}</td>
                                                <td>{{ $portfolios->li3 }}</td>
                                                <td>{{ $portfolios->li4 }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @include('partials.modal.modalPortfolio')
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/portfolio/{{ $portfolios->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
