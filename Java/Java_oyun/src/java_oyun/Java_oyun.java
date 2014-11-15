/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java_oyun;

import java.util.Scanner;
import java.util.Random;
/**
 *
 * @author aft
 */
public class Java_oyun {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // random sayı tut aklından 0-100 arasında.
        // değeri 0 olan kaç kere değişkeni yarat.
        // ekrandan değer iste
        // karşılaştır.
        // Doğru ise başarı ve kaç kerede bildiğini yaz.
        // Yanlış ise yeni sayı girmesini iste ve kereyi arttır.
        
        
        int cevap = 1;

        while(cevap == 1){

            Random rastgele = new Random(); //random sayı üretmek için rastgele objesini yaratıyor.
            Scanner kisiTahmin = new Scanner(System.in); //scanner objesi yaratıyor.
            
            int sayac=0;
            int sayi = rastgele.nextInt(51); //rastgele sayı belirliyor.
            //System.out.println(sayi);
            
            //sayi = rastgele.nextInt(51); //rastgele sayı belirliyor.
            //System.out.println(sayi);
            
            int kisiSayi; 
            boolean bravo = false;
                        
            
            
            
            while (bravo==false) { //bravo değişkeni true olanakadar dönüyor.

                System.out.print ("Bir Sayı Giriniz: ");
                kisiSayi  =kisiTahmin.nextInt(); //kullanıcıdan sayı girmesi isteniyor.

                sayac++; //kaç kerede bildiğimizi yazdırmamız için sayac 1 arttırılıyor.

                if (kisiSayi==sayi) { //kullanıcının girdiği sayı random sayıya eşit ise
                    bravo=true;  //bravo değişkenini true yap.
                    System.out.println("Bravo! " + sayac +". denemede bildiniz." );
                } else if (kisiSayi < sayi) { 
                    //kullanıcının girdiği sayi random sayıdan küçük ise

                    System.out.println("çık"); 
                } else { //kullanıcının girdiği sayı random sayıdan büyük ise.
                    System.out.println("İn");
                }

            //    bravo=false;

           }
        
            System.out.println("devam etmek istiyormusunuz?(evet=1/hayır=0)");
            cevap = kisiTahmin.nextInt();
            if(cevap == 1) {
                bravo = false;
            } else {
                bravo= true;
            }
                
        } 
        
       
       
       
       
        
        
    }
    
}
