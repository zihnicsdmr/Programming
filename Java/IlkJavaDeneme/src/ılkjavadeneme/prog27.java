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
public class prog27 {
    public static void main (String[] args) {
        Scanner scan = new Scanner(System.in);
        int[] birDizi = new int[3];
        
        for(int i=0;i<3;i++){
            System.out.println("Dizinin "+(i+1)+". elemanini giriniz: ");
            birDizi[i]=scan.nextInt();
            }
        System.out.println();
        
        for(int i=0;i<3;i++){
            System.out.println(i+". indisteki "+(i+1)+". eleman: "+birDizi[i]);
            }
        
        
        
        
        
        
        
        
    }
}
