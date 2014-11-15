#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <conio.h>
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) 
{
	char tak1[20];
	char tak2[20];
	char tak3[20];
	
	int p1,p2,p3;
	system("CLS");
	/*clrscr(); */
	
	printf("Birinci Takimin Adini ve Puanini Giriniz: ");
	scanf("%s %d" ,tak1,&p1);
	
	printf("Ikinci Takimin Adini ve Puanini Giriniz: ");
	scanf("%s %d" ,tak2,&p2);
	
	printf("Ucuncu Takimin Adini ve Puanini Giriniz: ");
	scanf("%s %d" ,tak3,&p3);
	
	/*clrscr();*/
	system("CLS");
	
	printf("TAKIM PUAN \n");
	printf("----- ----- \n");
	printf("%s %d\n",tak1,p1);
	printf("%s %d\n",tak2,p2);
	printf("%s %d\n",tak3,p3);
	
	
	
	return 0;
}
