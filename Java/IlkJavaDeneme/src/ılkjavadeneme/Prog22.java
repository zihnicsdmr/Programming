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
public class Prog22 {
    public static void main(String[] args) {
        Scanner klavye = new Scanner(System.in); 
        
        int x=1,toplam=0;
        int sayi;
        
        while(x<=10)
        {
            System.out.println("Bir Sayi giriniz: ");
            sayi = klavye.nextInt();
            if (sayi > 0) {
                toplam=toplam+sayi;
                x++;
            } else {
                System.out.println("Pozitif Bir Sayi Giriniz. ");
            }
               
            //toplam=toplam+sayi;
            
            
        }
        
        System.out.println("Girdiğiniz Sayıların Toplamı: " + toplam);
        }
    
}
