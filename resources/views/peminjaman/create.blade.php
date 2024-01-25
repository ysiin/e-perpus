@extends('template.layout')

@section('judul')
    Tambah Peminjaman
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('peminjaman') }}" method="POST">
                        @csrf
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Anggota</label>
                                <select name="anggota_id" class="form-control select2">
                                    <option selected></option>
                                    @foreach ($anggota as $itemanggota)
                                        <option value="{{ $itemanggota->id }}">
                                            ({{ $itemanggota->nis }})
                                            {{ $itemanggota->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Buku</label>
                                <select name="buku_id" class="form-control select2">
                                    <option selected></option>
                                    @foreach ($buku as $itembuku)
                                        <option value="{{ $itembuku->id }}">
                                            {{ $itembuku->judul }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tanggal Peminjaman</label>
                                    <input name="tanggal_peminjaman" type="text" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tanggal Pengembalian</label>
                                    <input name="tanggal_pengembalian" type="text" class="form-control datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                        </div>
                        <div class="d-flex">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Kondisi Buku Saat Dipinjam</label>
                                    <input name="kondisi_buku_saat_dipinjam" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Kondisi Buku Saat Dikembalikan</label>
                                    <input name="kondisi_buku_saat_dikembalikan" type="tex" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Denda</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp. 
                                        </div>
                                    </div>
                                    <input name="denda" type="number" min="0" class="form-control currency">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
