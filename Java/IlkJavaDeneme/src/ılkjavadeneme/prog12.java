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
public class prog12 {
    public static void main (String[] args) {
        Scanner klavye = new Scanner(System.in);
        
              
        // Bankaya yatıralacak para
        System.out.print("Bankaya Yatırılacak Ana Para Tutarını Giriniz : "); 
 
        double anaPara = klavye.nextDouble();
       
        // yıllık faiz oranı
        System.out.print("Yıllık Faiz Oranını Giriniz : ");
      
        double faizOrani = klavye.nextDouble();

        //yıl cinsinden vade
        System.out.print("Yıl Cinsinden Vadeyi Giriniz : ");
     
        double yil = klavye.nextDouble();

       
        //sonuc
        
        double basitFaizTutari = anaPara * faizOrani * yil;
       
        System.out.println("Bankadan Alınacak Olan Faiz Tutarı : " + basitFaizTutari);
        
        
        
    }      
             
}
