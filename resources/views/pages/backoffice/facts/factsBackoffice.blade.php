@extends('layout.backoffice')
@section('content')
    @include('partials.backoffice.dashboard')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="facts facts-expand-lg facts-absolute fixed-top facts-transparent">
            <div class="container-fluid">
                <div class="facts-wrapper">
                    <a class="facts-brand" href="javascript:;">Home</a>
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
                                            <th scope="col">Para1</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">h3</th>
                                            <th scope="col">para2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($factss as $facts)
                                            <tr>
                                                <th scope="row">{{ $facts->id }}</th>
                                                <td>{{ $facts->factsTitle }}</td>
                                                <td>{{ $facts->p1 }}</td>
                                                <td>{{ $facts->img }}</td>
                                                <td>{{ $facts->h3 }}</td>
                                                <td>{{ $facts->p2 }}</td>
                                                <td>{{ $facts->li_birthday }}</td>
                                                <td>{{ $facts->birthday }}</td>
                                                <td>{{ $facts->li_website }}</td>
                                                <td>{{ $facts->website }}</td>
                                                <td>{{ $facts->li_phone }}</td>
                                                <td>{{ $facts->phone }}</td>
                                                <td>{{ $facts->li_city }}</td>
                                                <td>{{ $facts->city }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @include('partials.modal.modalFacts')
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/facts/{{ $facts->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
