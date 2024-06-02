@extends('layout')
@section('content')

<div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="m-b-10">{{ $judul }}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title" style="float: left">{{ "Data Inventaris" }}</h2>
          <a href="tambahinventaris" class="btn " style="float: right"><i class="fa-solid fa-folder-plus text-secondary" ></i></a>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kode Inventaris</th>
                <th>Kondisi</th>
                <th>Jumlah</th>
                <th>Jenis</th>
                <th>Ruang</th>
                <th>tanggal_register</th>
                <th>Petugas</th>
                <th>Keterangan</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
              <tr>
                 <th>{{ $loop->iteration  }}</th>
                 <th>{{ $d->nama }}</th>
                 <th>{{ $d->kode_inventaris }}</th>
                 <th>{{ $d->kondisi }}</th>
                 <th>{{ $d->jumlah }}</th>
                 <th>{{ $d->id_jenis }}</th>
                 <th>{{ $d->id_ruang }}</th>
                 <th>{{ $d->tanggal_register }}</th>
                 <th>{{ $d->id_petugas }}</th>
                 <th>{{ $d->d_keterangan = $d->keterangan > 0 ? 'Tersedia' : 'Tidak Tersedia'; }}</th>                              
                 <th>
                   <a href="editinventaris{{ $d->id_inventaris }}" class="btn"><i class="fa-solid fa-pencil text-warning"></i></a>
                   <a href="hapusinventaris{{ $d->id_inventaris }}" class="btn"><i class="fas fa-trash-alt text-danger"></i></a>
                 </th>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection