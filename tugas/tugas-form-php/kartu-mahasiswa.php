<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Form - 2205551015</title>

    <link rel="shortcut icon" href="../../assets/icon/soft-star.svg" type="image/x-icon">

    <link rel="stylesheet" href="../../lib/bootstrap/bootstrap.min.css">
</head>
<body>
    
<div class="container" style="max-width: 500px">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/icon/soft-star-red.svg" alt="" width="72" height="57">
        <h2>Kartu Mahasiswa</h2>
        <p class="lead">Hasil dari submit form</p>
      </div>
  
      <div class="row g-5">
        <?php
            $nim = $_POST['nim'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $jenkel = $_POST['jenis_kelamin'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $fakultas = $_POST['fakultas'];
            $prodi = $_POST['prodi']
        ?>
        <div class="col-md-12 col-lg-12">
            
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="d-flex text-black">
                    <?php
                        if(!empty($_POST['gambar_profil'])){

                    ?>
                    <div class="flex-shrink-0">
                        <img src="<?php $gambar = $_POST['gambar_profil']; echo $gambar ?>"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                    </div>
                    <?php
                        }
                    ?>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1">
                            <?php
                                echo $first_name;
                            ?> 
                            <span class="font-weight-italic">
                                <?php
                                    echo $last_name;
                                ?> 
                            </span>
                        </h5>
                        <div>
                            <p class="small text-muted mb-1">NIM</p>
                            <p class="mb-0">
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $nim;
                                    ?> 
                                </p>
                            </p>
                        </div>
                        <div>
                            <p class="small text-muted mb-1">Jenis Kelamin</p>
                            <p class="mb-0">
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $jenkel;
                                    ?> 
                                </p>
                            </p>
                        </div>
                        <div>
                            <p class="small text-muted mb-1">Email</p>
                            <p class="mb-0">
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $email;
                                    ?> 
                                </p>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                        style="background-color: #efefef;">
                            <div>
                                <p class="small text-muted mb-1">Fakultas</p>
                                <p class="mb-0">
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                        <?php
                                            echo $fakultas;
                                        ?> 
                                    </p>
                                </p>
                            </div>
                            <div class="px-3">
                                <p class="small text-muted mb-1">Prodi</p>
                                <p class="mb-0">
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                        <?php
                                            echo $prodi;
                                        ?> 
                                    </p>
                                </p>
                            </div>
                        </div>
                        
                        <div>
                            <p class="small text-muted mb-1">Alamat Tinggal</p>
                            <p class="mb-0">
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $alamat;
                                    ?> 
                                </p>
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
    </main>
  
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">&copy; Reva Prasetya</p>
    </footer>
  </div>

  <script src="../../lib/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>