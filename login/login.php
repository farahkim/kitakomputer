<?php
	require_once("config.php");
	session_start();
	
	//for logout
	if(isset($_GET['logout']) && $_GET['logout'] !='')
	{
		session_destroy();
		header("location:".$_SERVER['PHP_SELF']);
		exit();
	}
		
	if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
	{
		$sql = "select * from user_table where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
		
		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $db->error . ']');
		}
		
		if($result->num_rows > 0)
		{
			//create session for user
			$_SESSION['user'] = $_POST['email'];
		}
		else
		{
			$error_msg = "username atau katasandi salah";
		}
		
	}
?>

<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
	<body>
			<div class="container">
		<?php if(isset($_SESSION['user']) && $_SESSION['user'] != '')
		{
			echo '<div class="success_msg">';
			echo "Selamat ".$_SESSION['user']." anda berhasil login <br><br>";
			echo "<a href='".$_SERVER['PHP_SELF']."?logout=true'>Logout</a>";
			echo "<a href='../main/main.php'>Lanjutkan</a>";
			
			echo '</div>';
		}
		else
		{
		?>
				
		<div class="center" style="text-align: center;">
		<p></p>
		
			<img src="logo-kita.png" width="150" length="150"/>
			
			
			</h1>
			

			<?php 
			if(isset($error_msg))
			{
				echo '<div class="error_msg">';
				echo $error_msg;
				echo '</div>';
				unset($error_msg);
			}
		?>
		<div class="form-cont">
		
			<form name="myForm" id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
				<div class="txt_field">
					<input type="text" required name="email" id="email_add"/>
					<span></span>
					<label style="font-size:15px"> Username</label>
				</div>

				<div class="txt_field">
					<input type="password" required name="password" id="add_password"/>
					<span></span>
					<label style="font-size:15px">Password</label>
				</div>

				
				<input type="button" id="submit-frm" value="Login">
				<div class="signup_link">
					Admin Login<br><br>
					<a href="../home.html">Home</a>
			</form>
			</div>

		</div>
		<?php
		}
		?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
	
	</body>

	</html>