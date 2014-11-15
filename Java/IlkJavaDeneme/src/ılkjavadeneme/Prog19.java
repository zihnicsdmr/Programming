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
public class Prog19 {
    public static void main(String[] args) {
        
        Scanner klavye = new Scanner(System.in);
        
        int dogdugunuzAy;
        
        System.out.print("Doğduğunuz Ayi Rakamla Giriniz: ");
        dogdugunuzAy=klavye.nextInt();
        
        String dogumAyi = new String();
        
        if (dogdugunuzAy==1) {
            dogumAyi="Ocak";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        } else if(dogdugunuzAy==2) {
            dogumAyi="Şubat";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==3) {
            dogumAyi="Mart";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==4) {
            dogumAyi="Nisan";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==5) {
            dogumAyi="Mayıs";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==6) {
            dogumAyi="Haziran";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==7) {
            dogumAyi="Temmuz";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==8) {
            dogumAyi="Ağustos";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==9) {
            dogumAyi="Eylül";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==10) {
            dogumAyi="Ekim";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==11) {
            dogumAyi="Kasım";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        }else if(dogdugunuzAy==12) {
            dogumAyi="Aralık";
            System.out.println("Siz "+dogumAyi+" Ayında Doğdunuz. ");
        } else {
            System.out.println("Hatalı Giriş Yaptınız. ");
        }
        
    }
}
