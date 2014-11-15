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
public class Prog23 {
    public static void main (String[] args) {
        
        Scanner klavye = new Scanner(System.in); 
        
        int ogrenci=1;
        double not;
        double ortalama;
        double toplam=0;
        
         
        while(ogrenci<=50) {
        
            
            System.out.print("Öğrencinin Notunu Giriniz: ");
            not=klavye.nextDouble();
            toplam = toplam + not;
            ogrenci++;
        }
            ortalama = toplam / 50;
            System.out.println("ortalama:  "+ortalama);
    }
}
