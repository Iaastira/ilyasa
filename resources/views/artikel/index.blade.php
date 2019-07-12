@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <div class="card-header">Data Artikel</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('artikel.create')}} class="btn btn-outline-primary">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Slug</th>
                                <th>Konten</th>
                                <th>Tag</th>
                                <th>Kategori</th>
                          <th scope="col" colspan="3"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                       @php $no =1; @endphp
                @foreach($artikel as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->slug }}</td>
                    <td>{{ $data->nama_kategori }}</td> 
                    <td>
                        @foreach ($data->tag as $data)
                            {{ $data->nama_tag }}
                        @endforeach
                    </td>
                    <td>{{ $data->user->name }}</td>
                    <td><img src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="" height="500px" width="500px"></td>
                    {{--  <td>{!! $data->konten !!}</td>  --}}
                   
                    <td>{{ $data->kategori->nama_kategori }}</td>
                    <td><a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('artikel.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('artikel.destroy', $data->id) }}" method="post">
                       {{ csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
 </div>
 @endsection