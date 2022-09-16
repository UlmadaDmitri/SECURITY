mkdir Console_lab
cd Console_lab
mkdir A B C
cd C
echo My Name is Dmitri>file1.txt
cd..
cd B
md E D
cd..
cd C
copy "e:\Console_lab\C\file1.txt" "e:\Console_lab\B\E\file1_copied.txt"
cd ..
cd e:\Console_lab\B
cd E
cd..
cd E
echo Today is Thursday %date%.>file2.txt
move "e:\Console_lab\B\E\file2.txt" "e:\Console_lab\B\D\file2.txt
cd..
cd..
cd A
echo It is Autumn>file3.txt
copy "e:\Console_lab\A\file3.txt" "e:\Console_lab\A\file4.txt"	
del file3.txt
del file4.txt
