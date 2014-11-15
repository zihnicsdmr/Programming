<?php
/* brütü 500 TL’ den fazla olanlardan %25 vergi kesintisi yapan, 
maaşı 500 TL’ den az olanlardan hiç kesinti yapmayan php kodu.*/
$brut=array(1800,400,520,1200,900,330,1440,880);
$ad_soy=array('Ayşe Pınar','Melih Kibar','Abbas Gaddar','Ezel Polat','Cansu Hande','Cihan Ulus','Önder Lider','Yüksel Tepe');

echo "<table border='1'><tr><td align='center' bgcolor='#669966'>ADI-SOYADI</td>";
for($x=0;$x<1;$x++)  {
echo "<td align='center' bgcolor='#669966'>M A A Ş</td>";
echo "<td align='center' bgcolor='#669966'>KESİNTİ</td>";
echo "<td align='center' bgcolor='#669966'>D U R U M U</td>";
}
echo "</tr>";

for($sat=0;$sat<count($ad_soy);$sat++) { 
echo "<tr>";

if ($brut[$sat]>500)
{ 
$kesinti[$sat]=($brut[$sat]*25)/100;
$net_ucr[$sat]=$brut[$sat]-$kesinti[$sat];
echo "<td align='left' bgcolor='#ddc488' width='150'>$ad_soy[$sat]</td>";
echo "<td align='right' bgcolor='#ddc488' width='100'>$brut[$sat]&nbsp; TL</td>";
echo "<td align='right' bgcolor='#ddc488' width='100'>$kesinti[$sat]&nbsp; TL</td>";
echo "<td align='left' bgcolor='#ddc488' width='150'>Kesinti var.</td>";
echo "</tr>";
}
else {
echo "<td align='right' bgcolor='#ddc488' width='150'>$ad_soy[$sat]</td>";
echo "<td align='right' bgcolor='#ddc488' width='100'>$brut[$sat]&nbsp; TL</td>";
$kesinti[$sat]=0;
echo "<td align='right' bgcolor='#ddc488' width='100'><font color=red>$kesinti[$sat]&nbsp; TL </font></td>";
echo "<td align='left' bgcolor='#ddc488' width='150'><font color=red>Kesinti yok.</font></td>";
echo "</tr>";
}
}
echo "</table>";
print("<br><br>");

?>