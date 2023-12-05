<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_produk=mysqli_query($koneksi,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<div class="container rounded" style="margin-top:10px">
<div><img src="/tokoonline/asset/buyproduct.png" width="480" align="center" hspace="350" vspace="5" style="margin-top:20px"></div>
    <div class="row" style="background-color:#C7B290">
        <div class="col-md-4">
            <img src="/tokoonline/asset/<?=$dt_produk['foto_produk']?>" class="card-img-top">
        </div>
        <div class="col-md-8">
            <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
                <table class="table table-hover table-striped text-white">
                    <thead style="color:white; font-weight:500">
                        <tr>
                            <td>Name Produk</td><td><?=$dt_produk['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td><td><?=$dt_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Produk</td><td><input type="number" name="qty" value="1" 
                                style="border-radius:7px; border:none; padding:0 0 0 10px"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn" style="background-color:#80624D; color:white"type="submit" value="Add to cart"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>
<?php 
    include "footer.php";
?>
