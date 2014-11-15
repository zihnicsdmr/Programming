#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int saat;
	printf("Aracinizin Otoparkta Kaldigi Sureyi Giriniz= ");
	scanf("%d",&saat);
	
	if (saat>=0 && saat <=2) printf("Ucret 5 TL dir\n");
	else if (saat>2 && saat<=8) printf("Ucret 10 TL dir\n");
	else if (saat>8 && saat<=24) printf("Ucret 15 TL dir\n");
	else printf("Sureyi Hatali Girdiniz.");
	return 0;
}
