
<?php
session_start();
include "koneksi.php";
$cart = @$_SESSION['cart'];
$idPel = @$_SESSION['id_pelanggan'];
$date = date("Y-m-d");
if (count($cart) > 0) {
    $tgl_diterima=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')),date('Y')));
    mysqli_query($koneksi, "insert into transaksi (id_pelanggan, tgl_transaksi, tgl_diterimaa) VALUE ('$idPel', '$date', '$tgl_diterima')");
    $id = mysqli_insert_id($koneksi);
    
    foreach ($cart as $key_pdk => $val_pdk) {
        $idProd = $val_pdk['id_produk'];
        $val_pdk['qty'] ;
        $subtotal = $val_pdk['qty'] * $val_pdk['harga'];
        mysqli_query($koneksi, "insert into detail_transaksi(id_transaksi,qty,subtotal,id_produk) value('" . $id . "','" . $val_pdk['qty'] . "','" . $subtotal . "','".$idProd."')");
        mysqli_error($koneksi);
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
}
?>

