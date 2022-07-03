<?php
include "../koneksi.php";
$server=$_SERVER['PHP_SELF'];
?>

<?php
	require_once("../../../login/config.php");
	session_start();

	?>
	
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>Data Laptop</title>
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
   				<a href="../../../home.html" class="dropdown-toggle">Home</a>
   				
   			</li>
   			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Laptop</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="index.php">Masukan Data</a>
   					</li>
   					<li>
   						<a href="../update/lihat_data.php">Lihat Data</a>
   					</li>
   				</ul> 
   			</li>
			
			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">HP</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="index.php">Masukan Data</a>
   					</li>
   					<li>
   						<a href="../update/lihat_data.php">Lihat Data</a>
   					</li>
   				</ul> 
   			</li>
			
			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PC</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="index.php">Masukan Data</a>
   					</li>
   					<li>
   						<a href="../update/lihat_data.php">Lihat Data</a>
   					</li>
   				</ul> 
   			</li>
			
			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Accessories</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="index.php">Masukan Data</a>
   					</li>
   					<li>
   						<a href="../update/lihat_data.php">Lihat Data</a>
   					</li>
   				</ul> 
   			</li>
			
   			<li>
   				<a href="../../../main/main.php">Kita Komputer</a>
   			</li>
   			
			<li>
   				<a href="#">Kritik Saran</a>
   			</li>
   			<li>
   				<a href="#">Tentang Kami</a>
   			</li>
   			<li>
   				<a href="#">Kontak</a>
   			</li>
   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
			<?php {
				
				echo "<a href=../login/login.php class=download>Logout</a>";

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
        <a class="nav-link disabled" style="color:black">Website Kita Komputer Cilacap</a>
      </li>
    </ul>
  </div>
</nav>
  	
  	
  	
  	<h2>&emsp;&emsp;INPUT DATA ACCESSORIES</h2>
		 <ol>	
	 <p>Halaman ini berisi untuk update stock accessories pada Toko Kita Komputer. Silahkan inputkan data accessories sesuai kebutuhan anda dibawah ini :<p>
  	 </ol>
	 <ol>
	 
	 <form enctype="multipart/form-data" action="<?php echo
$server;?>" method="post">
		<!-- kode -->
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Kode</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="textfield" name="kode">
		</div>
		
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Stok</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="textfield" name="stok">
    </div>
  </div>
  
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Merk</label>
    <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="merk">
        <option selected>Pilih...</option>
        <option value="Logitech">Logitech</option>
        <option value="Razer">Razer</option>
        <option value="Ducky">Ducky</option>
		<option value="Apple">Apple</option>
		<option value="Toshiba">Toshiba</option>
		<option value="Cherry">Cherry</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="textfield"  name="tipe">
    </div>
  </div>
 
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="textfield"  name="harga">
    </div>
  </div>
 
 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
    </div>
  </div>
  
 
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" name="button" id="button" value="Simpan">
    </div>
  </div>
  
  
  
</form>

<?php
$kode = !empty($_POST['kode']) ? $_POST['kode'] : '';
$stok = !empty($_POST['stok']) ? $_POST['stok'] : '';
$merk = !empty($_POST['merk']) ? $_POST['merk'] : '';
$tipe = !empty($_POST['tipe']) ? $_POST['tipe'] : '';
$harga = !empty($_POST['harga']) ? $_POST['harga'] : '';
$deskripsi = !empty($_POST['deskripsi']) ? $_POST['deskripsi'] : '';

$masuk="INSERT INTO acc (kode, stok, merk, tipe,harga, deskripsi) VALUES ('$kode','$stok','$merk','$tipe','$harga','$deskripsi')";
$hasil=$mysqli->query($masuk);
?>
	 
	 </ol>
   
   
   <br><br><br><br><br>
   <h2 style="font-size:15px" ><center>&emsp;*Setiap pesanan pasti akan kami kirimkan, mohon ditunggu dengan sabar :) .</center></h2>
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



