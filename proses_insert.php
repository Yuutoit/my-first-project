<?php

include 'config.php';


  if(isset($_POST['hantar'])) {
	  
//post data di sini	
$id = $_POST["id"];
$nama_anak = $_POST["nama_anak"];
$nama_penjaga =  $_POST["nama_penjaga"];
$jantina = $_POST["jantina"];
$tarikh_lahir =  $_POST["tarikh_lahir"];

  //lengkapkan kod query untuk insert disini
  $query = "INSERT INTO kanak_kanak VALUES (`$id`, `$nama_anak`, `$nama_penjaga`, `$jantina`, `$tarikh_lahir`)";
  $infoanak = mysqli_query ($sambung, $query);


   //semak connection dan query
		if (isset($_POST['hantar']))
		{
        //papar header location sebab telah berjaya simpan
			  header("location:senarai.php");
			}	
	
			}

?>