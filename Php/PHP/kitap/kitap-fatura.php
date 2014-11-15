<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>Kitap-Siparis</TITLE>
</head>

<body>
<?php

define("k1",32);define("k2",22);
define("k3",20);define("k4",35);

$toplam=0;   extract($_POST); 
 
 if ($email=="") {
   print "Email alanını boş bıraktınız..."; 
   header("Refresh:2;url=kitap-siparis.php");
 }
 else if ($adres=="") {
   print "Adres alanını boş bıraktınız..."; 
   header("Refresh:2;url=kitap-siparis.php");
   }
 else {  
?>
<p>FATURA BİLGİLERİ</p>
<table width="500" border="1">
  <tr>
    <td width="158">Alıcı : </td>
    <td width="196"><?php echo "$ad" ?></td></tr>
  <tr>
    <td>Adres :</td>
    <td><?php echo "$adres" ?></td></tr>
  <tr>
    <td>Sipariş Adı : </td>
    <td>Fiyatı : </td></tr>
  <tr>
	<td>
		<?php
			if(isset($kitap1)){
				echo $kitap1;
			}
			
			if(isset($kitap2)){
				echo '<br />'.$kitap2;
			}
			
			if(isset($kitap3)){
				echo '<br />'.$kitap3;
			}

			if(isset($kitap4)){
				echo '<br />'.$kitap4;
			}
			?>
	</td>
    <td>
<?php 
$tire="_";
if (isset($kitap1)) 
{
	 
//	echo ($kitap1.str_pad(' ',20,'_'));
//	echo ($kitap1.str_repeat($tire,20));
//echo ($kitap1.str_repeat("_", 25));
	echo k1;
	$toplam=$toplam + k1;
}
	if (isset($kitap2)) 
{	echo "<br>";
 //     echo ($kitap2.str_pad(' ',19,'_'));
//echo ($kitap2.str_repeat($tire,25));
      echo k2;
      $toplam=$toplam + k2;
}  
	 if (isset($kitap3)) 
{
     echo "<br>";
//      echo ($kitap3.str_pad(' ',25,'_'));
//echo ($kitap3.str_repeat($tire,25));
      echo k3;
      $toplam=$toplam + k3;
}		  
	 if (isset($kitap4)) 
{
	echo "<br>";
 //     echo ($kitap4.str_pad(' ',13,'_'));
//echo ($kitap4.str_repeat($tire,13));
	echo k4;
	$toplam=$toplam + k4;
}
?>	
</td> </tr>
  <tr>
    <td>Toplam Tutar :</td>
    <td><?php echo $toplam ?> </td></tr>
  <tr>
    <td>Ödenecek Tutar(%KDV) :</td>
    <td><?php  $toplam=$toplam*1.18;
	           echo $toplam; ?> </td></tr></table>
<?php 
}
?>
</body>
</html>
 

