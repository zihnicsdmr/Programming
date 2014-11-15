#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int i,N,f=1;
	printf("Bir Sayi Giriniz= "); scanf("%d",&N);
	for(i=1;i<=N;i++) 
		{
			f=f*i; //(f*=i)
		}
	printf("%d sayisinin faktoriyeli= %d",N,f);	
	return 0;
}
