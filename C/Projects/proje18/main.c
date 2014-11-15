#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	int i;
	int tplm=0;
	do
	{
	
	printf("Bir Sayi Giriniz...");
	scanf("%d",&i);
	if(i>0)
	tplm=tplm+i;
		
	} while(i>0); 
	printf("Girilen Sayilarin Toplami=%d",tplm);
	return 0;
}
