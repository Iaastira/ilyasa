@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  <div class="card-header">Membuat Data Kategori</div>
                  <br>
                  <form action="{{route('kategori.store')}}" method="post">
                            {{ csrf_field() }}

                      <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control"  name="nama_kategori">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                      </div>
                       <div class="form-group">
                          <a href="{{ url('kategori')}}" class="btn btn-outline-info">Kembali</a>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection