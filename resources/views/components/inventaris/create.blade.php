@extends('layouts.master')
@section('title','Form Inventaris')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Inventaris</h4>
    <!-- Basic Bootstrap Table -->
            <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Default</h5>
                  <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="defaultFormControlInput" class="form-label">Nama Alat</label>
                          <input type="text" name="nama_invent" class="form-control" id="defaultFormControlInput">
                        </div>
                        <div class="form-group">
                          <label for="defaultFormControlInput" class="form-label">Tanggal Pembelian</label>
                          <input type="text" name="tanggal_pembalian" class="form-control" id="defaultFormControlInput">
                        </div>
                        <div class="form-group">
                          <label for="defaultFormControlInput" class="form-label">Jumlah</label>
                          <input type="number" name="jumlah" class="form-control" id="defaultFormControlInput">
                        </div>
                        <div class="form-group">
                          <label for="defaultFormControlInput" class="form-label">Harga</label>
                          <input type="number" name="harga" class="form-control" id="defaultFormControlInput">
                        </div>
                        <div class="form-group">
                          <label for="defaultFormControlInput" class="form-label">Gambar</label>
                          <input type="file" name="gambar" class="form-control" id="defaultFormControlInput">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-2" style="float: right">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
    <!--/ Basic Bootstrap Table -->
</div>
@endsection
