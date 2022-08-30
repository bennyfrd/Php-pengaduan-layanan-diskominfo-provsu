<?php
session_start();
require("register.php");

if($_SESSION["code"] == $_POST["kode"]){


   $nik=$_POST['nik'];
   $nama=$_POST['nama'];
   $usrnm=$_POST['username'];
   $pass=$_POST['password'];
   $telp=$_POST['telp'];
   $kode=$_POST['kode'];

$register = mysqli_query($koneksi, "INSERT INTO masyarakat (nik, nama, username, password, telp, kode) VALUES ('$nik', '$nama', '$usrnm', '$pass', '$telp', '$kode')") or die ("<h1>ILEGAL TEXT DETECTED !</h1><b>TERJADI KESALAHAN PADA SISTEM HARAP HUBUNGI ADMINISTRATOR</b>");
            header("Location:?berhasil=register");
    //jika code captcha salah mmaka akan kembali ke halaman sebelumnya
   
}else{ 


 echo "<script>alert('captcha yang anda masukkan salah');window.history.go(-1);</script>";
        }


?>