#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int sayi;
	int i=1;
	int art=0;
	
	printf("Bir Sayi Giriniz...");
	scanf("%d",&sayi);
	
	do 
	{
		if(sayi%i==0)
		art++;
	i++;
	} while(i<sayi);
	if (art==1) printf("Sayi Asaldir.");
	else printf("Sayi Asal Degildir.");
	
	return 0;
}
