<?php
error_reporting(0);
/*

print("___________________________________________"."<br>"."<br>");
if(isset($_POST['gonder']))
{
        $adsoy=$_POST['ad'];
        $vize=$_POST['vize'];
	$final=$_POST['final'];

$banot=($vize * 0.4+$final * 0.6);
}

switch($banot)
{ 
case($banot<=49): 
print($banot." ogrenci kalir."); 
break;
case ($banot>49 && $banot<=59):
print($banot." ogrenci borclu gecer."); 
break;
case ($banot>59 && $banot<=69):
print($banot." ogrenci vasat."); 
break;
case ($banot>69 && $banot<89):
print($banot." ogrenci iyi."); 
break;
case ($banot>=90 && $banot<=100): 
print($banot." ogrenci pekiyi."); 
break;
default;
print("yanlis bir deger." );
break;
}
print("<br><br>");
*/
?>

<form action="" method="POST">
adsoy:<input type="text" name="ad"/><br/>
vize :<input type="text" name="vize"/><br/>
final:<input type="text" name="final"/><br/>
<input type="submit" name="gonder" value="Dosyaya Ekle"/>
</form>


<?php

print("<br><br>");
print("___________________________________________"."<br>");	

        $adsoy=$_POST['ad'];
        $vizeNotu=$_POST['vize'];
	$finalNotu=$_POST['final'];

//	$vizeNotu=80;
//	$finalNotu=75;

	$ortalama = ($vizeNotu * 0.4+$finalNotu * 0.6) ;
		
		if( $ortalama > 90 )
		{
			$sonucHarf = "AA";
			$sonuc = 4.0;
		}
		else if( $ortalama > 85 )
		{
			$sonucHarf = "BA";
			$sonuc = 3.5;
		}
		else if( $ortalama > 80 )
		{
			$sonucHarf = "BB";
			$sonuc = 3.0;
		}
		else if( $ortalama > 75 )
		{
			$sonucHarf = "CB";
			$sonuc = 2.5;
		}
		else if( $ortalama > 70 )
		{
			$sonucHarf = "CC";
			$sonuc = 2.0;
		}
		else if( $ortalama > 65 )
		{
			$sonucHarf = "DC";
			$sonuc = 1.5;
		}
		else if( $ortalama > 60 )
		{
			$sonucHarf = "DD";
			$sonuc = 1.0;
		}
		else if( $ortalama >= 50 )
		{
			$sonucHarf = "FD";
			$sonuc = 0.5;
		}
		else if( $ortalama <50 && $ortalama>0 )
		{
			$sonucHarf = "FF";
			$sonuc = 0.0;
                }
                else
		{
			$sonucHarf = "" ;
			$sonuc = "";
                        $ortalama="";
                }

	print("Sayin :".$adsoy."<br>");	
	print("Vize Notu = ".$vizeNotu."<br>");
	print("Final Notu = ".$finalNotu."<br>");
	print("Basari Notu = ".$ortalama."<br>");
	print("Harf Notu= ".$sonucHarf."<br>");
	print("Puan = ".$sonuc."<br>");
	print("___________________________________________"."<br>");
	
print("<br><br>");
/*
print("___________________________________________"."<br>"."<br>");
echo "<table border='0'><tr><td align='center'>X</td>";
for($x=1;$x<=10;$x++)
{
echo "<td align='right' bgcolor='#669966' width='20'>$x</td>";
}
echo "</tr>";
for($sat=1;$sat<=10;$sat++)
{
echo "<td align='right' bgcolor='#669966' width='20'>$sat</td>";
for($sut=1;$sut<=10;$sut++)
{
echo "<td align='right' bgcolor='#ddc488' width='20'>".$sat*$sut."</td>";
}
echo "</tr>";
}
echo "</table>";
print("<br><br>");
print("___________________________________________"."<br>"."<br>");

*/
print("<br><br>");
print("___________________________________________"."<br>"."<br>");

	?>

