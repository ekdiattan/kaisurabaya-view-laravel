@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Disposisi</h4>
        <form class="forms-sample" action="/editdisposisi/{{ $data->DisposisiId }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Index</label>
            <input type="text" class="form-control" id="exampleInputName1" name="DisposisiIndex" value="{{ $data->DisposisiIndex }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kode</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiKode" value="{{ $data->DisposisiKode }}">
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail3">Nomor Surat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiNomorSurat" value="{{ $data->DisposisiNomorSurat }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Asal Surat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiAsalSurat" value="{{ $data->DisposisiAsalSurat }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Isi Ringkas</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiIsiRingkas" value="{{ $data->DisposisiIsiRingkas }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Sifat Surat</label>
            <select class="form-control" id="exampleSelectGender" name="DisposisiSifatSurat">
                @php
                $options = [
                    '1' => 'Rahasia',
                    '2' => 'Penting',
                    '3' => 'Rutin'
                ];
                $selectedLabel = $options[$data->DisposisiSifatSurat]; 
                @endphp
                <option value="{{ $data->DisposisiSifatSurat }}">{{ $selectedLabel }}</option>
                @foreach($options as $value => $label)
                    @if ($label !== $selectedLabel)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputCity1">Tanggal Diterima Pengolah</label>
            <input type="date" class="form-control" id="exampleInputCity1" placeholder="Location" name="DisposisiTanggalTerima" value="{{ $data->DisposisiTanggalTerima }}">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Intruksi/Informasi</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="DisposisiIntruksi" value="{{ $data->DisposisiIntruksi }}">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Diteruskan Kepada</label>
            <select class="form-control" id="exampleSelectGender" name="DisposisiDiteruskanKepada">
                @foreach ($disposisi as $item)
                <option value="{{ $item->UserProfileId }}" @if($item->UserProfileId == $data->DisposisiDiteruskanKepada) selected @endif>
                    {{ $item->UserName }} - {{ $item->role->RoleName }}
                </option>
            @endforeach 
              </select>             
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Sesudah Digunakan Harap Segera Kembali Kepada / Unit</label>
                <select class="form-control" id="exampleSelectGender" name="DisposisiDigunakanKembali">
                    @foreach ($disposisi as $item)
                        <option value="{{ $item->UserProfileId }}" @if($item->UserProfileId == $data->DisposisiDigunakanKembali) selected @endif>
                            {{ $item->UserName }} - {{ $item->role->RoleName }}
                        </option>
                    @endforeach 
                </select>                 
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Tanggal Penyelesaian</label>
                <input type="date" class="form-control" id="exampleInputCity1" name="DisposisiTanggalPenyelesaian" value="{{ $data->DisposisiTanggalPenyelesaian }}">
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Tanggal Kembali</label>
                <input type="date" class="form-control" id="exampleInputCity1" name="DisposisiTanggalKembali" value="{{ $data->DisposisiTanggalKembali }}">
            </div>
          <button type="submit" class="btn btn-primary mr-2">Ubah</button>
          <button type="button" class="btn btn-primary mr-2" onclick="navigateTo()">Kembali</button>
        </form>
      </div>
      <script>
        function navigateTo() {
            window.location.href = "/listdisposisi";
        }
    </script>  
@endsection