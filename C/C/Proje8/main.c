#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	char ad[30];
	int vize,final;
	float ort;
	printf("Adýnýzý Giriniz= "); scanf("%s",ad);
	printf("Vize ve Final Notunu Giriniz= ");
	scanf("%d %d",& vize,&final);
	ort=vize*0.4+final*0.6;
	printf("Ad=%s\tVize=%d\tFinal%d\tOrtalama=%f",ad,vize,final,ort);	
	return 0;
	}
