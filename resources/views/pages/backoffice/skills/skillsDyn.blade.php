@extends('layout.backoffice')
@section('content')
    @include('partials.backoffice.dashboard')
    @if (session()->has('message'))
        <div class="container alert alert-success mt-2 w-50">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (session()->has('messageDelete'))
        <div class="container alert alert-danger mt-2 w-50">
            {{ session()->get('messageDelete') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-warning alert-block">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
        <div class="text-center mb-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ajouter un service
            </button>
        </div>
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
                                        @foreach ($skillsDyns as $skillsDyns)
                                            <tr>
                                                <th scope="row">{{ $skillsDyns->id }}</th>
                                                <td>{{ $skillsDyns->skillsTitle }}</td>
                                                <td>{{ $skillsDyns->p1 }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @include('partials.modal.modalSkills')
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/skills/{{ $skills->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
