#!/usr/bin/env python
# coding=utf-8
from os import system
print '[*] Scaning which host is up.\n[*] Now waitting...'
cmd = r'nmap -sn 172.30.87.1-254 | grep -o "172\..*\..*\..*" > result.txt'
system(cmd)

fp = open('result.txt', 'r+')
list = fp.readlines()
fp.close()

print '[*] Total host:%d' % len(list)

i = 1
for line in list:
    print '[*] Scaning NO.%d ip...' % i
    cmd = 'nmap ' + line[0:-1] + ' >> info.txt && echo '' >> info.txt'
    system(cmd)
    i += 1

print '[*] Complete.'
