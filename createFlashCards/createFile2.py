#importing the os module
import os



def generate(filename,output_filename):
    # function body 

       

    with open(filename) as file_object:
        lines = file_object.read().split('\n')
    '''
    remove empty lines
    '''
    lines = [line for line in lines if line.strip()]
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
        
        
    #output_filename = "words.txt"
    #with open(output_filename, 'a') as file_object:
    #    file_object.write(worlds)
        
    filename = 'wzor.html'
    with open(filename) as file_object:
        wzor = file_object.read().split('<script>')

    print('pierwszy \n')
    print(wzor[0])
    print('\n')
    print('drugi \n')
    print(wzor[1])
    print('\n')

    #output_filename = "gotowaStrona.html"
    with open(output_filename, 'a') as file_object:
        file_object.write(wzor[0]+'\n')
        file_object.write('<script> \n')
        file_object.write(worlds+'\n')
        file_object.write(wzor[1]+'\n')
        
    return    
    

#to get the current working directory
directory = os.getcwd()

print(directory)

input_directory = directory +"\\input\\"
output_directory = directory +"\\output\\"

print(input_directory)

#take all files from input_directory

res = os.listdir(input_directory)

print(res)

krok=0
while krok < len(res):
    input_filename = input_directory + res[krok];
    #create for example : with donauki.txt output file donauki.php
    position = res[krok].rfind('.')
    output_filename = output_directory + res[krok][0:position] +".php"
    generate(input_filename,output_filename)
    krok = krok + 1
    
    
#create index.php from indexwzor.php
filename = 'indexwzor.php'
with open(filename) as file_object:
    wzor = file_object.read().split('?>')

res_output = os.listdir(output_directory)

# make links like <a href = 'https://maciejseb.pl/die-fima2.php'>die fima2</a><br>
krok=0
links = ''
domain = 'https://maciejseb.pl/'
while krok < len(res_output):
    file_link ='<a href = \'' + domain + res_output[krok] + '\'>' + res_output[krok] + '</a><br>\n'
    links = links + file_link;   
    krok = krok + 1
    
output_filename = output_directory+"index.php"
with open(output_filename, 'a') as file_object:
    file_object.write(wzor[0]+'\n')
    file_object.write('?> \n')
    file_object.write(links+'\n')
    file_object.write(wzor[1]+'\n')
    
    
#<a href = 'https://maciejseb.pl/die-fima2.php'>die fima2</a><br>

        




   
