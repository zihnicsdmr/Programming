#include <stdio.h>

int main(int argc, char *argv[])
{
	int not,i;
	float ort,toplam=0;
	
	for (i=1 ;i<=20;i++)
	{
	printf("Not Giriniz =");
	scanf("%d",&not);
		toplam=not+toplam ;
	}
	ort=toplam/(i-1);
	printf("%f",ort);
	
	return 0;
}
