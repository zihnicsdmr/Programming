/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ılkjavadeneme;

import java.util.*;

/**
 *
 * @author aft
 */
public class prog13 {
    public static void main (String[] args) {
        Scanner klavye = new Scanner(System.in);
        
        //kenar uzunlugu
        System.out.print("Üçgenin Kenar1 Uzunluğunu Giriniz : "); 
 
        int kenar1 = klavye.nextInt();
        
        System.out.print("Üçgenin Kenar2 Uzunluğunu Giriniz : "); 
 
        int kenar2 = klavye.nextInt();
        //taban uzunlugu
        
        System.out.print("Üçgenin Taban Uzunluğunu Giriniz : "); 
 
        int taban = klavye.nextInt();
        
        //yuksekligi
        System.out.print("Üçgenin Yükseklik Uzunluğunu Giriniz : "); 
 
        int yukseklik = klavye.nextInt();
        
        //sonucCevre,Alan
        
        int cevre = kenar1 + kenar2 + taban;
        int alan = taban * yukseklik / 2;
        
        System.out.println("Üçgenin Çevresi: " + cevre + ", " + "Üçgenin Alanı: " + alan );
        
    }
}
