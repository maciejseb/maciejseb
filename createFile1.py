filename = 'donauki.txt'
with open(filename) as file_object:
    lines = file_object.read().split('\n')
for line in lines:
    print(line.rstrip())


''' 
plik wejściowy

auffinden
znajdować
er ist nirgends aufzufinden
nie można go nigdzie znaleźć
wieder auffinden
odnajdywać"

musimy takie coś zrobić w zmiennej words był string 

worlds = [];
worlds[0] = [
"auffinden",
"znajdować"
];
worlds[1] =["er ist nirgends aufzufinden",
"nie można go nigdzie znaleźć"];
worlds[2] =["wieder auffinden",
"odnajdywać"];
'''    
  

worlds = '';
worlds += 'worlds = [];\n'


lines_index = 0;
krok=0;
while lines_index < len(lines):   
    worlds += 'worlds['+str(krok) +'] = ["'+lines[lines_index] +'","'+\
    lines[lines_index+1] +'"];\n'
    lines_index = lines_index +2;
    krok = krok +1;
    
    
output_filename = "words.txt"
with open(output_filename, 'a') as file_object:
    file_object.write(worlds)
    
filename = 'wzor.html'
with open(filename) as file_object:
    wzor = file_object.read().split('<script>')

print('pierwszy \n')
print(wzor[0])
print('\n')
print('drugi \n')
print(wzor[1])
print('\n')

output_filename = "gotowaStrona.html"
with open(output_filename, 'a') as file_object:
    file_object.write(wzor[0]+'\n')
    file_object.write('<script> \n')
    file_object.write(worlds+'\n')
    file_object.write(wzor[1]+'\n')




   
