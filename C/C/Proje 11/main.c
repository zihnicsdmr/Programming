#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
    //deneme
	char ad[30];
	int vize,final;
	float ort;
	printf("Adinizi Giriniz= "); scanf("%s",ad);
	printf("Vize ve Final Notunu Giriniz= ");
	scanf("%d %d",&vize,&final);
	ort=vize*0.4+final*0.6;
	if(ort>=60) printf("Ad=%s\tVize=%d\tFinal=%d\tOrtalama=%f Ogrenci Gecti",ad,vize,final,ort);
	else if(ort<60) printf("Ogrenci kaldi, ders tekrari yapacak.");	
	return 0;
}
