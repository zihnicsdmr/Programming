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
        String harf;
        
        System.out.println("Bir harf giriniz: ");
        harf = tara.nextLine();
        
            while(!harf.equals('q')) {
                 System.out.println("Bir Harf giriniz.");
                    harf=tara.nextLine();
                
                if(harf.equals('q')){
                    System.out.println("Programdan ciktiniz.");
                    
             }
                 }
    
    
    
    
    
    
    }
}
