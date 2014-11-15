/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ılkjavadeneme;

/**
 *
 * @author aft
 */
public class prog33 {
    public static void main (String[] args) {
        int[] dizi={1,2,3,4,5};
        for(int i=0;i<dizi.length;++i){
            System.out.println((i+1) + ". eleman =" + dizi[i]);
        }
        dizi[6]=7;
    }
}
//out of bounds hatasinin gosterimi