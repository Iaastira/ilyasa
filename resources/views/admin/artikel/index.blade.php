@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Artikel</div>
                <center>
                    <br>
                    <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table"3 >
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Tag</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($artikel as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>
                                <img style="widht:100px; height:100px;"
                                src="{{  asset('/assets/img/artikel/'.
                                $data->foto.'') }}"
                                alt="Foto">
                                </td>
                                <td>{!! $data->konten !!}</td>
                                <td>
                        {{$data->kategori->nama_kategori}}
                    </td>
                                <td>
                        <ol>
                        @foreach($data->Tag as $a)
                            <li>{{ $a->nama_tag }}</li>
                        @endforeach
                        </ol>
                    </td>
                                <td><a href="{{ route('artikel.edit', $data->id) }}" class="btn btn sm btn-danger">Edit</a></td>
                               
                                <td>
                                    <form action="{{ route('artikel.destroy', $data->id) }}" method="POST">
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