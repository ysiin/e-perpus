@extends('template.layout')

@section('judul')
    Tambah Kategori
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">

            <div class="card-body">
                <form action="{{ url('kategori') }}" method="POST">
                    @csrf
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Kode Kategori</label>
                                <input name="kode_kategori" type="number" min="0" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input name="nama_kategori" type="text" class="form-control">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection