<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gizle - Göster</title>
<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Content-Type: text/html; charset=utf-8"); 
print date("t/"."F/"."Y");
echo "<br><br>";
?>
</head>
<body>
<br>
<script language="JavaScript">
		
document.write("<table border='2'><tr>");
for(x=0;x<1;x++)
{
document.write("<td align='center' bgcolor='#669966' width='150'>BOY</td>");
document.write("<td align='center' bgcolor='#669966' width='100'>KİLO</td>");
document.write("<td align='center' bgcolor='#669966' width='100'>KİTLE</td>");
document.write("<td align='center' bgcolor='#669966' width='100'>DURUM</td>");
}
document.write("</tr>");
document.write("</table>");
	
	var as=prompt("Ad Soyad girin.","");
	var b=prompt("Boy  girin.","");
	var k=prompt("Kilo girin.","");
	var as = as.toString();
	var b= parseInt(b); 
	var k= parseInt(k); 
		
</script> 
<?php
  $as = "<script language='javascript'> document.write(as);</script>";
  $b  = "<script language='javascript'> document.write(b);</script>";
  $k  = "<script language='javascript'> document.write(k);</script>";
  echo "js den gelenleri yazdı..";
 
$kitle=$k/(($b/100)*($b/100));
$vki=(integer) round($kitle);

echo "<br><br>";

 if($vki>0 && $vki<=20)
 {
 echo 'Zayıfsınız';
 // echo $as." ".$b."  ".$k." ".$vki." ".$durum;
 echo "<br><br>";
 }
else if($vki<25 && $vki>20)
{
 echo 'Kilonuz Normal';
 // echo $as." ".$b."  ".$k." ".$vki." ".$durum;
 echo "<br><br>";
 }
else if($vki<30 && $vki>=25)
{
 echo 'Kilolusunuz';
 // echo $as." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>";
 }
else if($vki<40 && $vki>=30)
{
 echo 'Şişmansınız';
 // echo $as." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>";
 }
else 
{
 echo 'Ağır Şişmansınız';
 // echo $as." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>";
 }
echo "<br><br>";
 var_dump ($as, $b, $k, $kitle,$vki); 
echo "<br><br>";
?>
  </body>
  </html>