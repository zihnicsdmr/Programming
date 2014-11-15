#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int dis,a,b,c;
	float x1,x2;
	printf("Katsayi girin= "); scanf("%d %d %d",&a,&b,&c);
	printf("\n %dx^2+%dx+%d=0",a,b,c);
	dis=b*b-4*a*c;
	if(dis>0) {printf("Denklemin Kokleri yok"); 
	return 0;
	}
	else if(dis<0) {
		x1=(-b + sqrt(dis))/2*a; x2=(-b-sqrt(dis))/2*a;
		printf("Denklemin Kokleri x1=%f x2=%f" ,x1,x2);
	}
	else {
		x1=-b/2*a; printf("Denklemin Tek Koku x1=%d",x1);
	}
	
	
	return 0;
}
