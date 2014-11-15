/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package alıstirmalar;
//import java.util.Scanner;
/**
 *
 * @author aft
 */
public class prog8 {
    public static void main (String[] args) {
    
        int ay=4;
        int yil=2000;
        int gunSayisi=0;
        
        switch(ay) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                gunSayisi = 30;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                gunSayisi = 31;
            case 2:
                if( ((yil % 4 == 0) && (yil % 100 == 0)) || (yil % 400 == 0))
                    gunSayisi = 29;
                else
                    gunSayisi = 28;
                break;
        } 
        System.out.println("Secilen Ayin Gun Sayisi = " + gunSayisi);
        
    }
}
