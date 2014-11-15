#include <stdio.h>

int main(int argc, char *argv[])
{
	int s1,s2,s3,s4,s5,toplam;
	float ort;
	printf("Sayýlarý Giriniz =");
	scanf("%d%d%d ",&s1,&s2,&s3);
	scanf("%d%d ",&s4,&s5);
	toplam=s1+s2+s3+s4+s5;
	ort=toplam/5;
	printf("Sayýlarýn Toplamý = %d \n ortalama %f \n", toplam,ort);
	return 0;
}
