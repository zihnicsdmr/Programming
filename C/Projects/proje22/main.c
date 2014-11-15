#include <stdio.h>
#include <stdlib.h>


/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]){
	system("color 08 ");
    int i,j;
    int carpim;
    
    for(i=1;i<=10;i++) {
    	printf("\n");
		for(j=1;j<=10;j++) {
    	
    	carpim = i * j;
    	printf("%d*%d = %d",i,j,carpim);
    	printf("\n");
    		
    	}
    }
	
	return 0;
}
