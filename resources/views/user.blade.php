@extends('partials.main')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Pengguna Aplikasi</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->user->UserName}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->user->role->RoleName}}</td>
                <td class="text-success">
                        <a href="/location-arrow" style="margin-right: 10px;">
                            <i class="fa-solid fa-pen-to-square"></i>                    
                        </a>
                        <a href="/deleteuseraccount/{{$item->UserAccountId}}" style="margin-right: 10px;">
                            <i class="fa-solid fa-trash"></i>                    
                        </a>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection