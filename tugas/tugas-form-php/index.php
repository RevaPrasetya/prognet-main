<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Javascript - 2205551015</title>

    <link rel="shortcut icon" href="../../assets/icon/soft-star.svg" type="image/x-icon">

    <link rel="stylesheet" href="../../lib/bootstrap/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/icon/soft-star-red.svg" alt="" width="72" height="57">
        <h2>Form Mahasiswa</h2>
        <p class="lead">Form untuk memasukkan data mahasiswa.</p>
      </div>
  
      <div class="row g-5">
        <div class="col-md-12 col-lg-12">
          <form class="needs-validation" action="index.php" method="POST" novalidate>
            <div class="row g-3">
                <div class="col-12">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="number" class="form-control" id="nim" placeholder="220*******" required>
                  <div class="invalid-feedback">
                    Masukan Nomor Induk Mahasiswa anda.
                  </div>
                </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Masukan nama depan yang benar
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Masukan nama belakang yang benar
                </div>
              </div>
  
              <label class="mb-1 ">Jenis Kelamin</label>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="laki_laki" name="jenis_kelamin" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="laki_laki">Laki laki</label>
                </div>
                <div class="form-check">
                  <input id="perempuan" name="jenis_kelamin" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <div class="form-check">
                  <input id="rahasia" name="jenis_kelamin" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="rahasia">Rahasia</label>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" placeholder="contoh@example.com" required>
                <div class="invalid-feedback">
                    Masukan alamat email yang benar
                </div>
              </div>
  
              <div class="col-12">
                <label for="address" class="form-label">Alamat Rumah</label>
                <input type="text" class="form-control" id="address" placeholder="Jln Uluwatu" required>
                <div class="invalid-feedback">
                    Masukan alamat tempat tinggal yang benar
                </div>
              </div>
  
              <div class="col-md-6">
                <label for="faculty" class="form-label">Fakultas</label>
                <select class="form-select" id="faculty" required>
                  <option value="">Pilih Fakultas</option>
                  <option>Teknik</option>
                  <option>MIPA</option>
                  <option>Ekonomi dan Bisnis</option>
                  <option>Pariwisata</option>
                  <option>Kedokteran</option>
                </select>
                <div class="invalid-feedback">
                    Pilih fakultas yang benar
                </div>
              </div>
  
              <div class="col-md-6">
                <label for="prodi" class="form-label">Program Studi</label>
                <select class="form-select" id="prodi" required>
                  <option value="">Pilih Program Studi</option>
                  <option>Teknologi Informasi</option>
                  <option>Teknik Mesin</option>
                  <option>Teknik Industri</option>
                  <option>Teknologi Industri</option>
                  <option>Arsitektur</option>
                  <option>Teknik Elektro</option>
                </select>
                <div class="invalid-feedback">
                    Pilih program studi yang benar
                </div>
              </div>
            </div>

            <hr class="my-4">

            
            <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Masukan username" required>
                    <div class="invalid-feedback">
                    Masukkan username yang benar
                    </div>
                </div>
            </div>

            <div class="row g-3 my-2">
                
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="password" placeholder="Masukan password" required>
                        <div class="invalid-feedback">
                        Masukkan password yang benar
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="confirm_password" class="form-label">Password</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="confirm_password" placeholder="Konfirmasi password anda" required>
                        <div class="invalid-feedback">
                            Konfirmasi password anda
                        </div>
                    </div>
                </div>
            </div>
  
            <hr class="my-4">
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="news" required>
              <label class="form-check-label" for="news">Beritahu berita penting melalui Email</label>
            </div>
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info" required>
              <label class="form-check-label" for="save-info">Simpan informasi untuk login selanjutnya</label>
            </div>
  
            <hr class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">Masukkan data</button>
          </form>
        </div>
      </div>
    </main>
  
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">&copy; Reva Prasetya</p>
    </footer>
  </div>

  <script src="../../lib/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="main.js"></script>
</body>
</html>