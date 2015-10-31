/*************************************************************************
	> File Name: main.c
	> Author: 
	> Mail: 
	> Created Time: Sat Oct 31 16:54:58 2015
 ************************************************************************/

#include<stdio.h>
#include <stdlib.h>

int main(int argc, const char * argv[])
{
    char cmd[3][1024];

    sprintf(cmd[0], "git rm %s", argv[1]);
    sprintf(cmd[1], "git commit -m %s", argv[2]);
    sprintf(cmd[2], "git push origin master");

    system(cmd[0]);
    system(cmd[1]);
    system(cmd[2]);

    puts("Delete file success.");

    return 0;

}
