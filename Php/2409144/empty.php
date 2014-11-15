<?php
 
//$ali = "internet programlama";
 
if(isset($ali)) {
 
echo "Değişken tanımlanmış";
 
}
else
{
echo "Tanımlı değişken bulunamadı.";
}

 echo ("<br> <br>");

// isset() fonksiyonu :  Bu fonksiyon php ile yaptığımız 
// projelerde belirttiğimiz değişkenin  var olup
// olmadığını kontrol eder.


$veli = "Bilgisayar";

if (isset($veli))


echo "Degisken var"; 

else
echo "Degisken yok.";


 echo ("<br> <br>");


$jale = "90";
 
if(empty($jale))

    echo "Değişken değeri boş veya geçersiz değer";

echo "Degisken degeri var " .$jale;
 

 
?>