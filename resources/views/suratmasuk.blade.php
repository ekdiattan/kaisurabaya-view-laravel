@extends('partials.main')

@section('main')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Surat Masuk</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nomor Surat</th>
              <th>Jenis Surat</th>
              <th>Tanggal Surat</th>
              <th>Diteruskan Kepada</th>
              <th>Perihal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datamasuk as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->SuratGenerate}}</td>
              <td>
                @if ($item->JenisSurat == 1)
                  <span>Surat Eksternal</span>
                @else
                  <span>Surat Internal</span>
                @endif
              </td>              
              <td>{{$item->TanggalSurat}}</td>
              <td>
                @php $found = false @endphp
                @foreach($role as $roleItem)
                    @if($roleItem->RoleId == $item->DiteruskanKepada)
                        {{ $roleItem->RoleName }}
                        @php $found = true @endphp
                        @break
                    @endif
                @endforeach
                @if(!$found)
                    {{ $item->DiteruskanKepada }}
                @endif
            </td>
            
              <td>{{$item->PerihalSurat}}</td>
              <td class="text-success">
                <a href="/editsuratmasuk/{{$item->SuratMasukId}}" style="margin-right: 10px;">
                    <i class="fa-solid fa-pen-to-square"></i>                    
                </a>
                <a href="/deletesuratmasuk/{{$item->SuratMasukId}}" style="margin-right: 10px;">
                    <i class="fa-solid fa-trash"></i>                    
                </a>
                <a href="/map-marker">
                    <i class="fa-solid fa-download"></i>                   
                </a>
              </td>            
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
