<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
error_reporting(0);
?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Üyelik Formu</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="kitap-siparis.php">
<table width="350" border="0" cellspacing="2" cellpadding="2">
<tr>
<td colspan="2"><h3>Üyelik Formu</h3>
<br><br></td>
</tr>

<tr>
<td>Kulanıcı Adınız: </td>
<td>
<input name="kullaniciadi" type="text" id="kullaniciadi" size="35" /> </td>
</tr>
<tr>	
<td>Şifreniz: </td>
<td>
<input name="sifre" type="password" id="sifre" size="35" /> </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input type="submit" name="button" id="button" value="Giriş" /> 
</td>
</tr>
</table>

</form>
</body>

</html>
