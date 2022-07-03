<?php
	require_once("../../login/config.php");
	session_start();
	?>
	
  <?php if(isset($_SESSION['user']) && $_SESSION['user'] != '')
    {
      
    }
    else
    {
        
      header("location:../login/login.php");
      exit;
    }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>Kita Komputer Cilacap</title>
  </head>
  <body>
   
   <div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header">
   			<h3><?php {
				
				echo $_SESSION['user'];

			}				?></h3>
   		</div>
   		
   		
   		<ul class="list-unstyled components">
		
			<li>
   				<a href="../../main/main.php">Kita Komputer</a>
   			</li>

   			<li>
			<li class="active">
   				<a href="../data_barang.php">Data Barang</a>
   			</li>
   			
			<li>
   				<a href="../../home.html" class="dropdown-toggle">Home</a>
   				
   			</li>
   			
   			<li>
   				<a href="../../main/kritik.php">Kritik Saran</a>
   			</li>
   			<li>
   				<a href="../../main/tentang.php">Tentang Kami</a>
   			</li>
   			<li>
   				<a href="../../main/kontak.php">Kontak</a>
   			</li>
   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
			<?php {
				
				echo "<a href=../../login/login.php class=download>Logout</a>";

			}				?>
			
   				
   			</li>
   			<li>
   				<a href="#" class="article">article</a>
   			</li>
   		</ul>
   	</nav>
   	
   	<div class="content">
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   		
   		<button type="button" id="sidebarCollapse" class="btn btn-info">
   			<i class="fa fa-align-justify"></i> <span></span>
   		</button>
   		
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link disabled" style="color:black" >Website Kita Komputer Cilacap</a>
      </li>
    </ul>
  </div>
</nav>
  
		 
		<table   cellpadding="16">
        <tr>
            <td> 
			<?php
include "../koneksi.php";

$kode=$_GET['kode'];
$panggil="SELECT * FROM laptop WHERE kode='$kode'";
$hasil=$mysqli->query($panggil);
$tampil=$hasil->fetch_array();

  $kode=$tampil['kode'];
  $stok=$tampil['stok'];
  $merk=$tampil['merk'];
  $tipe=$tampil['tipe'];
  $harga=$tampil['harga'];
  $kondisi=$tampil['kondisi'];
  $deskripsi=$tampil['deskripsi'];
  $nama_foto=$tampil['foto'];
  
echo "<h3><center>DETAIL LAPTOP KODE&nbsp$kode</center></h3>
<hr>";
echo "<table border='0' width='500' align='center'>
<tr><td rowspan='7' valign='top'>
<img
src='create/gambar/$nama_foto' width='111'
height='127' align='left' ></td>

<td>KODE</td><td>:</td><td>$kode</td></tr>
<tr><td>Stok</td><td>:</td><td>$stok</td></tr>
<tr><td>Merek</td><td>:</td><td>$merk</td></tr>
<tr><td>Tipe</td><td>:</td><td>$tipe</td></tr>
<tr><td>Harga</td><td>:</td><td>$harga</td></tr>
<tr><td>Kondisi</td><td>:</td><td>$kondisi</td></tr>

";
?>

				<div class="card" style="width: 78rem; height: 75rem;">
				<br>
					<img class="card-img-top" <?php echo"src='create/gambar/$nama_foto'"?> alt="Card image cap" style="width : 300px;height : 300px ;margin: left; padding-left: 10px;" >
					<div class="card-body">
					<br>
					<h5 class="card-title"><?php echo"$merk"; echo"&nbsp;$tipe"?></h5>
          <h5 class="card-title"><?php echo"$deskripsi"?></h5>
          <h5 class="card-title">Stok Barang : &nbsp<?php echo"$stok"?></h5>
	       <br><br>
					<a href="laptop/create/index.php" class="btn btn-primary">Kondisi&nbsp<?php echo"$kondisi"?>&nbspdengan harga<?php echo"&nbsp$harga"?></a>
          <br><br>
					<a href="read/lihat_data.php" class="btn btn-success">Lihat Data Lain</a>	
				</div>
				</div>
			
			</td>
			
        
    </table>
		 
	
	
	
   
   
   
   
   <br><br><br><br><br><br><br><br><br><br>
   <h2 style="font-size:15px" ><center>&emsp;*Halaman Admin Kita Komputer .</center></h2>
  	<br><br>
	</div>
  	
  	
  	
   	</div>
   	
   	
   	
   	
   	
   </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    
    
    
    
    
  </body>
</html>