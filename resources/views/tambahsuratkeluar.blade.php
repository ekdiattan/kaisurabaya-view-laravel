@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Surat Keluar</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Nomor Surat</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Tanggal Surat</label>
            <input type="date" class="form-control" id="exampleInputEmail3" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Sifat Surat</label>
            <select class="form-control" id="exampleSelectGender">
                <option>Rahasia</option>
                <option>Penting</option>
                <option>Rutin</option>
                <option>Terbatas</option>
              </select>          
            </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Lampiran</label>
            <input type="number" class="form-control" id="exampleInputEmail3" placeholder="ex :1" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kepada  Yth</label>
            <input type="text" class="form-control" id="exampleInputEmail3">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Perihal</label>
            <input type="date" class="form-control" id="exampleInputCity1">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Isi Surat</label>
            <input type="text" class="form-control" id="exampleInputCity1" required>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Tembusan Eksternal</label>
            <input type="textarea" class="form-control" id="exampleInputCity1" required>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Tembusan Internal</label>
            <select class="form-control" id="exampleSelectGender">
                <option>Manger SDM & Umum - Wawik Suharjono</option>
                <option>Asisten Manager SDM - Agus Widodo</option>
                <option>Pelaksana SDM - Tatum Berlian</option>
            </select>         
            </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
@endsection