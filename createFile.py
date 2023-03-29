filename = 'deutsch.txt'
with open(filename) as file_object:
    english_lines = file_object.read().split('.')
for line in english_lines:
    print(line.rstrip())

filename = 'polski.txt'
with open(filename) as file_object:
    polish_lines = file_object.read().split('.')
for line in polish_lines:
    print(line.rstrip())
    
''' musimy takie coś zrobić w zmiennej words
worlds = [];
worlds[0] = [
"auffinden",
"znajdować"
];
worlds[1] =["er ist nirgends aufzufinden",
"nie można go nigdzie znaleźć"];
worlds[2] =["wieder auffinden",
"odnajdywać"];
worlds[3] =["auftauchen (Zweifel)",
"pojawiać się (wątpliwość)"];
worlds[4] =["auftauchen (Gedanke)",
"świtać (pomysł)"];
worlds[5] =["Gedanke (Idee)",
"pomysł"];
worlds[6] =["Gedanke (Absicht)",
"zamiar"];
worlds[7] =["jdn auf einen Gedanken bringen",
"podsuwać komuś jakąś myśl"];
'''    
  

worlds = '';
worlds += 'worlds = [];\n'

for  index in range(len(polish_lines)-1):    
    worlds += 'worlds['+str(index) +'] = ["'+english_lines[index].replace('\n',' ') +'.","'+\
    polish_lines[index].replace('\n',' ') +'."];\n'
    
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

output_filename = "toLearn.html"
with open(output_filename, 'a') as file_object:
    file_object.write(wzor[0]+'\n')
    file_object.write('<script> \n')
    file_object.write(worlds+'\n')
    file_object.write(wzor[1]+'\n')




   
'''   
output_filename = "toLearningTool.txt"
index = 0;
with open(output_filename, 'a') as file_object:
    for  index in range(len(polish_lines)):        
        line_output = english_lines[index].rstrip() +"[\n"
        file_object.write(line_output)
        line_output = polish_lines[index].rstrip() +"]\n"
        file_object.write(line_output)
        
'''

'''
pomysły
1. do pliku wyjsciowego dodać datę i godzinę utworzenia
2. gdy w stringu wystepuje znak ' lub " zastapić \' \"

'''