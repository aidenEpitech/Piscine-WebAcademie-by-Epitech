#!/bin/bash
if [ $# = 0 ]
then
	wc -l
else
	cut -c 9- | grep $1 -i | wc -l
fi