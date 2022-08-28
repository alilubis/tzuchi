@extends('template')

@section('header-content')
<div class="row">
  <div class="col-sm-6">
    <h1 class="m-0"><strong>PENDAFTARAN</strong></h1>
  </div>
  <div class="col-sm-6 float-right">
    <a href="patient" class="btn btn-danger float-right">Kembali</a>
    <!-- <a href="patient" class="btn btn-success float-right">Back</a> -->
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
      <!-- form start -->
      <form method="POST" action="{{ route('patient.create') }}">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="no_seri">Nomor Seri Formulir</label>
                <input type="number" name="no_seri" class="form-control @error('no_seri') is-invalid @enderror" placeholder="Enter Nomor Seri Formulir" value="{{ old('no_seri') }}">
                @error('no_seri') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="location">Lokasi Pendaftaran</label>
                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="Lokasi Pendaftaran" value="{{ old('location') }}">
                @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="sickness">Jenis Penyakit</label>
                <input type="text" name="sickness" class="form-control @error('sickness') is-invalid @enderror" placeholder="Jenis Penyakit" value="{{ old('sickness') }}">
                @error('sickness') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="name">Nama Pasien</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Pasien" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="id_card">No KTP</label>
                <input type="number" name="id_card" class="form-control @error('name') is-invalid @enderror" placeholder="No KTP" value="{{ old('id_card') }}">
                @error('id_card') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="place_of_birth">Tempat Lahir</label>
                <input type="text" name="place_of_birth" class="form-control @error('place_of_birth') is-invalid @enderror" placeholder="Tempat Lahir" value="{{ old('place_of_birth') }}">
                @error('place_of_birth') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="date_of_birth">Tanggal Lahir</label>
                <input type="text" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" placeholder="Tanggal Lahir" value="{{ old('date_of_birth') }}">
                @error('date_of_birth') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <!-- <div class="form-group">
                <label>Date:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div> -->
              <div class="form-group">
                <label for="age">Usia</label>
                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Usia" value="{{ old('age') }}">
                @error('age') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" class="custom-select rounded-0 @error('gender') is-invalid @enderror" value="{{ old('gender') }}'">
                  <option>Pria</option>
                  <option>Wanita</option>
                </select>
                @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="address">Alamat Lengkap</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat Lengkap" value="{{ old('address') }}">
                @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="domicile">Alamat Tinggal</label>
                <input type="text" name="domicile" class="form-control @error('domicile') is-invalid @enderror" placeholder="Alamat Tinggal" value="{{ old('domicile') }}">
                @error('domicile') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="phone">No Telp/WA</label>
                <input type="number" name="phone" class="form-control @error('domicile') is-invalid @enderror" placeholder="No Telp/WA" value="{{ old('phone') }}">
                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="family_name">Nama Keluarga Yang Bisa Dihubungi</label>
                <input type="text" name="family_name" class="form-control @error('family_name') is-invalid @enderror" placeholder="Nama Keluarga Yang Bisa Dihubungi" value="{{ old('family_name') }}">
                @error('family_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="family_phone">No Telp/WA Keluarga</label>
                <input type="number" name="family_phone" class="form-control @error('family_phone') is-invalid @enderror" placeholder="No Telp/WA Keluarga" value="{{ old('family_phone') }}">
                @error('family_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="island">Pulau</label>
                <input type="text" name="island" class="form-control @error('island') is-invalid @enderror" placeholder="Pulau" value="{{ old('island') }}">
                @error('island') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="queue_number">No Antri</label>
                <input type="text" name="queue_number" class="form-control @error('queue_number') is-invalid @enderror" placeholder="No Antri"  value="{{ old('queue_number') }}">
                @error('queue_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-success float-right">Simpan</button>
        </div>
      </form>
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