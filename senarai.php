<html>
<head>
  <title> SENARAI NAMA</title>
</head>
<body bgcolor="#ddd">
<center>
<div style="border-radius: 8px ; border: 1px solid black; width: auto; margin-top: 30px; background-color: white;">

 <h3><u>SENARAI NAMA KANAK-KANAK BERDAFTAR</u><h3>
  <h3><u>TAHUN 2024</u><h3>
 <table border=1 cellpadding=10 cellspacing=0>
  <th>ID</th>
  <th>NAMA ANAK</th>
  <th>NAMA_PENJAGA</th>
  <th>JANTINA</th>
  <th>TARIKH LAHIR</th>

<?php
include 'config.php';

$infoanak = mysqli_query ($sambung, "SELECT * from kanak_kanak");

while ($papar = mysqli_fetch_array($infoanak)){
        $id=$papar["id"]; //$papar tengok dkt while punya " = mysqli_fetch_array". yang dlm bracket kene sama dalam DB
        $nama_anak=$papar["nama_anak"];
        $nama_penjaga=$papar["nama_penjaga"];
        $jantina=["jantina"];
        $tarikh_lahir=$papar["tarikh_lahir"];
?>


   <tr>
   	 <td width="180px"> <?php echo $papar["id"] ; ?></td>
     <td width="180px"> <?php echo $papar["nama_anak"] ; ?></td>
     <td width="180px"> <?php echo $papar["nama_penjaga"] ; ?></td>
     <td width="180px"> <?php echo $papar["jantina"] ; ?></td>
     <td width="180px"> <?php echo $papar["tarikh_lahir"] ; ?></td>
   </tr>
  <?php
 }
?>
 </table>

<br>
<a href="">Borang Pendaftaran </a>
</div>
</center>
</body>
</html>
