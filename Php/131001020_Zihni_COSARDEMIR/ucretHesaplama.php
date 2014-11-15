<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="tr" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	color: #FF0000;
}
.auto-style2 {
	font-weight: bold;
}
</style>
</head>

<body>
<?php
error_reporting(0);
if (isset($_POST['Gonder']))
{
	$adsoy=$_POST['adsoy'];
	$cins=$_POST['cins'];
	$csay=$_POST['csay'];
	$usay=$_POST['usay'];
	$maas=$_POST['maas'];
	$toplam=0;
	$partoplam=0;
	
	if($csay==1)
	{
	  $toplam=$maas*0.05;
	  
	
	}
	else if ($csay==2)
	{
	$toplam=$maas*0.10;
	

    

	}
	else if($csay>=3)
	{
	$toplam=$maas*0.15;
	}
	else
	{
	 echo "Yanlis deger girdiniz";
	 } 
	 
	 echo "<br>";
	 
	if($usay>=50 || $usay<=100){
	
		$islem=$maas*0.10;
		
		
		}
		else if ($usay>=101 || $usay<=150){
	
		$islem=$maas*0.15;
		
		
		}
		else if($usay>=151 || $usay<=200){
	
		$islem=$maas*0.20;
		
		
		}
		else { 
		echo "yanlis deger girdiniz";
		}
		 
		$partoplam=$maas+$toplam+$islem;


 }
	  
?>
<table style="width: 50%; height: 121px;" align="center" border="2" bordercolor="#000" bgcolor="#FFFFFF">
	<tr>
		<td class="auto-style1"><strong>Sayın:</strong></td>
		<td><?php echo "$adsoy";   ?></td>
	</tr>
	<tr>
		<td style="width: 170px" class="auto-style1"><strong>Aile Yardım Geliriniz:</strong></td>
		<td style="width: 126px"><?php echo "$toplam"; ?></td>
	</tr>
	<tr>
		<td style="width: 170px" class="auto-style1"><strong>Ürettiğiniz Parça Geliriniz:</strong></td>
		<td style="width: 126px"><?php echo "$islem"; ?></td>
	</tr>
	<tr>
		<td style="width: 170px" class="auto-style1"><strong>Net Elde Ettiğiniz Gelir:</strong></td>
		<td style="width: 126px"><?php echo "$partoplam"; ?></td>
	</tr>
	<tr>
		<td colspan="2" style="height: 50px">
		<form method="post">
			<strong>
			<input name="Submit1" type="submit" value="Dosyaya Yaz" class="auto-style2" /></strong></form>
		</td>
	</tr>
</table>
<?php 
error_reporting(0);
$dosya=fopen("gir.txt","a+");
fputs($dosya, "$adsoy"." "."$cins"." "."$csay"." "."$usay"." "."$maas"."\n");
fclose($dosya);

$yenidosya=fopen("sonuc.txt","a+");
fputs($yenidosya, "$adsoy"." "."$cins"." "."$csay"." "."$usay"." "."$maas"." "."$partoplam");
fclose($yenidosya);
?>



</body>
</html>