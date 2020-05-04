@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>
            </div>
            <div class="card bg-light mt-3">
                <div class="card-header">
                    CSV Import/Export
                </div>
                <div class="card-body">
                    <form action="{{ route('importUsers') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required>
                        <br>
                        <button class="btn btn-success">Import Personen</button>
                        <a class="btn btn-warning" href="{{ route('exportUsers') }}">Export Personen</a>
                    </form>
                    <hr>
                    <form action="{{ route('importAdressen') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required>
                        <br>
                        <button class="btn btn-success">Import Adressen</button>
                        <a class="btn btn-warning" href="{{ route('exportAdressen') }}">Export Adressen</a>
                    </form>
                    <hr>
                    <form action="{{ route('importArtikel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required>
                        <br>
                        <button class="btn btn-success">Import Artikel</button>
                        <a class="btn btn-warning" href="{{ route('exportArtikel') }}">Export Artikel</a>
                    </form>
                    <hr>
                    <form action="{{ route('importPartlist') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required>
                        <br>
                        <button class="btn btn-success">Import Partlist</button>
                        <a class="btn btn-warning" href="{{ route('exportPartlist') }}">Export Partlist</a>
                    </form>
                    <hr>
                    <form action="{{ route('importProjekt') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required>
                        <br>
                        <button class="btn btn-success">Import Projekt</button>
                        <a class="btn btn-warning" href="{{ route('exportProjekt') }}">Export Projekt</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
