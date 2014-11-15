#include <stdio.h>
#include <stdlib.h>
#include <math.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) 
{
	char bolum[10],ad[10],soyad[10];
	char d_orta[10];	
	float d_ort;
	
	printf("Bolumunuz= ");
	fgets(bolum,10,stdin);
	printf("Adinizi Giriniz: ");	
	fgets(ad,10,stdin);
	printf("Soydinizi Giriniz: ");	
	fgets(soyad,10,stdin);
	printf("Donem Ortalama Notunuzu Giriniz: ");	
	fgets(d_orta,10,stdin);
	d_ort=atof(d_orta);
	printf("\n");
	printf("Bolum= %s\n",bolum);
	printf("Ad= %s\n",ad);
	printf("Soyad= %s\n",soyad);
	printf("Donem Ortalama Notu= %f\n",d_ort);
	
	
	
	return 0;
}
