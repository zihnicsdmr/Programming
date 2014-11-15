/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package ılkjavadeneme;

import java.util.Scanner;
public class prog11 {
    public static void main(String[]args) {
        Scanner klavye = new Scanner (System.in);
        double yariCap, cemberAlani;
        final double PI=3.14;
        
        System.out.print("Çemberin Yarıçap Uzunluunu Giriniz :");
        yariCap = klavye.nextDouble();
        
        cemberAlani = PI * Math.pow(yariCap, 2);
       
        System.out.println("Çemberin Alanı : "+ cemberAlani);
        
        
        
        
        
        
    }
}
