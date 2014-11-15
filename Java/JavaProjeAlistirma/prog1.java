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
public class prog1 {
    public static void main (String[] args) {
        
        Scanner scan = new Scanner(System.in);
        
        double yariCap;
        final double pi=3.14;
        
        System.out.print("Cemberin Yari Capini Giriniz.");
        yariCap = scan.nextDouble();
        
        
        
        System.out.println("Cemberin Cevre Uzunlugu = " + 2 * pi * yariCap);
        System.out.println("Cemberin Alani = " + pi * Math.pow(yariCap,2));
        
        
        
    }
}
