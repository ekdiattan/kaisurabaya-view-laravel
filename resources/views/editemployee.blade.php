@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Pegawai</h4>
        <form class="forms-sample" action="/editemployee/{{$data->UserProfileId}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nama Pegawai</label>
            <input type="text" class="form-control" id="exampleInputName1" name="UserName"  value="{{$data->UserName}}">
            </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->UserAddress}}" name="UserAddress">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Jenis Kelamin</label>
            <select class="form-control" id="exampleSelectGender" name="UserGender">
                <option value="1" {{ $data->UserGender == 1 ? 'selected' : '' }}>Laki-laki</option>
                <option value="2" {{ $data->UserGender == 2 ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Jabatan</label>
            <select class="form-control" id="exampleSelectGender" name="UserRoleId">
                @foreach ($role as $item)
                    @if($item->RoleId == $data->UserRoleId)
                        <option value="{{ $item->RoleId }}" selected>{{ $item->RoleName }}</option>
                    @else
                        <option value="{{ $item->RoleId }}">{{ $item->RoleName }}</option>
                    @endif
                @endforeach
            </select>
        <div class="form-group">
            <label for="exampleInputEmail3">Nomor Telepon</label>
            <input type="number" class="form-control" id="exampleInputEmail3"value="{{$data->UserPhone}}" name="UserPhone">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Ubah</button>
        </form>
      </div>
@endsection