#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) 
{
	int r;
	float pi = 3.14;
    float alan;
    
    printf("Dairenin Yaricapini Giriniz: ");
    scanf("%d",&r);	
	
	alan = (pi*r*r);
	
	printf("\n Dairenin Alani %.2f dir. \n" ,alan);
	
	system("PAUSE");
		
	return 0;
}
