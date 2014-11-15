/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package ılkjavadeneme;
import java.util.Scanner;
/**
 *
 * @author myo
 */
public class prog15 {
    public static void main(String[] args) {
        Scanner not = new Scanner(System.in);
        
        double vizeNot,finalNot,butunlemeNot,gecmeNot,yGecmeNot;
        
        System.out.print("Vize Notunuzu Giriniz: ");
        vizeNot = not.nextDouble();
        
        System.out.print("Final Notunuzu Giriniz: ");
        finalNot = not.nextDouble();
        
        gecmeNot=(vizeNot*0.40) + (finalNot * 0.60);
        
        if(gecmeNot > 50 ) {
            System.out.println("Öğrenci Başarıyla Geçti.");
        }
        else {
            System.out.print("Bütünleme Notunu Giriniz: ");
            butunlemeNot=not.nextDouble();
            
            
            yGecmeNot=(vizeNot*0.40)+(butunlemeNot*0.60);
            
            if(yGecmeNot > 50)
            {
                System.out.println("Öğrenci Bütünleme Sayesinde Geçti");
            }
            else
            {
                System.out.println("Öğrenci Kaldı.");
            }
        }
        
        
        
    }
}
