#include<stdio.h>
void addition(int no1,int no2)
{
	printf("%d is addition",no1+no2);
}
void substraction(int no1,int no2)
{
	printf("%d is substraction",no1-no2);
}
void multiplication(int no1,int no2)
{
	printf("%d is multiplication",no1*no2);
}
void division(int no1,int no2)
{
	printf("%d is division",no1/no2);
}



int main()
{
	char yes;
	int a,b,c,choice;
	
	yes='y';
	while(yes=='y'||yes=='y')
	{
		printf("Enter first number:");
		scanf("%d",&a);
		printf("Enter second number:");
		scanf("%d",&b);
		printf(" Enter Yoyr choice:");
		printf("\nAddition(1),Substraction(2),Multiplication(3),Division(4):");
		scanf("%d",&choice);
		
		switch(choice)
		{
			case(1):
				addition(a,b);
				break;
			case(2):
			    substraction(a,b);
				break;
			case(3):
			    multiplication(a,b);
				break;
			case(4):
			    division(a,b);
				break;
			default:
			    printf("Invalid choice!!!\n");				
			
		}
		printf("\nAgain(Y/N):");
		scanf("%c",&yes);
	}
	return 0;
}
