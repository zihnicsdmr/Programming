<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="tr" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
	font-size: large;
}
.auto-style2 {
	border: 3px solid #000080;
}
.auto-style3 {
	border: 1px solid #00FF00;
}
</style>
</head>

<body>
<?php
error_reporting(0);
extract($_POST);
if($sifre=="kitap") {
?>

<form action="kitap_fatura.php" method="post">
	<table style="width: 100%" class="auto-style2">
		<tr class="auto-style2">
			<td class="auto-style3">Ad Soyad:</td>
			<td><input name="Text1" type="text" class="auto-style3" /></td>
		</tr>
		<tr>
			<td class="auto-style3">E-Mail:</td>
			<td><input class="auto-style3" name="Text2" type="text" /></td>
		</tr>
		<tr>
			<td class="auto-style3">Adres:</td>
			<td>
			<textarea class="auto-style3" cols="20" name="TextArea1" rows="2"></textarea></td>
		</tr>
		<tr>
			<td class="auto-style1" colspan="2"><strong>İSTENİLEN KİTAPLAR</strong></td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap1" type="checkbox" value="PHP" class="auto-style3" />&nbsp;PHP</td>
		</tr>
		<tr>
			<td colspan="2"><input name="kitap2" type="checkbox" value="css" />&nbsp;css</td>
		</tr>
		<tr>
			<td colspan="2"><input name="kitap3" type="checkbox" value="asp" />&nbsp;asp</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="kitap4" type="checkbox" value="flash" />&nbsp;flash</td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="Submit1" type="submit" value="GÖNDER" /></td>
		</tr>
	</table>
</form>
<?php
}
else {
print "Şifreniz Yanlış";
}
?>
</body>

</html>