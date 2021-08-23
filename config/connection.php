<?php
    include "database.php";
	date_default_timezone_set("ASIA/JAKARTA");
	$connect = mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
	if(mysqli_connect_errno()){
		printf("Koneksi error : ".mysqli_connect_error());
		exit();
	}
?>	
