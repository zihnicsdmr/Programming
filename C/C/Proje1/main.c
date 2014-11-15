#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) 
{
	double x=3.176;
	float y=3.13;
	int z=10;
	char m='a';
	
	printf("\n\n\n");
	printf("1.satir x=%f, y=%f \n" ,x,y);
	printf("2.satir x=%e, y=%E \n" ,x,y);
	printf("3.satir x=%8.2f, y=%8.2f \n" ,x,y);
	printf("4.satir x=%+.2f, y=%+0.3f \n" ,x,y);
	printf("5.satir z=%d, m=%d, m=%c \n" ,z,m,m);
	printf("6.satir z=%x, z=%X, z=%o \n" ,z,z,z);

getchar();
	
	return 0;
}
