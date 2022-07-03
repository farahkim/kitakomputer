<?php
include "../../koneksi.php";
//Menerima data dengan Methode GET
$kode=$_GET['kode'];
$hapus="DELETE from hp Where kode='$kode'";
$hasil=$mysqli->query($hapus);
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
            <h4> Data Berhasil DiHapus </h4>
            <p class="sub__text"> Akan kembali ke halaman lihat data dalam 5..4..3..2..1</p>
        </div>
    </div>
</div>

<?php

}
else {
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
<meta http-equiv="refresh" content="1;url=../read/lihat_data.php">