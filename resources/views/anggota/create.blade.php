@extends('template.layout')

@section('judul')
    Tambah Anggota
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('anggota') }}" method="POST">
                        @csrf
                        <div class="d-flex">
                            <div class="col-6 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Kode Anggota</label>
                                    <input name="kode_anggota" type="number" min="0" class="form-control">
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input name="nis" type="number" min="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input name="nama" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input name="kelas" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" type="text" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
