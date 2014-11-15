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
public class prog4 {
    public static void main (String[] args) {
        
        Scanner scan = new Scanner(System.in);
        
        int say,sayi,max=0;
        
        for (say=1; say<=5; say++) {
            
        System.out.print("Bir Sayi Giriniz: ");
        sayi = scan.nextInt();
        
        if (sayi > max) {
            max = sayi;
        } 
        
        
            
        }
        System.out.println("en buyuk sayi: " + max);
        
        
    }
}
