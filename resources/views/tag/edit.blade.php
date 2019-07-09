@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit Data Tag</div>

                <div class="card-body">
                <form action="{{ route('tag.update', $tag->id )}}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Tag</label>
                    <input class="form-control" value="{{ $tag->nama_tag }}" type="text" name="nama_tag">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                        <a href="{{ route('tag.index') }}" class="btn btn sm btn-danger">Back</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
