<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<!-- <body style="background-color:white">
<h2 align="center" style="color:#AF9260; margin-top:30px;">OUR BAKERY MENU</h2> -->

</body>
</html>
<div><img src="asset/menuLaras.png" width="480" align="center" hspace="410" vspace="50"></div>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($koneksi,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3" style="margin-top:-70px">
            <div class="card" style="width: 18rem;margin-left:5px; margin-top:30px;">
              <img src="asset/<?=$dt_produk['foto_produk']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p style="font-size:13px" class="card-text"><?=substr($dt_produk['deskripsi'], 0,200)?></p>
               <p class="card-text"> Rp. <?=substr($dt_produk['harga'], 0,30)?></p>
                <a href="login.php" class="btn btn-beli" style="background-color:tan; color:white;">Buy Now</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>