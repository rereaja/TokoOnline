<?php 
    include "header.php";
?>
<div class="container rounded" style="margin-top:10px">
<div><img src="/tokoonline/asset/cartproduct.png" width="480" align="center" hspace="350" vspace="5" style="margin-top:20px"></div>
    <table class="table table-hover striped" style="background-color:#C7B290;color:white">
        <thead style="background:#6B5A3C;color:white">
            <tr>
                <th>NO</th>
                <th>ID Produk</th>
                <th>Name Produk</th>
                <th>Harga</th>
                <th>Jumlah Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
            ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['id_produk']?></td>
                    <td><?=$val_produk['nama_produk']?></td>
                    <td><?=$val_produk['harga'] *$val_produk['qty'] ?></td>
                    <td><?=$val_produk['qty']?></td>
                    <td><a href="hapuscart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
        <a href="checkout.php" class="btn" style="background-color:#6B5A3C; color:white;">Checkout</a>
</div>
<?php 
    include "footer.php";
?>
