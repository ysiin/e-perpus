@extends('template.layout')

@section('judul')
    Kategori
@endsection

@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('kategori.create') }}">Tambah</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>#</th>
                        <th>Kode Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = $data1->firstitem(); ?>
                    @foreach ($data1 as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->kode_kategori }}</td>
                            <td>{{ $item->nama_kategori}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('kategori.destroy', $item->id) }}" method="POST">
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