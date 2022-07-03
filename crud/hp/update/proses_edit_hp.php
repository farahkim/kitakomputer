<?php
include "../../koneksi.php";


$id = !empty($_POST['id']) ? $_POST['id'] : '';
$kode = !empty($_POST['kode']) ? $_POST['kode'] : '';
$stok = !empty($_POST['stok']) ? $_POST['stok'] : '';
$merk = !empty($_POST['merk']) ? $_POST['merk'] : '';
$tipe = !empty($_POST['tipe']) ? $_POST['tipe'] : '';
$kondisi = !empty($_POST['kondisi']) ? $_POST['kondisi'] : '';
$harga = !empty($_POST['harga']) ? $_POST['harga'] : '';
$deskripsi = !empty($_POST['deskripsi']) ? $_POST['deskripsi'] : '';


//Membuat Variabel untuk menyimpan Foto atau Gambar
$lokasi_foto= !empty($_FILES['foto']['tmp_name']) ? $_FILES['foto']['tmp_name'] : ''; 
$nama_foto= !empty($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';  
$tipe_foto= !empty($_FILES['foto']['type']) ? $_FILES['foto']['type'] : ''; 
$folder="../create/gambar/$nama_foto";
//Membuat Nofitikasi upload Foto atau Gambar
if(!empty($lokasi_foto))
{
    move_uploaded_file($lokasi_foto,$folder);
}
//Membuat Query Edit Data
$edit="UPDATE hp SET kode='$id', stok='$stok', merk='$merk', tipe='$tipe', kondisi='$kondisi',harga='$harga' , deskripsi='$deskripsi' ,foto='$nama_foto'
WHERE kode='$kode'";
$hasil=$mysqli->query($edit);
//Notifikasi keberhasilan Edit Data
if($hasil)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Poiret+One&family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../main.css">

    <div id="pop--click" class="popup" style="transition: 5s">

        <div class="popup__content">
            <img src="../../gambar/berhasil.jpg" alt="popup image"> 

            <a href="#" class="close"></a>

            <div class="content--text">
                <h4> Data Berhasil Diedit </h4>
                <p class="sub__text"> Akan kembali ke halaman lihat data dalam 5..4..3..2..1</p>
            </div>
        </div>
    </div>
    
    <?php
}
else
{
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Poiret+One&family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../main.css">
    <div id="pop--click" class="popup" style="transition: 5s">

        <div class="popup__content">
            <img src="../../gambar/gagal.png" alt="popup image"> 

            <a href="#" class="close"></a>

            <div class="content--text">
                <h4> Data Gagal Diedit </h4>
                <p class="sub__text"> Akan kembali ke halaman lihat data dalam 5..4..3..2..1</p>
            </div>
        </div>
    </div>
    </html>

    <?php
}
?>
<meta http-equiv="refresh" content="5;url=../read/lihat_data.php">