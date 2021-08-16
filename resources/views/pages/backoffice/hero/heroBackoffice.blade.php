@extends('layout.backoffice')
@section('content')
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($heros as $hero)
                                        <tr>
                                            <th scope="row">{{ $hero->id }}</th>
                                            <td>{{ $hero->h1 }}</td>
                                            <td>{{ $hero->p }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @include('partials.modal.modalHero')
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/hero/{{ $hero->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
