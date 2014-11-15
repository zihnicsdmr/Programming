#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	int i;
	printf("For dongusu ile sayilar\n");
	for(i=1;i<=5;i++) printf("%d\n",i);
	printf("Do-While Dongusu ile sayilar\n");
	i=1;
	do { printf("%d\n",i);
		i++;
	}
	while (i<=5);
	printf("While Dongusu ile sayilar\n");
	i=1;
	while(i<=5) {
	printf("%d\n",i);
	i++;
	} 	
	return 0;
}
