<?php 
//lengkapkan ruang ini
?>

<html>
<head>
  <title> Borang Kemaskini </title>
</head>
<body bgcolor="#ddd">
<center>
<div style="border-radius: 8px ; border: 1px solid black; width: 500px; margin-top: 30px; background-color: white;">
<form method="" action="">
 <h3><u>BORANG KEMASKINI DATA</u><h3>
 <table border=0 cellpadding=10 cellspacing=0>
   <tr>
     <td>ID</td>
	 <td>:</td>
	 <td><input type="text" name="id" value="<?php echo ;?>" ></td>
  </tr>
  <tr>
     <td>NAMA ANAK</td>
   <td>:</td>
   <td><input type="text" name="nama_anak" value="<?php echo ;?>"></td>
 </tr>
 <tr>
     <td>NAMA PENJAGA</td>
   <td>:</td>
   <td><input type="text" name="nama_penjaga" value="<?php echo ;?>"></td>
 </tr>
 <tr>
  <td>JANTINA</td>
   <td>:</td>
   <td><input type="text" name="jantina" value="<?php echo ;?>"></td></tr>
   <tr>
  <td>TARIKH LAHIR</td>
   <td>:</td> 
   <td><input type="date" name="tarikh lahir" value="<?php echo ;?>"></td>

   </tr>
     <tr>
     <td style="text-align: center;"  colspan="3">
	   <input type="submit" name="hantar" value=" Hantar "> &nbsp&nbsp&nbsp
	   <input type="submit" name="reset" value=" Reset ">
	 </td>
   </tr>
 </table>
</form>
</div>
</center>
</body>
</html>
