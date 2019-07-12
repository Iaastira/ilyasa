@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <div class="card-header">Data Kategori</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('kategori.create')}} class="btn btn-outline-primary">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Kategori</th>
                          <th scope="col">Slug</th>
                          <th scope="col" colspan="3"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      @php $no=1; @endphp
                      @foreach ($kategori as $data)
                          <tr>
                            <td>{{ $no++}}</td>
                            <td>{{ $data->nama_kategori}}</td>
                            <td>{{ $data->slug}}</td>
                            <td><a href={{route('kategori.edit', $data->id)}} class="btn btn-outline-dark"</a>Edit Data</td>
                            <td><a href={{route('kategori.show', $data->id)}} class="btn btn-outline-info"</a>Show Data</td>
                            <td><form action="{{route('kategori.destroy', $data->id)}}" method="post">
                                  {{ csrf_field()}}
                            <input type ="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-danger">Hapus Data</button>
                            </form></td>
                          </tr>
                      @endforeach
                    </table>
                  </div>
            </div>
        </div>
    </div>
 </div>
 @endsection