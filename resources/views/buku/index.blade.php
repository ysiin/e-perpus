@extends('template.layout')
@section('judul')
    Buku
@endsection
@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('buku.create') }}">Tambah</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Buku Baik</th>
                            <th>Buku Rusak</th>
                            <th>Jumlah Buku</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = $data1->firstitem(); ?>
                        @foreach ($data1 as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->pengarang }}</td>
                                <td>{{ $item->penerbit->nama_penerbit }}</td>
                                <td>{{ $item->buku_baik }}</td>
                                <td>{{ $item->buku_rusak }}</td>
                                <td>{{ $item->jumlah_buku }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('buku.destroy', $item->id) }}" method="POST">
                                        <a href="#" class="btn btn-secondary">Detail</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Del</button>
                                    </form>
                                </td>
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
