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
public class prog16 {
    public static void main(String[] args){
        
        Scanner not = new Scanner(System.in);
        
        double vizeNot,finalNot,gecmeNot;
        
        System.out.print("Vize Notunuzu Giriniz: ");
        vizeNot = not.nextDouble();
        
        System.out.print("Final Notunuzu Giriniz: ");
        finalNot = not.nextDouble();
        
        
        gecmeNot=(vizeNot*0.4)+(finalNot*0.6);
        
        if (finalNot < 50 || gecmeNot < 50)
            {
                System.out.println("T");
            }
        else if (gecmeNot>50 && gecmeNot <= 65)
            {
                System.out.println("C");
            }
        else if (gecmeNot >= 66 && gecmeNot <= 85)
            {
                System.out.println("B");  
            }
        else if (gecmeNot >= 86 && gecmeNot <=100)
            {
                System.out.println("A");        
            }
        else 
            {
                System.out.println("Hatalı Giriş.");
            }
        
    }
    
}
