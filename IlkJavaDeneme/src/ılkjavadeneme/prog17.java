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
public class prog17 {
    public static void main(String[] args) {
    Scanner not = new Scanner(System.in);
    
    double vizeNot;
    double finalNot;
    int gecmeNot;
    
    System.out.print("Vize Notunuzu Giriniz: ");
    vizeNot = not.nextDouble();  
    
    System.out.print("Final Notunuzu Giriniz: ");
    finalNot = not.nextDouble();
    
    gecmeNot =(int)(vizeNot*0.4+finalNot*0.6);
    
    switch (gecmeNot)
    {
        case 89:           
            System.out.println("A");
        break;
            
        case 79:
            System.out.println("B");
        break;
        
        case 69:
            System.out.println("C");
        break;
            
        default:
            
            break;
    }
    
    
    }
}
