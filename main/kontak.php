<?php
  require_once("../login/config.php");
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>Kita Komputer Cilacap</title>
  </head>
  <body>
   
   <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><?php {
        
        echo $_SESSION['user'];

      }       ?></h3>
      </div>
      
      
      <ul class="list-unstyled components">
    
      <li>
      <li class="active">
          <a href="main.php">Kita Komputer</a>
        </li>

        <li>
          <a href="../crud/data_barang.php">Data Barang</a>
        </li>
        
      <li>
          <a href="../home.html" class="dropdown-toggle">Home</a>
          
        </li>
        
        <li>
          <a href="kritik.php">Kritik Saran</a>
        </li>
        <li>
          <a href="tentang.php">Tentang Kami</a>
        </li>
        <li>
          <a href="kontak.php">Kontak</a>
        </li>
      </ul>
      
      <ul class="list-unstyled CTAs">
        <li>
      <?php {
        
        echo "<a href=../login/login.php class=download>Logout</a>";

      }       ?>
      
          
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
    
    
    
    <h2>&emsp;&emsp;Kita Komputer Cilacap</h2>
     <ol>
     
  <p>Kontak dan Informasi Kita Komputer Cilacap<p> 
  <p>------------------------------------------<p>
     </ol>
   <ol><ol>
   </ol>
      <p>Kita Komputer Cilacap merupakan Toko online buatan anak Politeknik Negeri Cilacap yang masih dalam proses pengembangan. Untuk informasi lebih lanjut, silahkan datang ke Toko.</p>
      <ol>
      <div class="card" style="width: 50rem; height: 50rem;">
     <img class="card-img-top" src="kami.png" alt="Card image cap"  style="width : 500px;height 400px ;margin: auto;" >
     <div class="card-body">
       <br>
       <h5 class="card-title">Address</h5>
       <p class="card-text">Jln. Dr. Soetomo No.1 Karangcengis, Sidakaya, Kec. Cilacap</p>
       <h5 class="card-title">Phone</h5>
       <p class="card-text">08500210001</p>
       <h5 class="card-title">About</h5>
       <p class="card-text">Email     : kitakomputer@gmail.com</p>
       <p class="card-text">Twitter   : @kitakomputerAja</p>
       <p class="card-text">Instagram : kitakomputercilacap</p>
       <p class="card-text">Facebook  : kitakomputercilacap</p>
        <a href="kritik.php" class="btn btn-success">Kritik dan Saran</a>
     </div>
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