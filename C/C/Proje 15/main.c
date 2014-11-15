#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	int cGun,gUcret,abg,gv,nau;
	float vo;
	
	printf("Gunluk Ucreti Giriniz= "); scanf(%d,&gUcret);
	printf("Calisilan Gunu Giriniz= "); scanf(%d,&cGun);
	if(cGun>=31)
	{
		printf("calisilan gun sayidi asildi.");
	}	
	abg=gUcret * cGun;
	if (abg<=5000)
	{
		vo=0.20;
	}
	else
	{
		vo=0.25;
	}
	
	gv=abg*vo;
	nau=abg-gv;
	
	printf("Aylik Gelir Vergisi=%d",nau);
	return 0;
}
