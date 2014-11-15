#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int sayi,a,b;
	printf("iki basamakli bir sayi giriniz...");
	scanf("%d",&sayi);
	a=sayi/10;
	b=sayi-(a*10);
	
	switch(a)
	{
		case 1: printf("On");
		break;
		case 2: printf("Yirmi");
		break;
		case 3: printf("Otuz");
		break;
		case 4: printf("Kirk");
		break;
		case 5: printf("Elli");
		break;
		case 6: printf("Altmis");
		break;
		case 7: printf("Yetmis");
		break;
		case 8: printf("Seksen");
		break;
		case 9: printf("Doksan");
		break;
		case 10: printf("Yuz");
		break;
	}	
	switch(b)
	{
		case 1: printf(" Bir");
		break;
		case 2: printf(" Iki");
		break;
		case 3: printf(" Uc");
		break;
		case 4: printf(" Dort");
		break;
		case 5: printf(" Bes");
		break;
		case 6: printf(" Alti");
		break;
		case 7: printf(" Yedi");
		break;
		case 8: printf(" Sekiz");
		break;
		case 9: printf(" Dokuz");
		break;
		case 10: printf(" On");
		break;
	}
	
		
	
	
	return 0;
}
