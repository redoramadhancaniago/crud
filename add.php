<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//termasuk file koneksi database
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	//memeriksa bidang kosong
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link ke halaman sebelumnya
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// jika semua kolom terisi (tidak kosong) 
			
		//masukkan data ke database
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		
		//tampilkan pesan sukses
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
