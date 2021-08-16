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
                    <a class="navbar-brand" href="javascript:;">Portfolio - Dynamic</a>
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
                                    <h5 class="modal-title text-white" id="exampleModalLabel">PORTFOLIO - DYNAMIC</h5>
                                </div>
                                <div class="modal-body model-lg">
                                    <form action="/formPortfolio" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white">Image</label>
                                            <input type="text" value="{{ old('img_portfolio') }}" class="form-control"
                                                name="img_portfolio" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label text-white">Icon 1</label>
                                            <input type="text" value="{{ old('icon1') }}" class="form-control"
                                                name="icon1" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white">Icon 2</label>
                                            <textarea type="text" value="{{ old('icon2') }}" class="form-control"
                                                name="icon2" id="exampleInputEmail1"
                                                aria-describedby="emailHelp"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary text-white">Ajouter</button>
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
                                            <th scope="col">Image</th>
                                            <th scope="col">Icone 1</th>
                                            <th scope="col">Icone 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolioDyns as $portfolioDyns)
                                            <tr>
                                                <th scope="row">{{ $portfolioDyns->id }}</th>
                                                <td>{{ $portfolioDyns->img_portfolio }}</td>
                                                <td>{{ $portfolioDyns->icon1 }}</td>
                                                <td>{{ $portfolioDyns->icon2 }}</td>
                                                <td>
                                                    <form action="/backoffice/PortfolioDeletec/{{ $portfolioDyns->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger text-white rounded-1"
                                                            type="submit">DELETE</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <button href="/backoffice/portfolio/{{ $portfolioDyns->id }}/show"
                                                        class="btn btn-warning text-white my-2" data-toggle="modal"
                                                        data-target="#exampleModalToggle_{{ $portfolioDyns->id }}"
                                                        role="button">SHOW</button>
                                                </td>
                                                @include('partials.show.portfolioShow')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary text-white" href="/backoffice/skills/{{ $portfolioDyns->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a> --}}
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
