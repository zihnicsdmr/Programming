<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
error_reporting(0);

header('Content-Type', 'text/javascript');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<HEAD>
<TITLE>Kitap_Siparis</TITLE>
</head>

<body>
<form id="form1" name="form1" method="post" action="liste.php">
<table width="350" border="0" cellspacing="2" cellpading="2">
<tr>
<td colspan="2"><h3>Bilgi Girişi</h3>
<br><br></td> 
</tr>
<tr>
<td>Adınız Soyadınız : </td>
<td>
<input name="kullaniciadi" type="text"
id="kullaniciadi" size="35" /> </td>
</tr>
</tr>
<td>Yaşınız : </td>
<td>
<input name="yas" type="text"
id="yas" size="10" /> </td>
</tr>
<tr>
<td>Boyunuz : </td>
<td>
<input name="boy" type="text"
id="boy" size="10" /> </td>
</tr>
<td>Kilonuz : </td>
<td>
<input name="kilo" type="text"
id="kilo" size="10" /> </td>
</tr>
<tr>
<td>&nbsp;</td>
<td> <input type="submit" name="button" id="button" value="GiriŞ" /> </td>
</tr>
</table>

</form>
</body>
</html>