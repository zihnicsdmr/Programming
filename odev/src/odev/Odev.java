/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package odev;
import java.util.Scanner;
/**
 *
 * @author aft
 */
public class Odev {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        Scanner tara = new Scanner(System.in);
        int harf = 0;
        
        System.out.println("Bir harf giriniz: ");
        harf = tara.nextInt();
        
            while(harf==10) {
                 System.out.println("Bir Harf giriniz.");
                    harf=tara.nextInt();
                
                if(harf!=10){
                    System.out.println("Bir Harf giriniz.");
                    harf=tara.nextInt();
             }
                 }
    
    
    
    
    
    
    }
}
