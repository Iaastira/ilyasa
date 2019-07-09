@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/backend/assets/vendor/select2/select2.min.css">
@endsection
@section('js')
<script src="/backend/assets/vendor/select2/select2.min.js"></script>
<script src="/backend/assets/js/components/select2-init.js"></script>
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('editor1')</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Artikel</div>

                <div class="card-body">
                <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="">Judul</label>
                <input class="form-control" type="text" name="judul">
                </div>                
                <div class="form-group">
                <label for="">Konten</label>
                <textarea name="konten" rows="10" class="form-control" required></textarea>
                </div> 
                <div class="form-group">
                <label for="">Kategori</label>
                <select name="kategori_id" class="form-control">
                @foreach($kategori as $data)
                       <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                @endforeach
                </select>
                </div> 
                <div class="form-group">
                <label for="">Tag</label>
                <select name="tag[]" class="form-control" id="s2_demo3" multiple="multiple">
                @foreach($tag as $data)
                       <option value="{{$data->id}}">{{$data->nama_tag}}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input class="form-control" type="file" name="foto" required>
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