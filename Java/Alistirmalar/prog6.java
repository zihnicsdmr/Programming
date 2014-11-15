/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package alıstirmalar;

/**
 *
 * @author aft
 */
public class prog6 {
    public static void main(String[] args) {
        
        int altCizgi,i,j;
        
        System.out.println("1   2   3   4   5   6   7   8   9   10  ");
        
        for(altCizgi=1;altCizgi<=50;altCizgi++) {
            System.out.print("_");
        }
        System.out.println(" ");
            for (i=1;i<=10;i++) {
                System.out.print(i + " | " );
                
                for (j=1;j<=10;j++) {
                    System.out.print(i*j + "  ");
                }
                System.out.println();
            }
        
        
        
        
    }
}
