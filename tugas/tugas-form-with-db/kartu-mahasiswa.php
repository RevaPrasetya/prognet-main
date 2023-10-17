<?php
    require("koneksi.php");
?>

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
    
<div class="container" style="">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/icon/soft-star-red.svg" alt="" width="72" height="57">
        <h2>Kartu Mahasiswa</h2>
        <p class="lead">Hasil dari submit form</p>
        <a class="btn btn-primary btn-sm" href="index.php">Kembali ke formulir</a>
      </div>
  
      <div class="row g-5">
        <?php
            $query =  mysqli_query($koneksi, "SELECT * FROM data_mahasiswa" );

            //echo $query;
            while($row = mysqli_fetch_assoc($query)){
        ?>

        <div class="col-md-6 col-lg-6 col-sm-12">
            
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="d-flex text-black">
                    <?php
                        if(!empty($row["link_gambar_profil"])){

                    ?>
                    <div class="flex-shrink-0">
                        <img src="<?php $gambar = $row["link_gambar_profil"]; echo $gambar ?>"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                    </div>
                    <?php
                        }
                    ?>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="mb-4">
                            <?php
                                echo $row["first_name"];
                            ?> 
                            <span class="font-weight-italic">
                                <?php
                                    echo $row["last_name"];
                                ?> 
                            </span>
                        </h3>
                        <div>
                            <p class="small text-muted mb-1">NIM</p>
                            <p class="mb-0">
                                <p class="mb- pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $row["nim"];
                                    ?> 
                                </p>
                            </p>
                        </div>
                        <div>
                            <p class="small text-muted mb-1">Jenis Kelamin</p>
                            <p class="mb-0">
                                <p class="mb- pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $row["jenkel"];
                                    ?> 
                                </p>
                            </p>
                        </div>
                        <div>
                            <p class="small text-muted mb-1">Email</p>
                            <p class="mb-0">
                                <p class="mb- pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $row["email"];
                                    ?> 
                                </p>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                        style="background-color: #F6F7F9;">
                            <div>
                                <p class="small text-muted  mb-1">Fakultas</p>
                                <p class="mb-0">
                                    <p class="mb- pb-1" style="color: #2b2a2a;">
                                        <?php
                                            echo $row["fakultas"];
                                        ?> 
                                    </p>
                                </p>
                            </div>
                            <div class="px-3">
                                <p class="small text-muted mb-1">Prodi</p>
                                <p class="mb-0">
                                    <p class="mb- pb-1" style="color: #2b2a2a;">
                                        <?php
                                            echo $row["prodi"];
                                        ?> 
                                    </p>
                                </p>
                            </div>
                        </div>
                        
                        <div>
                            <p class="small text-muted mb-1 ">Alamat Tinggal</p>
                            <p class="mb-0">
                                <p class="mb- pb-1" style="color: #2b2a2a;">
                                    <?php
                                        echo $row["alamat"];
                                    ?> 
                                </p>
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <?php
            };
        ?>

        
        <?php
            $query =  mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa" );
            while($row = mysqli_fetch_assoc($query)){
                echo '
                <div class="col-md-6 col-lg-6 col-sm-12">
                    
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <img src="'.$row["link_gambar_profil"].'"
                                alt="Generic placeholder image" class="img-fluid"
                                style="width: 180px; border-radius: 10px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="mb-4">
                                    '.$row["first_name"].'
                                    <span class="font-weight-italic">
                                        '.$row["last_name"].'
                                    </span>
                                </h3>
                                <div>
                                    <p class="small text-muted mb-1">NIM</p>
                                    <p class="mb-0">
                                        <p class="mb- pb-1" style="color: #2b2a2a;">
                                            '.$row["nim"].' 
                                        </p>
                                    </p>
                                </div>
                                <div>
                                    <p class="small text-muted mb-1">Jenis Kelamin</p>
                                    <p class="mb-0">
                                        <p class="mb- pb-1" style="color: #2b2a2a;">
                                            '.$row["jenkel"].'
                                        </p>
                                    </p>
                                </div>
                                <div>
                                    <p class="small text-muted mb-1">Email</p>
                                    <p class="mb-0">
                                        <p class="mb- pb-1" style="color: #2b2a2a;">
                                            '.$row["email"].'
                                        </p>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                style="background-color: #F6F7F9;">
                                    <div>
                                        <p class="small text-muted  mb-1">Fakultas</p>
                                        <p class="mb-0">
                                            <p class="mb- pb-1" style="color: #2b2a2a;">
                                               '.$row["fakultas"].' 
                                            </p>
                                        </p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">Prodi</p>
                                        <p class="mb-0">
                                            <p class="mb- pb-1" style="color: #2b2a2a;">
                                                '.$row["prodi"].'
                                            </p>
                                        </p>
                                    </div>
                                </div>
                                
                                <div>
                                    <p class="small text-muted mb-1 ">Alamat Tinggal</p>
                                    <p class="mb-0">
                                        <p class="mb- pb-1" style="color: #2b2a2a;">
                                            '.$row["alamat"].'
                                        </p>
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>';
            };
        ?>


      </div>
    </main>
  
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">&copy; Reva Prasetya</p>
    </footer>
  </div>

  <script src="../../lib/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>