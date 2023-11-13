#!/bin/bash
cat | rev  passwd.txt

sed -n '2~2p'

cut -f5 -d":"