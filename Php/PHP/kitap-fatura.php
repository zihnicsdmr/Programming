<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
error_reporting(0);


define("k1",32);define("k2",22);
define("k3",20);define("k4",35);

$toplam=0;
extract($_POST);

if($email=="") {
print "E-mail alanını boş bıraktınız...";}
else if ($adres==""){
print "Adres alanını boş bıraktınız...";}
else {
?>

<p>FATURA BİLGİLERİ</p>
<table width="500" border="1">

<tr>
<td width="158">Alıcı : </td>
<td width="196"><?php echo "$ad" ?></td>
</tr>

<tr>
<td>Adres : </td>
<td><?php echo "$adres" ?></td>
</tr>

<tr>
<td>Siparişi Adı : </td>
<td>Fiyatı : </td>
</tr>

<tr>
<td colspan="2">

<?php
$tire="_";

if (isset($kitap1))
{

echo($kitap1.str_repeat("_",20));
echo k1;
$toplam=$toplam + k1;
}

if (isset($kitap2))
{ echo  "<br>";

echo ($kitap2.str_repeat($tire,19));
echo k2;
$toplam=$toplam + k2;
}

if (isset($kitap3))
{
echo "<br>";

echo ($kitap3.str_repeat($tire,25));
echo k3;
$toplam=$toplam + k3;
}

if (isset($kitap4));
{
echo "<br>";

echo ($kitap4.str_repeat("_",13));
echo k4;
$toplam=$toplam + k4;
}
?>
</td></tr>
<tr>
<td>Toplam Tutar:</td>
<td><?php echo "$toplam" ?></td>
</tr>

<tr>
<td>Ödenecek Tutar(%KDV) : </td>
<td><?php $tutar=$toplam*1.18;
echo $tutar; ?></td></tr>
</table>
<?php
}
$dosya = fopen("fatura.txt","a+");
fputs($dosya,"$ad\t$adrest\t$email\t$toplam\t$tutar\n");
fclose ($dosya);
?>
</body>

</html>
