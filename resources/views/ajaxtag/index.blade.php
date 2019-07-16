@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                    <div class="form-group">
                        <label>masukan nama Tag</label>
                        <input type="text" name="namatag" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success simpan-tag">Simpan</button>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody  class="data-tag">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection