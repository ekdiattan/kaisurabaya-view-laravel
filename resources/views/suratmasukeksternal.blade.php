@extends('partials.main')

@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Surat Eksternal</h4>
            <form class="forms-sample" action="surateksternal/store" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nomor Surat</label>
                <input type="text" class="form-control" placeholder="ex : KA-2909-2020" name="NomorSurat">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Tanggal Surat</label>
                <input type="date" class="form-control" id="exampleInputName1" placeholder="ex : 23-10-2023" name="TanggalSurat">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Perihal</label>
                <input type="text" class="form-control" id="exampleInputName1" name="PerihalSurat">
              </div>
              <div class="form-group">
                <label>File Surat</label>
                <input type="file" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Diteruskan Kepada</label>
                <select class="form-control" id="exampleSelectGender" name="DiteruskanKepada">
                  @foreach ($role as $item)
                    <option value="{{ $item->RoleId }}">{{ $item->RoleName }}</option>
                  @endforeach
              </select>                
              </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
@endsection