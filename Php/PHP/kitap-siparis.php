<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Üyelik Formu</title>
<style type="text/css">
.auto-style1 {
	border: 3px solid #0000FF;
}
.auto-style2 {
	text-align: center;
}
.auto-style3 {
	font-family: "Courier New", Courier, monospace;
}
.auto-style4 {
	text-align: right;
}
</style>
</head>

<body>
<?php
error_reporting(0);
extract($_POST);
if($sifre=="kitap"){
?>

<form action="kitap-fatura.php" method="post">
	<table cellpadding="2" class="auto-style1" style="width: 50%">
		<tr>
			<td>Adı Soyadı:</td>
			<td><input name="ad" type="text" />&nbsp;</td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input name="email" type="text" />&nbsp;</td>
		</tr>
		<tr>
			<td>Adres:</td>
			<td><textarea cols="20" name="adres" rows="3"></textarea>&nbsp;</td>
		</tr>
		<tr>
			<td class="auto-style2" colspan="2">
			<h3 class="auto-style3"><strong>İSTENİLEN KİTAPLAR</strong></h3>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap1" type="checkbox" value="PHP_MYSQL" />&nbsp;PHP_MYSQL</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap2" type="checkbox" value="ASP_ACCESS" />&nbsp;ASP_ACCESS</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap3" type="checkbox" value="CSS_Dinamik Web" />&nbsp;CSS_Dinamik 
			Web</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap4" style="height: 20px" type="checkbox" value="FLASH" />&nbsp;FLASH</td>
		</tr>
		<tr>
			<td class="auto-style4" colspan="2">
			<input name="Submit1" type="submit" value="Gönder" />&nbsp;</td>
		</tr>
	</table>
</form>
<?php
}
else {
print "Şifreniz yanlış";
}
?>

</body>

</html>
