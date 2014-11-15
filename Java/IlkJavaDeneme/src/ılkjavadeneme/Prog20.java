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
public class Prog20 {
    public static void main(String[] args) {
        
        Scanner klavye = new Scanner(System.in);
        
        
        int yil;
        
        System.out.print("Doğum Yılınızı Giriniz: ");
        yil=klavye.nextInt();
        
        if(yil==1995)
            System.out.println("Siz 19 Yaşındasınız.");
        else if (yil==1996)
            System.out.println("Siz 18 Yaşındasınız.");
        else 
            System.out.println("Çok Küçüksünüz.");
    }
}
