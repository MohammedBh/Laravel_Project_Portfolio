@extends('layout.backoffice')
@section('content')
    @include('partials.backoffice.dashboard')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="about about-expand-lg about-absolute fixed-top about-transparent">
            <div class="container-fluid">
                <div class="about-wrapper">
                    <a class="about-brand" href="javascript:;">Home</a>
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
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <th scope="row">{{ $about->id }}</th>
                                                <td>{{ $about->aboutTitle }}</td>
                                                <td>{{ $about->p1 }}</td>
                                                <td>{{ $about->img }}</td>
                                                <td>{{ $about->h3 }}</td>
                                                <td>{{ $about->p2 }}</td>
                                                <td>{{ $about->li_birthday }}</td>
                                                <td>{{ $about->birthday }}</td>
                                                <td>{{ $about->li_website }}</td>
                                                <td>{{ $about->website }}</td>
                                                <td>{{ $about->li_phone }}</td>
                                                <td>{{ $about->phone }}</td>
                                                <td>{{ $about->li_city }}</td>
                                                <td>{{ $about->city }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @include('partials.modal.modalAbout')
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="/backoffice/about/{{ $about->id }}/edit"
                        data-toggle="modal" data-target="#exampleModal">EDIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection
