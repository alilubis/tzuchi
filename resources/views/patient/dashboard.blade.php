@extends('template')

@section('header-content')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Dashboard</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <!-- <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard v1</li>
    </ol> -->
  </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>0</h3>

        <p>PENDAFTARAN</p>
      </div>
      <div class="icon">
        <i class="nav-icon fa fa-list-alt"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>0</h3>

        <p>PEMERIKSAAN FISIK</p>
      </div>
      <div class="icon">
      <i class="nav-icon fa fa-stethoscope"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>0</h3>

        <p>PEMERIKSAAN MATA</p>
      </div>
      <div class="icon">
        <i class="nav-icon fa fa-eye"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>0</h3>

        <p>LAB</p>
      </div>
      <div class="icon">
      <i class="nav-icon fa fa-flask"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
@endsection