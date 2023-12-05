<?php
if($_POST){
    $nama=$_POST['nama'];
    $username    =$_POST['username'];
    $password    =$_POST['password'];
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into user (nama, username, password) value ('".$nama."','".$username."','".$password."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
?>