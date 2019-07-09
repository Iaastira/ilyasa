@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Artikel</div>

                <div class="card-body">
                <form action="{{ route('artikel.update',$artikel->id) }}" method="post">
                <input name="_method" type="hidden" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="">Judul</label>
                <input class="form-control" value="{{ $artikel->judul }}" type="text" name="judul">
                </div>
                <div class="form-group">
                <label for="">Foto</label>
                <input class="form-control" value="{{ $artikel->foto }}" type="file" name="foto">
                </div>
                <div class="form-group">
                <label for="">konten</label>
                <input class="form-control" value="{{ $artikel->konten }}" type="text" name="konten">
                </div>
                <div class="form-group">
                <label for="">Kategori</label>
                <select name="genre[]" class="form-control multiple" multiple>
                @foreach($genre as $data)
                <option value="{{ $data->id }}" {{ (in_array($data->id, $selected)) ?
                    ' selected="selected"' : '' }}>{{ $data->genre }}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-outline-info">
                Simpan Data
                </button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection