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

    <title>Lihat Data laptop</title>
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
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Mahasiswa</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="../create/index.php">Masukan Data</a>
   					</li>
   					<li>
   						<a href="#">Lihat Data</a>
   					</li>
   					<li>
   						<a href="#">Update Data</a>
   					</li>
					<li>
   						<a href="#">Hapus Data</a>
   					</li>
   				</ul> 
   			</li>
			
			
   			<li>
   				<a href="../../../main/main.php">SIAK</a>
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
        <a class="nav-link disabled" href="#" style="color:black" >Data Mahasiswa</a>
      </li>
    </ul>
  </div>
  </nav>
  	
  	
  	
  	<h2>&emsp;&emsp;UPDATE DATA MAHASISWA</h2>
		 <ol>	
	 <p>Sistem Informasi Akademik (SIAK) dirancang untuk bisa mengolah semua informasi yang ada secara terintegrasi, sehingga data yang tersedia selalu terbarukan (up to date) secara realtime.Selain itu, karena basis datanya terpusat, SIAK bisa meminimalisir terjadinya duplikasi data yang lazim ditemui pada sistem manual.<p>
  	 </ol>
	 <ol>
	 <?php
include "../koneksi.php";
$panggil="SELECT * FROM mahasiswa";
$hasil=$mysqli->query($panggil);
	 echo"
	 <table class='table' >
  <thead class='p-3 mb-2 bg-secondary text-white'>
    <tr>
      <th scope='col'>No</th>
      <th scope='col'>NIM</th>
      <th scope='col'>Nama</th>
      <th scope='col'>Jenis Kelamin</th>
	  <th scope='col'>Program Studi</th>
	  <th scope='col' colspan='3'>&emsp;&emsp;&emsp;&emsp;&emsp;Action</th> 
    </tr>
  </thead>
  
  ";
    $nomer_urut=0;
	while($tampil=$hasil->fetch_array()){
	$nim=$tampil['nim'];
	$nama_mhs=$tampil['nama_mhs'];
	$jenis_kelamin=$tampil['jenis_kelamin'];
	$program_studi=$tampil['program_studi'];
	$nomer_urut++;
	
	echo "<tr><td valign='top'>$nomer_urut</td><td
valign='top'>$nim</td><td valign='top'>$nama_mhs</td><td
valign='top'>$jenis_kelamin</td><td valign='top'>$program_studi</td>
<td valign='top'><a href='#' style='color:blue'>Lihat</a></td>
<td valign='top'><a href='#' style='color:green'>Edit</a></td>
<td valign='top'><a href='#' style='color:red'>Hapus</a></td>
</tr>
";
}
?>

	 </ol>
   
  
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



