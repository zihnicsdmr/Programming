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
public class prog35 {
    public static void main (String[] args) {
        
        double[] aylikUcret = new double[3];
        aylikUcret[0]=2782.45;
        aylikUcret[1]=9346.74;
        aylikUcret[2]=10867.83;
        double[] gelirVergisi = new double[3];
        for (int i=0;i<aylikUcret.length;++i) {
            gelirVergisi[i]=aylikUcret[i]*30/100;
            System.out.println(aylikUcret[i] + " Ucretin Gelir Vergisi =" + gelirVergisi[i]);
            }
        }
}
