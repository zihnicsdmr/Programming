#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int i;
	for(i=1;i<=10;i++)
	{
		if(i==6) goto son;
		printf("%d\n",i);
	}
	son: puts("Dongu Sonlandirildi.");
	
	return 0;
}
