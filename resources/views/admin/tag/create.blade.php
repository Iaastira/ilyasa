@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Tambah Data Tag</div>

                <div class="card-body">
                <form action="{{ route('tag.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="">Nama tag</label>
                    <input class="form-control" type="text" name="nama_tag">
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Simpan Data
                    </button>
                    <a href="{{ route('tag.index') }}" class="btn btn sm btn-danger">Back</a>
                </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection