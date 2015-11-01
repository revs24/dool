#!/usr/bin/env python
def checkLine(line):
	for i in line:
		if(i.isalnum()):
			return 1
	return 0
with open('../data/rawInput.txt') as f:
	ans = ''
	for line in f:
		if(checkLine(line)):
			ans += line
	print ans
info = open('../data/info', 'w')
rawInput = open('../data/rawInput.txt', 'w')
rawInput.truncate()
info.truncate()
info.write(ans)