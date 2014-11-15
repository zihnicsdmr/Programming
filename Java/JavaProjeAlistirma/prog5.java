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
public class prog5 {
    public static void main (String[] args) {
        Scanner scan = new Scanner(System.in);
        
        int sayi;
        int say,sonuc;
        
        System.out.print("Katlarini Hesaplatacaginiz Sayiyi Girniz: ");
        sayi = scan.nextInt();
        
            for(say=1;say<=10;say++) {
                sonuc=sayi*say;
                System.out.println(sayi + "*" + say + "=" + sonuc);
            }
       
        
       
        
        
        
        
        
        
    }
}
