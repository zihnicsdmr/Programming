/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ılkjavadeneme;

import java.util.Scanner;
/**
 *
 * @author aft
 */
public class Prog24 {
    public static void main (String [] args) {
        
        //girilen 20 adet sayının içerisinden 
        //pozitif sayıların sayıları bulunacak,
        //pozitif sayıların toplamları bulunacak,
        //ortalaması hesaplanacak,
        //butun sayıların kareleri toplamı bulunacak,
        //en buyuk ve en kucuk sayıyı bulan program yapılacak.
    
    int sayac=1;
    double sayi;
    double pozitifToplam=0;
    double kareToplam=0;
    double pozitifSayisi=0;
    double enBuyuk=0;
    double enKucuk=100;
    
     Scanner klavye = new Scanner(System.in);
       
    
    
    
    //while(sayac<=5)
     for(sayac=0;sayac<5;sayac++)
    {
    System.out.print("Sayi Giriniz: ");
    sayi = klavye.nextDouble();
    
        if (sayi >= 0) 
        {
            pozitifToplam=pozitifToplam+sayi;
            pozitifSayisi=pozitifSayisi+1;
            kareToplam=kareToplam+(sayi*sayi);
        }
            if(sayi>enBuyuk) 
            {
            enBuyuk=sayi;
            }
            if(sayi<enKucuk) 
            {
            enKucuk=sayi;    
            }
        //sayac++;
        
    }
    System.out.println(" ");
    System.out.println("Girilen Pozitif Sayılarin Toplami" + pozitifToplam);
    System.out.println("Girilen Pozitif Sayilarin Sayisi" + pozitifSayisi);
    System.out.println("Girilen Sayilarin Ortalamasi" + pozitifToplam/5);
    System.out.println("Girilen Sayilarin Kareleri Toplami" + kareToplam);
    System.out.println("Girilen En Buyuk Sayi" + enBuyuk);
    System.out.println("Girilen En Kucuk Sayi" + enKucuk);
    }
    
}
