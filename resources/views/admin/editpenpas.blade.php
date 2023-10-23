<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Puskesmas Gattareng - Pendaftaran Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-pkm.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-pkm.png') }}" sizes="16x16">
    <style>
      /* CSS untuk footer */
      body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .container {
        flex: 1;
      }
      footer {
        text-align: center;
        padding: 10px;
        background-color: #f8f9fa; /* Warna latar belakang footer */
        position: absolute;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Pasien</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          @if (Session::has('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          @endif
          <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Desa Pasien</label>
              <select class="form-select" name="id_desa" aria-label="Default select example">
                <option selected>{{ $data->id_desa}}</option>
                <option value="1">Desa Benteng Gantarang</option>
                <option value="2">Desa Benteng Malewang</option>
                <option value="3">Desa Bonto Macinna</option>
                <option value="4">Desa Bonto Masila</option>
                <option value="5">Desa Bonto Raja</option>
                <option value="6">Desa Gattareng</option>
                <option value="7">Desa Padang</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Lengkap (Jalan, RT/RW)</label>
              <textarea name="alamat" class="form-control">{{ $data->alamat}}</textarea>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Poli Tujuan</label>
              <select class="form-select" name="politujuan" aria-label="Default select example">
                <option selected>{{ $data->politujuan}}</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli KIA">Poli KIA</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tanggal}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer>
      &copy; {{ date('Y') }} Puskesmas Gattareng
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>