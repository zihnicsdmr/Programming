#include <stdio.h>

int main(int argc, char *argv[])
{
	char ad [30];
	int vize,final;
	float ort;
	printf("Adinizi Giriniz= ");
	scanf("%s" , ad);
	printf("vize ve final notlarini giriniz =");
	scanf("%d%d , &vize,&final");
	ort=vize*0.4+final*0.6;
	printf("ad=%s \t vize=%d \t final=%d \t ortalama=%f" ,ad,vize,final,ort);

	return 0;
}
