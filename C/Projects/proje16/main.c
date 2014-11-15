#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int n=1,sy;
	
	puts("Bir sayi giriniz.");
	scanf("%d",&sy);
	
	puts("Tek Sayilar=");
	do
	{
		if(n%2==1)
		printf("%d,",n);
		n++;
	}while (n<=sy);
	
	puts("\nCift Sayilar=");
	n=1;
	do
	{
		if(n%2==0)
		printf("%d,",n);
		n++;
	} while(n<=sy);
	
	
	
	
	return 0;
}
