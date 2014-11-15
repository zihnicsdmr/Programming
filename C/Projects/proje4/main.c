#include <stdio.h>

int main(int argc, char *argv[])
{
	
	char ad[30];
	int vize,final;
	float ort;
	printf("Adinizi giriniz =");
	printf("Vize ve Final notunu giriniz =");
	scanf("%c %d %d",ad,vize,final);
	ort=vize*0.4+final*0.6;
	printf("ortalama =%f \n",ort);
	if (ort >= 60) printf("Gecti");
	else printf("Kaldý");
	return 0;
}
