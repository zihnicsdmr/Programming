<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yaş-Boy-Kilo</title>
<?php
error_reporting(E_ALL ^ E_NOTICE);

// header('Content-Type', 'text/javascript');
header("Content-Type: text/html; charset=utf-8"); 
echo date("d/m/Y G:i:s\r\n"); 
echo "<br><br>";
echo date("d/m/Y G:i:s", time());
echo "<br><br>";
// print date("t/"."F/"."Y");
echo "<br><br>";
//die(ELVEDA);
//exit;
?>
</head>
<body>
<br>
<form id="form1" name="form1" method="post" action="boykilo.php?Islem=Kaydet">
<table width="475" border="2" bordercolor="#ddc488" cellspacing="2" cellpading="2">
<tr>
<td colspan="2" align="center">BOY_KİLO TEST</td> 
<br><br>
</tr>
<tr>
<td width="175">Adınız Soyadınız : </td>
<td width="300">
<input name="adinizsoyadiniz" type="text" id="adinizsoyadiniz" size="30"/></td>
</tr>
<tr>
<td>Cinsiyetiniz(e/k): </td>
<td>
<input name="cinsiyetiniz" type="text" id="cinsiyetiniz" size="30" /> </td>
</tr>
<tr>
<td>Boyunuz : </td>
<td>
<input name="boyunuz" type="text" id="boyunuz" size="31" /> </td>
</tr>
<tr>
<td>Kilonuz  : </td>
<td>
<input name="kilonuz" type="text" id="kilonuz" size="30" /> </td>
</tr>
<tr>
<td>&nbsp;</td>
<td> 
<input type="submit" name="button1" id="button1" value="YollA" />
<input type="reset" name="button2" id="button2" value="Temizle" /> </td>
</tr>
</table>
</form>
<?php 
echo "<br><br>";
$Islem = $_GET ["Islem"];
if ($Islem == "Kaydet") {
echo " Adınız Soyadınız : " . $_POST["adinizsoyadiniz"]."<br />";
echo " Cinsiyetiniz : " . $_POST["cinsiyetiniz"]."<br />";
echo " Boyunuz : " . $_POST["boyunuz"]."<br />";
echo " Kilonuz: " . $_POST["kilonuz"]."<br />";
}else{
}
$as=$_POST["adinizsoyadiniz"];
$c=$_POST["cinsiyetiniz"];
$boy=$_POST["boyunuz"];
$kilo=$_POST["kilonuz"];
echo "<br><br>";
print str_pad(" ",70,"-");
echo "<br><br>";
if ($c=="e")
{
$ideal=$boy-108;
if($kilo>$ideal)

echo "ZAYIFLAMANIZ LAZIM";
else
echo "İDEAL KİLONUZU KORUYUN";
}
else
{
$ideal=$boy-95;
if($kilo>$ideal)
echo "ZAYIFLAMANIZ LAZIM";
else
echo "İDEAL KİLONUZU KORUYUN";
}

echo "<br><br>";
//$input = "";
print str_pad(" ",70,"-");
echo "<br><br>";


$baglanti=fopen("byklo.txt","a+");

if(fputs($baglanti,"$as\t$c\t$boy\t$kilo\t$ideal\n"))
{
echo "Veri kaydedildi";
}
else 
{
echo "Oops Veri kaydedilmedi";
}
fclose($baglanti);
echo "<p></p>";


?>
</body>
</html>