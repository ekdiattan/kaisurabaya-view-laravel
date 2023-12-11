@extends('partials.main')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Jabatan</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Jabatan</th>
                <th>Nama Jabatan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($role as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->RoleCode}}</td>
                <td>{{$item->RoleName}}</td>
                <td class="text-success">
                    <a href="/editrole/{{$item->RoleId}}" style="margin-right: 10px;">
                        <i class="fa-solid fa-pen-to-square"></i>                    
                    </a>
                    <a href="/deleterole/{{$item->RoleId}}" style="margin-right: 10px;">
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