@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Pegawai</h4>
        <form class="forms-sample" action="/createemployee" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nama Pegawai</label>
               <input type="text" class="form-control" id="exampleInputName1" placeholder="ex : Hadyan Yuma Ekdiattan" name="UserName" required>
            </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="ex : Jl.Bungan Sari No. 1" name="UserAddress" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Jenis Kelamin</label>
              <select class="form-control" id="exampleSelectGender" name="UserGender" required>
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Jabatan</label>
            <select class="form-control" id="exampleSelectGender" name="UserRoleId" required>
              @foreach ($role as $item)
                <option value="{{$item->RoleId }}">{{ $item->RoleName }}</option>
              @endforeach
            </select>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Nomor Telepon</label>
            <input type="number" class="form-control" id="exampleInputEmail3" placeholder="ex : 086445454545458" name="UserPhone" required>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
@endsection