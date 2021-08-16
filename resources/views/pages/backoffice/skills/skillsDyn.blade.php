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
                    <a class="navbar-brand" href="javascript:;">Skills - Dynamic</a>
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
                                    <h5 class="modal-title text-white" id="exampleModalLabel">SKILLS - DYNAMIC</h5>
                                </div>
                                <div class="modal-body model-lg">
                                    <form action="/formSkills" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white">Span</label>
                                            <input type="text" class="form-control" value="{{ old('span') }}" name="span"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1"
                                                class="form-label text-white">Pourcentage</label>
                                            <input type="text" class="form-control" value="{{ old('i') }}" name="i"
                                                id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white">Aria</label>
                                            <textarea type="text" class="form-control" value="{{ old('aria') }}"
                                                name="aria" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mx-2"
                                        data-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn btn-primary text-white">ADD</button>
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
                                            <th scope="col">Titre</th>
                                            <th scope="col">Paragraphe</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skillsDyns as $skillsDyns)
                                            <tr>
                                                <th scope="row">{{ $skillsDyns->id }}</th>
                                                <td>{{ $skillsDyns->span }}</td>
                                                <td>{{ $skillsDyns->pourcentage }} %</td>
                                            
                                            <td>
                                                <form action="/backoffice/skillsDeletec/{{ $skillsDyns->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger text-white rounded-1"
                                                        type="submit">DELETE</button>
                                                </form>
                                            </td>
                                            <td>
                                                <button href="/backoffice/skills/{{ $skillsDyns->id }}/show"
                                                    class="btn btn-warning text-white my-2" data-toggle="modal"
                                                    data-target="#exampleModalToggle_{{ $skillsDyns->id }}"
                                                    role="button">SHOW</button>
                                            </td>
                                            @include('partials.show.skillsShow')
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary text-white" href="/backoffice/skills/{{ $skillsDyns->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a> --}}
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
