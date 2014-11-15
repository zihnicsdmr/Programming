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
public class prog3 {
    public static void main (String[] args) {
        
        Scanner scan = new Scanner(System.in);
        
        int sayi;
        
        System.out.print("Bir Tam Sayi Giriniz: ");
        sayi = scan.nextInt();
        
        if (sayi % 2 == 0) {
            System.out.println("Girdiginiz sayi "+"'" + sayi +"'." +  "Sayi Cifttir. ");
        } else {
            System.out.println("Girdiginiz sayi "+"'" + sayi +"'." +  "Sayi Tektir. ");
        }
        
}
}