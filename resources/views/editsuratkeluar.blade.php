@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <h4 class="card-title">Edit Surat Keluar</h4>
        <form class="forms-sample" action="/editsuratkeluar/{{$data->SuratKeluarId}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nomor Surat KAI</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{$data->SuratGenerate}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Nomor Surat Inputan</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{$data->NomorSurat}}" name="NomorSurat">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Tanggal Surat</label>
            <input type="date" class="form-control" id="exampleInputEmail3" value="{{$data->SuratTanggal}}" name="SuratTanggal">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Lampiran</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratLampiran}}" name="SuratLampiran">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kepada Yth</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratKepada}}" name="SuratKepada">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Divisi</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratDivisi}}" name="SuratDivisi">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Perihal</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratPerihal}}" name="SuratPerihal">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Isi surat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratIsi}}" name="SuratIsi">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Surat Tembusan Internal</label>
            <select class="form-control" id="exampleSelectGender" name="SuratTembusanInternal">
              @foreach ($employee as $item)
                @if ($item->UserProfileId == $data->SuratTembusanInternal)
                  <option value="{{ $item->UserProfileId }}" selected>{{ $item->role->RoleName }} - {{ $item->UserName }}</option>
                @else
                  <option value="{{ $item->UserProfileId }}">{{ $item->role->RoleName }} - {{ $item->UserName }}</option>
                @endif
              @endforeach
            </select>
          <div class="form-group">
            <label for="exampleInputEmail3">Surat Tembusan Eksternal</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratTembusanEksternal}}" name="SuratTembusanEksternal">
          </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Ubah</button>
          <button type="button" class="btn btn-primary mr-2" onclick="navigateTo()">Cancel</button>
        </form>
      </div>
      <script>
        function navigateTo() 
        {
            window.location.href = "/suratmasuk";
        }
    </script>  
@endsection