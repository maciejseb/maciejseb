filename = 'english.txt'
with open(filename) as file_object:
    english_lines = file_object.readlines()
for line in english_lines:
    print(line.rstrip())

filename = 'polish.txt'
with open(filename) as file_object:
    polish_lines = file_object.readlines()
for line in polish_lines:
    print(line.rstrip())
    
   
output_filename = "toLearningTool.txt"
index = 0;
with open(output_filename, 'a') as file_object:
    for  index in range(len(polish_lines)):        
        line_output = english_lines[index].rstrip() +"[\n"
        file_object.write(line_output)
        line_output = polish_lines[index].rstrip() +"]\n"
        file_object.write(line_output)
    