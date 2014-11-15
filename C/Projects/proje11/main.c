#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int sicaklik;
	printf("Sicaklik= "); scanf("%d",&sicaklik);
	switch(sicaklik)
	{
		case 5: printf("Hava Cok Soguk"); break;
		case 6: case 7: case 8: case 9: case 10: printf("Hava  Soguk"); break;
		case 20: printf("Hava Sicakligi Normal"); break;
		case 30: printf("Hava Sicak"); break;
		case 40: printf("Hava Cok Sicak"); break;
		default: printf("Hatali Sicaklik"); break;
	}
	return 0;
}
