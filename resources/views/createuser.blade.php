@extends('partials.main')

@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Pengguna</h4>
        <form class="forms-sample" action="" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Pegawai</label>
            <select class="form-control" id="exampleSelectGender">
                <option>PILIH</option>
                <option>Penting</option>
                <option>Rutin</option>
              </select>             
            </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="ex : attan@gmail.com">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Password</label>
            <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Password">
          </div>
        </form>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a class="btn btn-light" href="/main">Cancel</button>
      </div>
@endsection