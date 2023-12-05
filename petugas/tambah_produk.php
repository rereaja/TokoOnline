<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div><img src="/tokoonline/asset/tambahmenu.png" width="480" align="center" hspace="390" vspace="5" style="margin-top:50px"></div>
<div class="container rounded col-9"  style="margin-top:-10px; background-color:#C7B290; color: white">
<form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
                Nama Produk  :
                <input class="form-control" type="text" name="nama_produk" aria-label="default input example">
                Deskripsi : <br>
                <textarea id="" name="desk" rows="4" cols="70" required></textarea><br>
                Harga:
                <input type="number" name="harga" value="" class="form-control" style="margin-bottom:10px">
                Foto Produk:
                <input type="file" name="foto_produk" value=""  class="form-control"> <br>
                <input class="btn" style="background-color:#80624D; color:white; margin-bottom:15px" type="submit" value="Add Product">
                <a href="home.php" class="btn" style="background-color:#80624D; color:white;margin-bottom:15px; margin-left:10px">Back</a>
                    </div>
                </div>
            </form>
    </div>
</div> 
</body>
</html>

