<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Puskesmas Gattareng - Pendaftaran Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Pasien</h1>
    <a href="/admin/DaftarPenpas" style="float: right; margin-right: 15px;">Daftar Pasien</a>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          @if (Session::has('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          @endif
          <form action="{{ route('insertdata') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Pasien</label>
              <select class="form-select" name="alamat" aria-label="Default select example">
                <option selected>Pilih Alamat</option>
                <option value="Desa Benteng Gantarang">Desa Benteng Gantarang</option>
                <option value="Desa Benteng Malewang">Desa Benteng Malewang</option>
                <option value="Desa Bonto Macinna">Desa Bonto Macinna</option>
                <option value="Desa Bonto Masila">Desa Bonto Masila</option>
                <option value="Desa Bonto Raja">Desa Bonto Raja</option>
                <option value="Desa Gattareng">Desa Gattareng</option>
                <option value="Desa Padang">Desa Padang</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Poli Tujuan</label>
              <select class="form-select" name="politujuan" aria-label="Default select example">
                <option selected>Pilih Poli</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli KIA">Poli KIA</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
