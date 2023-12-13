@extends('partials.main')

@section('main')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Surat Keluar</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nomor Surat KAI</th>
              <th>Nomor Surat Inputan</th>
              <th>Tanggal Surat</th>
              <th>Sifat Surat</th>
              <th>Surat Kepada</th>
              <th>Perihal Surat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($suratkeluar as $item)
              <td>{{$loop->iteration}}</td>
              <td>{{$item->SuratGenerate}}</td>
              <td>{{$item->NomorSurat}}</td>
              <td>{{$item->SuratTanggal}}</td>
              <td>
                @if ($item->SuratSifat == 1)
               <span>Surat Rahasia</span>
               @elseif ($item->SuratSifat == 2)
               <span>Surat Penting</span>
               @elseif ($item->SuratSifat == 3)
               <span>Surat Rutin</span>
               @elseif ($item->SuratSifat == 4)
               <span>Surat Terbatas</span>
              @endif
              </td>
              <td>
                @php $found = false @endphp
                @foreach($employee as $roleItem)
                    @if($roleItem->UserProfileId == $item->SuratTembusanInternal)
                        {{ $roleItem->role->RoleName }} - {{ $roleItem->UserName}}
                        @php $found = true @endphp
                        @break
                    @endif
                @endforeach
                @if(!$found)
                    {{ $item->SuratTembusanInternal}}
                @endif
              </td>
              <td>{{$item->SuratPerihal}}</td>
              <td class="text-success">
                <a href="/editsuratkeluar/{{$item->SuratKeluarId}}" style="margin-right: 10px;">
                    <i class="fa-solid fa-pen-to-square"></i>                    
                </a>
                <a href="/deletesuratkeluar/{{$item->SuratKeluarId}}" style="margin-right: 10px;">
                    <i class="fa-solid fa-trash"></i>                    
                </a>
                <a href="/generatePDFSuratKeluar/{{$item->SuratKeluarId}}">
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
