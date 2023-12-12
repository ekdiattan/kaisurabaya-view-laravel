@extends('partials.main')

@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Surat Internal</h4>
            <form class="forms-sample" action="/suratinternal/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nomor Surat</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="ex : XLSM123" name="NomorSurat">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Tanggal Surat</label>
                <input type="date" class="form-control" id="exampleInputName1" placeholder="TanggaSurat" name="TanggaSurat">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Perihal</label>
                <input type="text" class="form-control" id="exampleInputName1" name="PerihalSurat">
              </div>
              <div class="form-group">
                <label>File Surat</label>
                <input type="file" class="form-control" id="exampleInputName1" placeholder="FileSurat" name="FileSurat">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Diteruskan Kepada</label>     
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Ex : PT. Rajawali Nusindo" name="DiteruskanKepada">        
            </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
@endsection