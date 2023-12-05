<?php

    if($_GET['id']){
        include "koneksi.php";
        $id_transaksi=$_GET['id'];
        $cek_diterima=mysqli_query($koneksi, "select * from transaksi where id_transaksi = '".$id_transaksi."' ");
        $dt_terimaa=mysqli_fetch_array($cek_diterima);
        if(strtotime($dt_terimaa['tgl_diterimaa'])>=strtotime(date('Y-m-d'))){
            $denda=0;
        } else{
            $tanggal_diterima = new DateTime();
            $tgl_harus_diterima = new DateTime($dt_diterimaa['tgl_diterimaa']); 
            $selisih_hari = $tanggal_diterima->diff($tgl_harus_diterima)->d;
        }
        mysqli_query($koneksi, "insert into penerimaan (id_penerimaan_produk, tanggal_penerimaan) value('".$id_penerimaan_produk."','".date('Y-m-d')."')");
        header('location: histori_pembelian.php');
    }
?>