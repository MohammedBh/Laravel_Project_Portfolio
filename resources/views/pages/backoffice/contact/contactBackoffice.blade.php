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
                                            <th scope="col">Icon 1</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">p1</th>
                                            <th scope="col">Icon 2</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">p2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contacts)
                                            <tr>
                                                <th scope="row">{{ $contacts->id }}</th>
                                                <td>{{ $contacts->contactTitle }}</td>
                                                <td>{{ $contacts->p }}</td>
                                                <td>{{ $contacts->icon1 }}</td>
                                                <td>{{ $contacts->titre1 }}</td>
                                                <td>{{ $contacts->p1 }}</td>
                                                <td>{{ $contacts->icon2 }}</td>
                                                <td>{{ $contacts->titre2 }}</td>
                                                <td>{{ $contacts->p2 }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @include('partials.modal.modalContact')
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/contact/{{ $contacts->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
