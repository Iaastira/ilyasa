@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <div class="card-header">Data Tag</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('tag.create')}} class="btn btn-outline-primary">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Tag</th>
                          <th scope="col">Slug</th>
                          <th scope="col" colspan="3"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      @php $no=1; @endphp
                      @foreach ($tag as $data)
                          <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $data->nama_tag}}</td>
                            <td>{{ $data->slug}}</td>
                            <td><a href={{route('tag.edit', $data->id)}} class="btn btn-outline-dark"</a>Edit Data</td>
                            <td><a href={{route('tag.show', $data->id)}} class="btn btn-outline-info"</a>Show Data</td>
                            <td><form action="{{route('tag.destroy', $data->id)}}" method="post">
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