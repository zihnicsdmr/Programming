#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int i,Not;
	float toplam=0;
	float ort;
	
	for(i=1;i<=2;i++)
		{
			printf("Notlari Giriniz= "); scanf("%d",&Not);
			toplam=toplam+Not;
		}
	ort=toplam/(i-1);
	printf("Sinifin Ortalamasi=%f",ort);	
	return 0;
}
