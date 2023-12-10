@extends('partials.main')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Disposisi</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Index</th>
                <th>Kode</th>
                <th>Nomor Surat</th>
                <th>AsalSurat</th>
                <th>Isi Ringkas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($disposisi as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->DisposisiIndex}}</td>
                <td>{{$item->DisposisiKode}}</td>
                <td>{{$item->DisposisiNomorSurat}}</td>
                <td>{{$item->DisposisiAsalSurat}}</td>
                <td>{{$item->DisposisiIsiRingkas}}</td>
                <td class="text-success">
                    <a href="/editdisposisi/{{$item->DisposisiId}}" style="margin-right: 10px;">
                        <i class="fa-solid fa-pen-to-square"></i>                    
                    </a>
                    <a href="/deletedisposisi/{{$item->DisposisiId}}" style="margin-right: 10px;">
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