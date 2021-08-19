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
                    <a class="navbar-brand" href="javascript:;">Services - Dynamic</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="text-center mb-5">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            ADD ELEMENT
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content bg-secondary">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">SERVICES - DYNAMIC</h5>
                                </div>
                                <div class="modal-body model-lg">
                                    <form action="/backoffice/formServices" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white">Icon</label>
                                            <input type="text" value="{{ old('icon') }}" class="form-control"
                                                name="icon" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label text-white">Titre</label>
                                            <input type="text" value="{{ old('titre') }}" class="form-control"
                                                name="titre" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                                            <textarea type="text" value="{{ old('para') }}" class="form-control"
                                                name="para" id="exampleInputEmail1"
                                                aria-describedby="emailHelp"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary text-white">Ajouter</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary mx-2"
                                                data-dismiss="modal">CANCEL</button>
                                            <button type="submit" class="btn btn-primary text-white">ADD</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <th scope="col">Icon</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Paragraphe</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($servicesDyns as $servicesDyns)
                                            <tr>
                                                <th scope="row">{{ $servicesDyns->id }}</th>
                                                <td>{{ $servicesDyns->icon }}</td>
                                                <td>{{ $servicesDyns->titre }}</td>
                                                <td>{{ $servicesDyns->para }}</td>
                                                <td>
                                                    <form action="/backoffice/ServicesDeletec/{{ $servicesDyns->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger text-white rounded-1"
                                                            type="submit">DELETE</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <button href="/backoffice/services/{{ $servicesDyns->id }}/show"
                                                        class="btn btn-warning text-white my-2" data-toggle="modal"
                                                        data-target="#exampleModalToggle_{{ $servicesDyns->id }}"
                                                        role="button">SHOW</button>
                                                </td>
                                                @include('partials.show.servicesShow')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary text-white" href="/backoffice/skills/{{ $servicesDyns->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a> --}}
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
