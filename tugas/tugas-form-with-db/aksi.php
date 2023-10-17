<?php
    require("koneksi.php");

    
    $nim = $_POST['nim'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $jenkel = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $gambar = $_POST['gambar_profil'];

    $data = mysqli_query($koneksi, "INSERT INTO data_mahasiswa VALUES ('', '$nim',  
     '$first_name', '$last_name', '$jenkel', '$email', '$alamat', '$fakultas', '$prodi','$gambar')");

    
    if(!$data){
        echo mysqli_error($koneksi);
        //header("location: kartu-mahasiswa.php?pesan=gagal");
    }else{
        header("location: kartu-mahasiswa.php?pesan=sukses");
    }

?>