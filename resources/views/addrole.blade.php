@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Jabatan</h4>
        <form class="forms-sample" action="/addroles" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nama Jabatan</label>
               <input type="text" class="form-control" id="exampleInputName1" placeholder="ex : Direktur Utama" name="RoleName" required>
            </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kode Jabatan</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="ex : DU" name="RoleCode" required>
          </div>
          @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
              
            </div>
          @endif
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
@endsection