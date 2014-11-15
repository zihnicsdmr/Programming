/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package alıstirmalar;

import java.util.Scanner;
/**
 *
 * @author aft
 */
public class Alıstirmalar {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner klavye = new Scanner(System.in);
        
        
        int kar;
        int satisMiktari;
        int birimSatisFiyati;
        int birimMaliyeti;
        
        System.out.print("Satış Miktarini Giriniz: ");
        satisMiktari=klavye.nextInt();
        
        System.out.print("Birim Maliyeti Giriniz: ");
        birimMaliyeti=klavye.nextInt();
        
        System.out.print("Birim Satis Fiyatini Giriniz: ");
        birimSatisFiyati=klavye.nextInt();
        
        kar=satisMiktari*(birimSatisFiyati-birimMaliyeti);
        
        System.out.println(" ");
        System.out.println("Satılan Ürün " + satisMiktari + " adet.");
        System.out.println("Satilan Urunun Birim Maliyeti " + birimMaliyeti + " TL'dir.");
        System.out.println("Urunun Satis Fiyati " + birimSatisFiyati + " TL'dir.");
        System.out.println("Elde Edilen Kâr " + kar + " TL'dir.");
        
    }
    
}
