@extends('layouts.master')
@section('title','Inventaris')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Inventaris</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="table-responsive text-nowrap">
        <a href="{{ route('invent.create') }}" class="btn btn-primary btn-sm mx-2 my-2" style="float: right">Tambah Inventaris</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama Alat</th>
              <th>Tanggal Pembelian</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @php
                $no=1;
            @endphp
            <tr>
                <td>{{ $no++ }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-edit-alt me-2"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-2"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
@endsection
