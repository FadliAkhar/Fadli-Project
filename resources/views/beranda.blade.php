@extends('layout')
 @section('content')
 
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Beranda</li>
            <li class="breadcrumb-item active">Beranda</li>
          </ol> 
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <h3>{{ $title }}</h3>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $isi }}</h5>
        </div>
      </div>
  </div>
</div>
  <!-- /.content -->
@endsection