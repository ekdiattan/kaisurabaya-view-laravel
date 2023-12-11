@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Pengguna</h4>
        <form class="forms-sample" action="/createuser" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Pegawai</label>
            <select class="form-control" id="exampleSelectGender" name="UserNameId">
              @foreach ($data as $item)
                <option value="{{$item->UserProfileId}}">{{$item->role->RoleName}} - {{ $item->UserName }}</option>
              @endforeach  
            </select>             
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="ex : attan@gmail.com" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Hak Aksess</label>
            <select class="form-control" id="exampleSelectGender" name="UserRoleId">
              @foreach ($employee as $item)
                <option value="{{$item->EmployeeId}}">{{$item->EmployeeName}}</option>
              @endforeach  
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3"></label>
            <select class="form-control" id="exampleSelectGender">
             
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Password</label>
            <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Password" name="password">
          </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
@endsection