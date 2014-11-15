/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package alıstirmalar;

import java.util.Scanner;

/**
 *
 * @author aft
 */
public class prog9 {
    public static void main (String[] args) {
        int istek;
        Scanner scan = new Scanner(System.in);
        
        do {
            System.out.println("Adres Defteri \n");
            System.out.println("1 - Yeni Telefon Numarasi Gir");
            System.out.println("2 - Telefon Numarasi Sil");
            System.out.println("3 - Telefon Numarasi Guncelle");
            System.out.println("4 - Telefon Numarasi Gor");
            System.out.println("5 - Cikis \n");
            
            System.out.println("Seciminiz: (1,2,3,4,5): ");
            
            istek = scan.nextInt();
            
            switch(istek) {
                case 1:
                    System.out.println("Yeni adres eklemek mi istiyorsunuz?");
                    break;
                case 2:
                    System.out.println("Bir adres silecek misiniz?");
                    break;
                case 3:
                    System.out.println("Bir adres guncelleyecek misiniz?");
                    break;
                case 4:
                    System.out.println("Bir adres mi goreceksiniz?");
                    break;
                case 5:
                    System.out.println("Hosca Kalin!");
                    break;
                default:
                    System.out.println("gecerli bir secim degildir" + istek);
                    break;
            
            }
            System.out.println("Devam icin bir tusa basiniz...");
            istek=scan.nextInt();
            System.out.println();
        } while (istek != 5);
        
        
    }
}
