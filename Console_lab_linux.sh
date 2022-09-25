#!/bin/bash
mkdir Console_lab
cd Console_lab
mkdir A B C
cd B
mkdir E
cd ..
cd C
echo My name is Dmitri>file1.txt
cp "/home/ubuntu/Documents/Console_lab/C/file1.txt" "/home/ubuntu/Documents/Console_lab/B/E/file1_copied.txt"
cd ..
cd B
cd E
echo Today is Thursday %date%.>file2.txt
cd ..
mkdir D
cd D
mv "/home/ubuntu/Documents/Console_lab/B/E/file2.txt" "/home/ubuntu/Documents/Console_lab/B/D/file2.txt"
cd ..
cd ..
cd A
echo It is autumn.>file3.txt
mv "/home/ubuntu/Documents/Console_lab/A/file3.txt" "/home/ubuntu/Documents/Console_lab/A/file4.txt"
rm file4.txt
