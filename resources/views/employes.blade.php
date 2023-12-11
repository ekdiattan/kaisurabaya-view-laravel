@extends('partials.main')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Pengawai</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kealmin</th>
                <th>Jabatan</th>
                <th>No Telepon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employee as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->UserName}}</td>
                <td>{{$item->UserAddress}}</td>
                <td>
                    @if ($item->UserGender == 1)
                      <span>Laki-laki</span>
                    @else
                      <span>Perempuan</span>
                    @endif
                  </td>
                <td>{{$item->role->RoleName}}</td>
                <td>{{$item->UserPhone}}</td>
                <td class="text-success">
                    <a href="/editemployee/{{$item->UserProfileId}}" style="margin-right: 10px;">
                        <i class="fa-solid fa-pen-to-square"></i>                    
                    </a>
                    <a href="/deleteemployee/{{$item->UserProfileId}}" style="margin-right: 10px;">
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