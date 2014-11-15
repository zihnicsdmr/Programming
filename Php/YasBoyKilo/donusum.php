<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gizle - Göster</title>
<?php
error_reporting(0);
header("Content-Type: text/html; charset=utf-8"); 
echo "<br><br>";
?>
</head>
<body>
<br>
<script language='javascript'> 
    var ads=prompt("Ad ve Soyad girin.","");
	var boy=prompt("Boy girin.","");
	var kilo=prompt("Kilo girin.","");
	var kitle=kilo/((boy/100)*(boy/100));
	var vki=kitle.toFixed();
</script> 
<?php
    $as = "<script language='javascript'> document.write(ads);</script>";
	$b = "<script language='javascript'> document.write(boy);</script>";
	$k = "<script language='javascript'> document.write(kilo);</script>";
	$vki = "<script language='javascript'> document.write(vki);</script>";

	echo $as." ".$b." ".$k." ".$vki;
	echo "<br><br>";
	echo $as." ".$b." ".$k." ".$vki;
	echo "<br><br>";
?>
</body>
</html>
