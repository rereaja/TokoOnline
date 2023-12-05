<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo"<script>alert('nama kelas tidak boleh kosong!');location.href='register.php';</script>";
    }elseif(empty($username)){
        echo"<script>alert('username tidak boleh kosong!');location.href='register.php';</script>";
    }elseif(empty($password)){
        echo"<script>alert('password tidak boleh kosong!');location.href='register.php';</script>";
    }else{
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into user (nama, username, password) value ('".$nama."','".$username."','".$password."')");
        if($insert){
            echo "<script>alert('Registered Successfully ');location.href='register.php';</script>";
        }else{
            echo "<script>alert('Registration Failed');location.href='register.php';</script>";
        }
    }
}
?>