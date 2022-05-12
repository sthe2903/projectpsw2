@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')
<body style="background-color:#D4D4D4;">
<br>
<div class="container">
    <a href="" class="text-start" style="text-decoration: none;">Kembali ke Daftar Menemukan</a><br><br>
    <form action="" style="width:1200px; background-color:white; padding:30px 30px 30px 30px;">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pemilik</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">No.Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ciri-ciri</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
          <select class="form-select" aria-label="Default select example">
            <option selected>--Pilih Kategori--</option>
            <option value="1">Elektronik</option>
            <option value="2">Sehari-hari</option>
            <option value="3">Uang</option>
          </select></div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile">
          </div>
         </div>
         <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="button">Laporkan Barang Hilang!</button>
          </div>
    </form><br>
</body>
    @endsection
    
    @section('foother')
    <br>
    @endsection