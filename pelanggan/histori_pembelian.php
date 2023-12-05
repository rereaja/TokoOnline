<?php
    include "header.php";
    error_reporting(E_ERROR | E_PARSE);
?>
<div class="container" style="margin-top:25px">
<div><img src="/tokoonline/asset/historybeli.png" width="480" align="center" hspace="350" vspace="5" style="margin-top:20px"></div>
<table class="table" style="background:#C7B290">
    <thead style="background:#6B5A3C;color:white;">
        <th>NO</th>
        <th>Tanggal Beli</th>
        <th>Nama Produk</th>
        <th>Foto</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th colspan="3">Aksi</th>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
           $qry_histori=mysqli_query($koneksi,"select * from transaksi join pelanggan on pelanggan.id_pelanggan=transaksi.id_pelanggan where transaksi.id_pelanggan = '".$_SESSION['id_pelanggan']."' order by id_transaksi desc;");
           $no=0;
            if (mysqli_num_rows($qry_histori) > 0) {
                while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            $hapus="<a href='hapus_histori.php?id_transaksi=$dt_histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus Histori ini?)' class='btn btn-danger'>X
            </a>";

            //menampilkan status sudah kembali atau belum
            //$qry_cek_diterima=mysqli_query($koneksi,"select * from penerimaan where id_transaksi = '".$dt_histori['id_transaksi']."'");
            //if(mysqli_num_rows($qry_cek_diterima)>0){
                //$dt_diterima=mysqli_fetch_array($qry_cek_diterima);
               // $status_diterima="<label class='alert alert-success'>Sudah Diterima</label>";
               // $button_diterima="";
            //} else {
               // $status_diterima="<label class='alert alert-danger'>Belum diterima</label>";
               // $button_diterima="<a href='diterima.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Produk berhasil diterima\")'>Terima</a>";
           // }
        ?>
            <tr>  
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td>
                    <ul>
                    <?php
                    $qry_histori1=mysqli_query($koneksi,"select * from detail_transaksi JOIN produk ON detail_transaksi.id_produk = produk.id_produk where  id_transaksi='".$dt_histori['id_transaksi']."'");
                    while($dt_histori1=mysqli_fetch_array($qry_histori1)){
                    ?>
                    <?=$dt_histori1['nama_produk']?><br>
                    <td><img src="/tokoonline/asset/<?=$dt_histori1['foto_produk']?>" width="100px"></td>
                    <td><?=$dt_histori1['qty']?></td><br>
                    <td><?="<span>Rp. </span>".$dt_histori1['harga']?></td>
                    <td><?="<span>Rp. </span>".$dt_histori1['subtotal']?></td>
                    
                </li>
                    <?php 
                    } 
                    ?>
                    </ul>
                </td>
                <td><?=$hapus?></td> 
                <td>
            </tr>
            <?php
                }
            } else {
                echo("
                <tr>
                 <td colspan='8'><p style='text-align:center'>Tidak Ada Histori</p></td>
                </tr>  
                ");
             }
        ?> 
    </tbody>
</table>
<a href="menu.php" class="btn" style="background: #6B5A3C; color:white">Nambah lagi yuk •ᴗ•</a>