@extends('template')
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

@section('header-content')
<div class="row">
  <div class="col-sm-6">
    <h1 class="m-0"><strong>LIST PENDAFTARAN</strong></h1>
  </div>
  <div class="col-sm-6 float-right">
    <a href="register" class="btn btn-success float-right">Tambah Data</a>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- jquery validation -->
    <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="list_pendaftaran" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No Formulir</th>
                    <th>Nama</th>
                    <th>Jenis Penyakit</th>
                    <th>Lokasi Pendaftaran</th>
                    <th>No KTP</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($patients as $patient)
                  <tr>
                    <td>{{$patient->no_seri}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->sickness}}</td>
                    <td>{{$patient->location}}</td>
                    <td>{{$patient->id_card}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    <!-- /.card -->
  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">

  </div>
  <!--/.col (right) -->
</div>
@endsection

