@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Disposisi</h4>
        <form class="forms-sample" action="/addisposisis" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Index</label>
            <input type="text" class="form-control" id="exampleInputName1" name="DisposisiIndex">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kode</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiKode" placeholder=" ex. KAI.01">
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail3">Nomor Surat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiNomorSurat">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Asal Surat</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiAsalSurat">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Isi Ringkas</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="DisposisiIsiRingkas">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Sifat Surat</label>
            <select class="form-control" id="exampleSelectGender" name="DisposisiSifatSurat">
                <option value="1">Rahasia</option>
                <option value="2">Penting</option>
                <option value="3">Rutin</option>
              </select>          
            </div>
          <div class="form-group">
            <label for="exampleInputCity1">Tanggal Diterima Pengolah</label>
            <input type="date" class="form-control" id="exampleInputCity1" placeholder="Location" name="DisposisiTanggalTerima">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Intruksi/Informasi</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="DisposisiIntruksi">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Diteruskan Kepada</label>
            <select class="form-control" id="exampleSelectGender" name="DisposisiDiteruskanKepada">
                @foreach ($employee as $item)
                  <option value="{{ $item->UserProfileId }}">{{ $item->UserName }} - {{ $item->role->RoleName }}</option>
                @endforeach
           </select>             
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Sesudah Digunakan Harap Segera Kembali Kepada / Unit</label>
                <select class="form-control" id="exampleSelectGender" name="DisposisiDigunakanKembali">
                   @foreach ($employee as $item)
                    <option value="{{$item->UserProfileId }}">{{ $item->UserName }} - {{ $item->role->RoleName }}</option>
                   @endforeach
                </select>                 
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Tanggal Penyelesaian</label>
                <input type="date" class="form-control" id="exampleInputCity1" name="DisposisiTanggalPenyelesaian">
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Tanggal Kembali</label>
                <input type="date" class="form-control" id="exampleInputCity1" name="DisposisiTanggalKembali">
            </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
@endsection