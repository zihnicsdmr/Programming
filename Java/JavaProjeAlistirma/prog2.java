/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaProjeAlistirma;
import java.util.Scanner;
/**
 *
 * @author aft
 */
public class prog2 {
   public static void main (String[] args) {
        
        Scanner scan = new Scanner(System.in);
        
        double satisMiktari,birimSatisFiyati,birimMaliyeti,kar;
        
        
        System.out.print("Urunun Satis Miktarini Giriniz: ");
        satisMiktari = scan.nextDouble();
        
        System.out.print("Urunun Birim Satis Fiyatini Giriniz: ");
        birimSatisFiyati = scan.nextDouble();
        
        System.out.print("Urunun Birim Maliyetini Giriniz: ");
        birimMaliyeti = scan.nextDouble();
        
        kar = satisMiktari * (birimSatisFiyati - birimMaliyeti); 
        
        System.out.println("Elde Edilen Kâr: " + kar);
//        System.out.println("Cemberin Alani = " + pi * Math.pow(yariCap,2));
        
   }
}
