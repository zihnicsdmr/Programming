/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package ılkjavadeneme;

/**
 *
 * @author myo
 */
public class prog9 {
    public static void main(String[]args){
        
       double yaricap=7;
       double cemberCevresi, cemberAlani;
       final double PI = 3.14;
      //double PI = 3.14;
      // PI = 4.0;
      // cannot assing value to final HATASI VERECEKTİR. FİNAL DOUBLE'DA DEĞER SABİT KALIR PROGRAMDA DEĞİŞTİRİLMEZ.
       cemberCevresi = 2 * PI * yaricap;
       cemberAlani = PI * Math.pow(yaricap, 2);
       
       System.out.println("Yarıçapı 7cm Olan Çemberin Çevresi : " + cemberCevresi);
       System.out.println("Yarıçapı 7cm Olan Çemberin Alanı : " + cemberAlani);
       
        
    }
    
}
