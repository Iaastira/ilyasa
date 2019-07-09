@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit Data Kategori</div>

                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id )}}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                    <input class="form-control" value="{{ $kategori->nama_kategori }}" type="text" name="nama_kategori">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                        <a href="{{ route('kategori.index') }}" class="btn btn sm btn-danger">Back</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
