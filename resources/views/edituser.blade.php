@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit User</h4>
        <form class="forms-sample" action="/edituseraccount/{{$data->UserAccountId}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail3">Nama Lengkap</label>
            <input type="email" class="form-control" id="exampleInputEmail3" value="{{$data->user->UserName}}" readonly>       
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="ex : attan@gmail.com" name="email" value="{{$data->email}}">       
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Hak Akses</label>
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
        <button type="submit" class="btn btn-primary mr-2">Ubah</button>
        </form>
      </div>
@endsection