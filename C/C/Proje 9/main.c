#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int s1,s2,s3,s4,s5,toplam;
	float ort;
	printf("Sayilari Giriniz= ");
	scanf("%d %d %d %d %d",&s1,&s2,&s3,&s4,&s5);
	toplam=s1+s2+s3+s4+s5;
	ort=toplam/5;
	printf("Sayilarin Toplami= %d \nOrtalamasi= %f \n",toplam,ort);
	
	
	
	
	
	return 0;
}
