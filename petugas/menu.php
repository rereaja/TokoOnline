<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

</body>
</html>
<div><img src="/tokoonline/asset/menuLaras.png" width="480" align="center" hspace="410" vspace="50"></div>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($koneksi,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3" style="margin-top:-70px">
            <div class="card" style="width: 18rem;margin-left:5px; margin-top:30px;">
              <img src="/tokoonline/asset/<?=$dt_produk['foto_produk']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p style="font-size:13px" class="card-text"><?=substr($dt_produk['deskripsi'], 0,200)?></p>
               <p class="card-text"> Rp. <?=substr($dt_produk['harga'], 0,30)?></p>

                <a href="ubah_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn" style="background-color:tan; color:white">Ubah<a>
                <a href="hapus_produk.php?id_produk=<?=$dt_produk['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>

              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>