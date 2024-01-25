@extends('template.layout')

@section('judul')
    Tambah Buku
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('buku') }}" method="POST">
                        @csrf
                        <div class="d-flex">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input name="judul" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input name="isbn" type="number" min="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    <select name="penerbit_id" class="form-control select2">
                                        <option selected></option>
                                        @foreach ($penerbit as $itempenerbit)
                                            <option value="{{ $itempenerbit->id }}">
                                                {{ $itempenerbit->nama_penerbit }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori_id" class="form-control select2">
                                        <option selected></option>
                                        @foreach ($kategori as $itemkategori)
                                            <option value="{{ $itemkategori->id }}">
                                                {{ $itemkategori->nama_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Pengarang</label>
                                    <input name="pengarang" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    <input name="tahun_terbit" type="number" min="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Jumlah Buku</label>
                                    <input name="jumlah_buku" type="number" min="0" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Buku Baik</label>
                                    <input name="buku_baik" type="number" min="0" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Buku Rusak</label>
                                    <input name="buku_rusak" type="number" min="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
