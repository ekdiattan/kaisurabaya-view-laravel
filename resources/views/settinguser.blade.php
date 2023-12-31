@extends('partials.main')
@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pengaturan Pengguna</h4>
        <form class="forms-sample" action="/updateuseraccount" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
              <input type="text" class="form-control" id="exampleInputName1" value="{{$user->user->UserName}}" name="UserName" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail3" value="{{$user->email}}" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Foto Profil</label>
            <input type="file" class="form-control" id="exampleInputPassword4" placeholder="Password" name="UserImages">
          </div>
          {{-- <div class="form-group">
            <label for="exampleSelectGender">Role Aplikasi</label>
              <select class="form-control" id="exampleSelectGender">
                <option>{{$user->user->role->RoleName}}</option>
                @foreach ($role as $roles)
                    <option>{{$roles->RoleName}}</option>
                @endforeach
              </select>
            </div> --}}
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a class="btn btn-light" href="/main">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection