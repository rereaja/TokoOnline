<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container col-15" align="center">
    <div class="col-md- py-5">
    <div><img src="/tokoonline/asset/tambahpelanggan.png" width="480" align="center" hspace="320" vspace="5" style="margin-top:10px"></div>
        <form action="proses_tambah_pelanggan.php" method="post">
            <div class="col-4">
            <p align="left" style="font-weight:500;color:#AF9260">Nama Pelanggan :  </p> 
            <input type="text" name="nama" value="" class="form-control" required> </div>
            
           <div class="col-4" style="margin-top: 20px">
            <p align="left" style="font-weight:500;color:#AF9260"> Username : </p>
            <input type="text" name="username" value="" class="form-control" required> </div>
            <div class="col-4" style="margin-top: 20px">
            <p align="left" style="font-weight:500;color:#AF9260"> Password : </p>
            <input type="password" name="password" value="" class="form-control"> </div> <br> 
            <input type="submit" name="simpan" value="Submit" class="btn" style="background-color:#AF9260;color:white; margin-right:0px" >
            <a href="tampil_pelanggan.php" class="btn" style="background-color:#AF9260; color:white;margin-right:230px">Back</a>
        </form>
    </div>
</div>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>