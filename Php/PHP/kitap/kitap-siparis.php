<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
error_reporting(0);
?>

<meta content="tr" http-equiv="Content-Language" />
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
</style>
</head>

<body>
<?php
extract($_POST);

if ($sifre=="kitap") {

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
			<td><textarea cols="20" name="adres" rows="2"></textarea></td>
		</tr>
		<tr>
			<td class="auto-style2" colspan="2">
			<h3><span class="auto-style3"><label id="Label1">İSTENİLEN KİTAPLAR</label></span>&nbsp;</h3>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap1" type="checkbox" value="PHP_Mysql" />&nbsp;PHP_Mysql</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap2" type="checkbox" value="ASP_Access" />&nbsp;ASP_Access</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap3" type="checkbox" value="CSS_Dinamik Web" />&nbsp;CSS_Dinamik 
			Web</td>
		</tr>
		<tr>
			<td colspan="2"><input name="kitap" type="checkbox" value="FLASH" />&nbsp;FLASH</td>
		</tr>
		<tr>
			<td colspan="2">
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
