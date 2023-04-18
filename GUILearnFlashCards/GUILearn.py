import tkinter as tk
import tkinter.font as font
from tkinter import filedialog as fd
from tkinter.messagebox import showinfo
import codecs




class LearnWords:
    def __init__(self, master):
        self.master = master
        
        self.german_words = [];
        self.polish_words = [];

        #window = tk.Tk()
        master.geometry("1000x600")
        master.columnconfigure(0, minsize=250)
        master.rowconfigure([0, 1,2,3,4], minsize=100)


        myFont = font.Font(size=30)


        self.label1 = tk.Label(text="Python rocks!")
        self.label1.grid(row=0, column=0)
        self.label1['font'] = myFont


        self.label2 = tk.Label(text="Python rocks1!")
        self.label2.grid(row=1, column=0)
        self.label2['font'] = myFont
        
        self.b1 = tk.Button(text = "Następny",command=self.display_german)
        self.b1.grid(row=2, column=0)
        self.b1['font'] = myFont
        
        self.b2 = tk.Button(text = "Po polsku",command = self.display_polish)
        self.b2.grid(row=3, column=0)
        self.b2['font'] = myFont
        
         # open button
        self.open_button = tk.Button(
            text='Open a File',
            command=self.select_file
        )       

        self.open_button.grid(row=4, column=0)
        self.open_button['font'] = myFont
        

    def display_german(self):
            if len(self.german_words) != 0:
                self.label1['text'] = self.german_words[0]



        

    def display_polish(self):
            if len(self.german_words) != 0:
                self.label2['text'] = self.polish_words[0]


        

    def select_file(self):
        filetypes = (
            ('text files', '*.txt'),
            ('All files', '*.*')
        )

        filename = fd.askopenfilename(
            title='Open a file',
            initialdir='/',
            filetypes=filetypes)

        lines = [];
        self.german_words = []
        self.polish_words = []
        self.label1['text'] = ''
        self.label2['text'] = ''

        if filename:
            with open(filename, encoding='utf-8') as file:
                lines =  file.read().split('\n')
                lines = [line for line in lines if line.strip()]
            
                krok = 0
                while krok < len(lines):
                    self.german_words.append(lines[krok])
                    self.polish_words.append(lines[krok+1])              
                    krok = krok + 2;
 
    
       
def main(): 
    root = tk.Tk()
    app = LearnWords(root)
    root.mainloop()

if __name__ == '__main__':
    main()

