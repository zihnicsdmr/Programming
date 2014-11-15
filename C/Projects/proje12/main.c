#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int birinciSayi;
	int ikinciSayi;
	char islem;
		
	printf("birinciSayi= "); scanf("%d",&birinciSayi);
	printf("ikinciSayi= "); scanf("%d",&ikinciSayi);
	printf("islemi giriniz= "); islem=getche();
	switch(islem)
	{
		case '+': 
		printf("\nsonuc=%d",birinciSayi+ikinciSayi);
		break;
		case '-': 
		printf("\nsonuc=%d",birinciSayi-ikinciSayi); 
		break;
		case '*': 
		printf("\nsonuc=%d",birinciSayi*ikinciSayi); 
		break;
		case '/': 
		printf("\nsonuc=%.2f",birinciSayi/(float)ikinciSayi); 
		break;
		default:
		printf("\nHatali Islem");
		break;
	}
	return 0;
}
	
