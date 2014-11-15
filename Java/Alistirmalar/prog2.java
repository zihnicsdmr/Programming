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
public class prog2 {
    public static void main (String[] args) {
        
        double birinciSayi;
        double ikinciSayi;
        String islem = new String();
        boolean islemAlindi = false;
        
        Scanner girdi = new Scanner(System.in);
        
        System.out.println("Bir sayı giriniz: ");
        birinciSayi = girdi.nextDouble();
        
        System.out.println("Bir sayı daha giriniz: ");
        ikinciSayi = girdi.nextDouble();
        
        System.out.println("Ne vereyim abime (+ - / *): ");
        islem = girdi.next();
        
        //System.out.println("hmm: " + islem);
        
        
        while (islemAlindi == false) {
        
            if ("+".equals(islem) || "-".equals(islem) || "/".equals(islem) || "*".equals(islem)) {
                islemAlindi = true;
                //System.out.println("Islem: " + islem + " " + islemAlindi);
                
            } else {
                System.out.println("Tekrar deneyin. Gecerli islemler + - / * ");
                islem = girdi.next();    
            }
            
            //System.out.println("Islem: " + islem + " " + islemAlindi);
                
            
        }
                        
            
        System.out.print("Sonuc: ");

        switch (islem) {
            case "+":
                System.out.print(birinciSayi+ikinciSayi);
                break;
            case "-":
                System.out.print(birinciSayi-ikinciSayi);
                break;

            case "/":
                System.out.print(birinciSayi/ikinciSayi);
                break;

            case "*":
                System.out.print(birinciSayi*ikinciSayi);
                break;

        }
        
        System.out.print("\n");
                    
                
    }
        
        
        
}

