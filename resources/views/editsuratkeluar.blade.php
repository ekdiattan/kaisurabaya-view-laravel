@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if($data->SifatSurat == 1)
          <h4 class="card-title">Edit Surat Eksternal</h4>
        @else
          <h4 class="card-title">Edit Surat Internal</h4>
        @endif
        <form class="forms-sample" action="/editsuratmasuk/{{$data->SuratKeluarId}}" method="POST">
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
            <input type="date" class="form-control" id="exampleInputEmail3" value="{{$data->SuratLampiran}}" name="SuratLampiran">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Perihal</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data->SuratPerihal}}" name="SuratPerihal">
          </div>
        <div class="form-group">
            <label for="exampleInputName1">Diteruskan Kepada</label>
            <select class="form-control" id="exampleSelectGender" name="DiteruskanKepada">
                @foreach ($role as $item)
                    @if($item->RoleId == $data->SuratTembusanInternal)
                        <option value="{{ $item->RoleId }}" selected>{{ $item->RoleName }}</option>
                    @else
                        <option value="{{ $item->RoleId }}">{{ $item->RoleName }}</option>
                    @endif
                @endforeach
            </select>
              <input type="type" class="form-control" id="exampleInputEmail3" name="DiteruskanKepada" value="{{$data->DiteruskanKepada}}">
            @endif
          </div>
          <button type="submit" class="btn btn-primary mr-2">Ubah</button>
          <button type="button" class="btn btn-primary mr-2" onclick="navigateTo()">Cancel</button>
        </form>
      </div>
      <script>
        function navigateTo() {
            window.location.href = "/suratmasuk";
        }
    </script>  
@endsection