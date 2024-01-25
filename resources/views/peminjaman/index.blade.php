@extends('template.layout')

@section('judul')
    Peminjaman Buku
@endsection

@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('peminjaman.create') }}">Tambah</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Kondisi Buku Saat Dipinjam</th>
                        <th>Kondisi Buku Saat dikembalikan</th>
                        <th>Denda</th>
                    </tr>
                    <?php $i = $data1->firstitem(); ?>
                    @foreach ($data1 as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->anggota->nama }}</td>
                            <td>{{ $item->buku->judul }}</td>
                            <td>{{ $item->tanggal_peminjaman }}</td>
                            <td>{{ $item->tanggal_pengembalian }}</td>
                            <td>{{ $item->kondisi_buku_saat_dipinjam }}</td>
                            <td>{{ $item->kondisi_buku_saat_dikembalikan }}</td>
                            <td> Rp. {{ number_format($item->denda) }}</td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </table>
            </div>
            <div class="card-footer text-right">
                {{ $data1->links('template.pagination') }}
            </div>
        </div>
@endsection