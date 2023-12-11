@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Surat Keluar</h4>
        <form class="forms-sample" action="/suratkeluar/store" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nomor Surat</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"  name="NomorSurat" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Tanggal Surat</label>
            <input type="date" class="form-control" id="exampleInputEmail3" name="SuratTanggal" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Sifat Surat</label>
            <select class="form-control" id="exampleSelectGender" name="SuratSifat" required>
                <option value="1">Rahasia</option>
                <option value="2">Penting</option>
                <option value="3">Rutin</option>
                <option value="4">Terbatas</option>
              </select>          
            </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Lampiran</label>
            <input type="number" class="form-control" id="exampleInputEmail3" placeholder="ex :1" name="SuratLampiran" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kepada  Yth</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="SuratKepada" required>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Perihal</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="SuratPerihal" required>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Isi Surat</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="SuratIsi" required>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Tembusan Eksternal</label>
            <input type="text" class="form-control" id="exampleInputCity1"name="SuratTembusanEksternal" required>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Tembusan Internal</label>
            <select class="form-control" id="exampleSelectGender" name="SuratTembusanInternal" required>
              @foreach ($employee as $item)
                <option value="{{ $item->UserProfileId }}">{{ $item->role->RoleName}} - {{ $item->UserName}}</option>
              @endforeach
            </select>         
            </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
@endsection