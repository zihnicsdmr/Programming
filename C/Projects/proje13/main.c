#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	int sayi,mutlak;
	printf("Sayi Girin:"); scanf("%d",&sayi);
	mutlak=(sayi>0)? sayi:sayi*-1;
	printf("%d sayisinin mutlak degeri= %d",sayi,mutlak);
		
	return 0;
}
