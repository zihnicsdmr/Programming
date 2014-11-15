#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int i,N;
	float toplam=0;
	float ort;
	printf("Lutfen bir sayi giriniz= "); scanf("%d",&N);
	for (i=1;i<=N;i++)
		{
			toplam=toplam+i;
		}
	ort=toplam/N;
	printf("%d Sayinin toplami=%f\nOrtalamasi=%f",N,toplam,ort);	
	return 0;
}
