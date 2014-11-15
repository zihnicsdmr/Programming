<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="tr" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
error_reporting(0);
if (isset($_POST['Gonder']))
{
	$adsoyad=$_POST['adsoyad'];
	$cinsiyet=$_POST['cinsiyet'];
	$csayisi=$_POST['csayisi'];
	$usayisi=$_POST['usayisi'];
	$smaas=$_POST['smaas'];
	$toplam=0;
	$ektoplam=0;
	if($csayisi==1)
	{
	  $toplam=$smaas*0.05;
	  //$ektoplam=$toplam+$smaas;
	
	}
	else if ($csayisi==2)
	{
	$toplam=$smaas*0.10;
	//$ektoplam=$toplam+$smaas;

    

	}
	else if($csayisi>=3)
	{
	$toplam=$smaas*0.15;
	//$ektoplam=$toplam+$smaas;

   

	}
	else
	{
	 echo "Yanlis deger girdiniz";
	 } 
	 
	 echo "<br>";
	 
	if($usayisi<=50 || $usayisi<=100){
	
		$islem=$smaas*0.10;
		//$istop=$islem+$smaas;
		
		}
		else if ($usayisi<=101 || $usayisi<=150){
	
		$islem=$smaas*0.15;
		//$istop=$islem+$smaas;
		
		}
		else if($usayisi<=151 || $usayisi<=200){
	
		$islem=$smaas*0.20;
		//$istop=$islem+$smaas;
		
		}
		else { 
		echo "yanlis deger girdiniz";
		}
		 
		$ektoplam=$smaas+$toplam+$islem;


 }
	  
?>
<table style="width: 30%; height: 121px;" align="center" border="2" bordercolor="#000">
	<tr>
		<td style="width: 170px">Sayın:</td>
		<td style="width: 126px"><?php echo "$adsoyad";   ?></td>
	</tr>
	<tr>
		<td style="width: 170px">Aile Yardım Geliriniz:</td>
		<td style="width: 126px"><?php echo "$toplam"; ?></td>
	</tr>
	<tr>
		<td style="width: 170px">Ürettiğiniz Parça Geliriniz:</td>
		<td style="width: 126px"><?php echo "$islem"; ?></td>
	</tr>
	<tr>
		<td style="width: 170px">Net Elde Ettiğiniz Gelir:</td>
		<td style="width: 126px"><?php echo "$ektoplam"; ?></td>
	</tr>
	<tr>
		<td colspan="2" style="height: 50px">
		<form method="post">
			<input name="Submit1" type="submit" value="Dosyaya Yaz" /></form>
		</td>
	</tr>
</table>


</body>
</html>