#include <stdio.h>

int main(int argc, char *argv[])
{
	int saat;
	printf("aracin kaldigi sure =");
	scanf("%d",&saat);
	if (saat >= 0 && saat<=2)printf("ucret 5 TL \' dir \n");
	else if (saat > 2 && saat<=8)printf("ucret 10 TL \' dir \n");
	else if (saat > 8 && saat<=24)printf("ucret 15 TL \' dir \n");
	else printf("Sureyi yanlis girdiniz.");
	return 0;
}
