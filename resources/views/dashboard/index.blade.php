@extends('template.layout')

@section('judul')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Anggota</h4>
                    </div>
                    <div class="card-body">
                        {{ $anggota }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Buku</h4>
                    </div>
                    <div class="card-body">
                        {{ $buku }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
