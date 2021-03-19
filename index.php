<html>
<head>
	<title>FORM SISWA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>FORM PENDAFTARAN SISWA</h2></center>
	<!--
	atribut form login pada halaman pendaftaran siswa
	-->	
	<br/>
	<div class="login">
	<br/>
		<form action="koneksi/logincontroller.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
<center class="regis">IF YOU DONT HAVE ACCOUNT, REGISTER HERE <a href="form.php">REGISTER</a></center>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
	</center>
	</body>
</html>
