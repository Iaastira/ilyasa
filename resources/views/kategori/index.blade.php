@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <center>
                    <br>
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table" >
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>slug</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($kategori as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->slug }}</td>
                                <td><a href="{{ route('kategori.edit', $data->id) }}" class="btn btn sm btn-danger">Edit</a></td>
                                <td>
                                    <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn sm btn-success" type="submit">Hapus Data</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection