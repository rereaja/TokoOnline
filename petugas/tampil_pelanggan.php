<?php
include "header.php"; 
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div><img src="/tokoonline/asset/tampilpelanggan.png" width="480" align="center" hspace="390" vspace="5" style="margin-top:50px"></div>
<div class="container rounded" style="margin-top:-10px">
    <table class="table" style="background-color:#C7B290;color:white">
        <thead style="background:#6B5A3C;color:white">
            <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                <th>USERNAME</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($koneksi,"select * from user where role = 'pelanggan' ");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
            $no++;?>
            <tr>            
                <td><?=$no?>
                </td><td><?=$data_user['nama']?></td> 
                <td><?=$data_user['username']?></td> 
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_pelanggan.php" type="button" class="btn" style="background-color:#6B5A3C;color:white" >
        Tambah Pelanggan 
        </a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>