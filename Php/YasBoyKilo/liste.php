<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>Kitap-Siparis</TITLE>
</head><body>
<?php
error_reporting(0);
 // extract($_POST); 
echo " Adınız Soyadınız : " . $_POST["kullaniciadi"]."<br />";
echo " Yaşınız : " . $_POST["yas"]."<br />";
echo " Boyunuz : " . $_POST["boy"]."<br />";
echo " Kilonuz: " . $_POST["kilo"]."<br />";  
  
$as=$_POST['kullaniciadi'];
$yas=$_POST['yas'];
$b=$_POST['boy'];
$k=$_POST['kilo'];

$kitle=$k/(($b/100)*($b/100));
$vki=(integer) round($kitle);
//echo $as." ".$yas." ".$b."  ".$k." ".$vki;
echo "<br><br>";
 if($vki>0 && $vki<=20) {
 $durum= 'Zayıfsınız';
echo "<br><br>";
 echo $as." ".$yas." ".$b."  ".$k." ".$vki." ".$durum;
 echo "<br><br>"; }
else if($vki<25 && $vki>20){
 $durum='Kilonuz Normal';
 echo "<br><br>";
echo $as." ".$yas." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>"; }
else if($vki<30 && $vki>=25){
 $durum= 'Kilolusunuz';
echo "<br><br>";
echo $as." ".$yas." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>"; }
else if($vki<40 && $vki>=30){
 $durum='Şişmansınız';
echo "<br><br>";
echo $as." ".$yas." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>"; }
else {
 $durum= 'Ağır Şişmansınız';
echo "<br><br>";
echo $as." ".$yas." ".$b."  ".$k." ".$vki." ".$durum;
echo "<br><br>"; }
 echo "<br><br>";
 $baglanti=fopen("bk.txt","a+");
if(fputs($baglanti,"$as\t$yas\t$b\t$k\t$vki\t$durum\n")){
echo "Veri kaydedildi";}
else {
echo "Oops Veri kaydedilmedi";}
fclose($baglanti);
echo "<p></p>";
 ?>  </body> </html>
 