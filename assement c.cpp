#include<stdio.h>
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
				c=a+b;
				printf("%d+%d=%d\n",a,b,c);
				break;
			case(2):
			    c=a-b;
				printf("%d-%d=%d\n",a,b,c);
				break;
			case(3):
			    c=a*b;
				printf("%d*%d=%d\n",a,b,c);
				break;
			case(4):
			    c=a/b;
				printf("%d/%d=%d\n",a,b,c);
				break;
			default:
			    printf("Invalid choice!!!\n");				
			
		}
		printf("\nAgain(Y/N):");
		scanf("%c",&yes);
	}
	return 0;
}
