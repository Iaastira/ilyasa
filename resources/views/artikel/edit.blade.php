@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data game</div>

                <div class="card-body">
                <form action="{{ route('game.update',$game->id) }}" method="post">
                <input name="_method" type="hidden" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="">Nama game</label>
                <input class="form-control" value="{{ $game->nama }}" type="text" name="nama">
                </div>
                <div class="form-group">
                <label for="">tahun pembuatan</label>
                <input class="form-control" value="{{ $game->thn_pembuatan }}" type="date" name="thn_pembuatan">
                </div>
                <div class="form-group">
                <label for="">Nama developer</label>
                <select name="id_developer" class="form-control">
                @foreach($developer as $data)
                <option value="{{ $data->id }}" {{ $game->developer->id == $data->id ?
                 'selected="selected"' : '' }}>{{ $data->nama }}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                <label for="">Daftar genre</label>
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