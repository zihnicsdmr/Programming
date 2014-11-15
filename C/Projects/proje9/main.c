#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int maas,kisi=0,toplam=0;
	float ort;
	do
	{
		printf("Maasi Giriniz: ");
		scanf("%d",&maas);
		kisi++;
		toplam+=maas;
	} while (maas!=0);
	ort=toplam/(kisi-1);
	if (ort>2000) printf("Firma Iyi Maas Veriyor.");
	else printf("Firma Yetersiz Maas Veriyor.");
		
	return 0;
}
