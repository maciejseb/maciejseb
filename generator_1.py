import os
import glob
import re


def zrob_lekcje(dane_do_tworzenia_lekcji, sciezka_docelowa, adres_internetowy,host):
    # wczytujemy szablon
    template_path = os.path.join('template', 'template.html')
    with open(template_path, 'r', encoding='utf-8') as f:   
        szablon = f.read()


    
    

    for i in range(len(dane_do_tworzenia_lekcji)):
        # Tworzymy nazwę pliku
        plik_do_zapisu = f"plik-{i}.html"
        sciezka_pliku = os.path.join(sciezka_docelowa, plik_do_zapisu)

        adres_pliku = f"{adres_internetowy}/{plik_do_zapisu}"
    
        # Przygotowujemy wiersze do zapisania
        if i == 0:  # 0 
            
            adres_pliku_nastepnego = f"plik-{i+1}.html"
            adres_pliku_nastepnego = f"{adres_internetowy}/{adres_pliku_nastepnego}"
            opis = "Odpowiedź"
            link_nastepny = f'<a href="{adres_pliku_nastepnego}" class="btn btn-lg btn-light fw-bold border-white bg-white">{opis}</a>'
            wstaw_stringi = {
                                '{{home}}': host,
                                '{{po_polsku}}': dane_do_tworzenia_lekcji[i],
                                '{{po_niemiecku}}': '',
                                '{{link_wstecz}}' : '',
                                "{{link_nastepny}}" : link_nastepny

                            }
            

        if (i % 2 == 0) and (i != 0): # lub parzysty
            adres_pliku_nastepnego = f"plik-{i+1}.html"
            adres_pliku_nastepnego = f"{adres_internetowy}/{adres_pliku_nastepnego}"
            adres_pliku_poprzedniego = f"plik-{i-1}.html"
            adres_pliku_poprzedniego = f"{adres_internetowy}/{adres_pliku_poprzedniego}"
            opis = "Odpowiedź"
            link_nastepny = f'<a href="{adres_pliku_nastepnego}" class="btn btn-lg btn-light fw-bold border-white bg-white">{opis}</a>'
            opis = "Poprzedni";
            link_wstecz =  f'<a href="{adres_pliku_poprzedniego}">{opis}</a>'
            wstaw_stringi = {
                                '{{home}}': host,
                                '{{po_polsku}}': dane_do_tworzenia_lekcji[i],
                                '{{po_niemiecku}}': '',
                                '{{link_wstecz}}' : link_wstecz,
                                '{{link_nastepny}}' : link_nastepny

                            }
        if (i % 2 != 0) and (i != 0):  # lub nieparzysty
            adres_pliku_nastepnego = f"plik-{i+1}.html"
            adres_pliku_nastepnego = f"{adres_internetowy}/{adres_pliku_nastepnego}"
            # wyznaczamy maksymalny index w tablicy
            max_index_tablicy = len(dane_do_tworzenia_lekcji)-1;
            #jeżeli jestesmy na ostatnim indexie tablicy to adres_pliku nastepnego ustawiamy na plik-0.html
            if i == max_index_tablicy:
                adres_pliku_nastepnego = f"plik-0.html"
                adres_pliku_nastepnego = f"{adres_internetowy}/{adres_pliku_nastepnego}"

            adres_pliku_poprzedniego = f"plik-{i-1}.html"
            adres_pliku_poprzedniego = f"{adres_internetowy}/{adres_pliku_poprzedniego}"
            opis = 'Następny';
            link_nastepny = f'<a href="{adres_pliku_nastepnego}" class="btn btn-lg btn-light fw-bold border-white bg-white">{opis}</a>'
            opis = "Poprzedni";
            link_wstecz =  f'<a href="{adres_pliku_poprzedniego}">{opis}</a>'
            wstaw_stringi = {
                                '{{home}}': host,
                                '{{po_polsku}}': dane_do_tworzenia_lekcji[i-1],
                                '{{po_niemiecku}}': dane_do_tworzenia_lekcji[i],
                                '{{link_wstecz}}' : link_wstecz,
                                '{{link_nastepny}}' : link_nastepny
                             }
        # Zapis do pliku
        '''with open(sciezka_pliku, "w", encoding="utf-8") as f:
            f.writelines(do_zapisu)
        '''
        """with open(sciezka_pliku, "w", encoding="utf-8") as f:
            json.dump(wstaw_stringi, f, indent=4)
        """
        gotowy_do_zapisu = szablon
        for klucz, wartosc in wstaw_stringi.items():
            gotowy_do_zapisu = gotowy_do_zapisu.replace(klucz, wartosc)

        with open(sciezka_pliku, "w", encoding="utf-8") as f:
            f.writelines(gotowy_do_zapisu)



# --- KROK 1: pobranie wszystkich plików tekstowych z podkatalogu src ---
sciezka_src = "src"
sciezka_desc = "desc"

# znajdź wszystkie pliki .txt w katalogu src
pliki_tekstowe = glob.glob(os.path.join(sciezka_src, "*.txt"))

# --- KROK 2: wczytanie zawartości każdego pliku ---
dane_wejsciowe = []

for plik in pliki_tekstowe:
    dane_wejsciowe = []
    with open(plik, "r", encoding="utf-8") as f:
        dane_wejsciowe.extend(f.readlines())  # dodaj wiersze z każdego pliku do jednej tablicy
        # --- 1. Pobierz pierwszy wiersz, gdzi jest nazwa lekcji---
        nazwa_lekcji = dane_wejsciowe[0].strip()  # usuń białe znaki i \n

        # --- 2. Przekształć nazwę na bezpieczną dla serwera internetowego ---
        # Przekształcenie nazwy katalogu
        # Zamiana spacji na myślniki
        nazwa_katalogu_serwer = re.sub(r'\s+', '-', nazwa_lekcji.strip())  
         # Usunięcie niedozwolonych znaków
        nazwa_katalogu_serwer = re.sub(r'[^a-zA-Z0-9\-]', '', nazwa_katalogu_serwer) 
        # Zamiana na małe litery
        nazwa_katalogu_serwer = nazwa_katalogu_serwer.lower()  

        # --- 3. Utwórz katalog w podkatalogu desc ---
        sciezka_desc = "desc"
        sciezka_docelowa = os.path.join(sciezka_desc, nazwa_katalogu_serwer)
        os.makedirs(sciezka_docelowa, exist_ok=True)

        # --- 4. kopiowanie wszystkich wierszy poza pierwszym, gdzie jest 
        # nazwa lekcji czyli katalogu
        dane_do_tworzenia_lekcji = []
        dane_do_tworzenia_lekcji = dane_wejsciowe[1:]  

        # --- 5. w katalogu desc/nazwa_katalogu_do_zapisu zapisz lekcję
        # plik_1.html zawiera zdanie po polsku oraz link do pliku plik_2.html
        # plik_2.html zawiera zdanie po polsku oraz jego tłumaczenie
        # utwórz adres internetowy do katalogu gdzie host\sciezka_desc\nazwa_katalogu_do_zapisu
        host = "https://maciejseb.com.pl"
        adres_internetowy = f"{host}/{sciezka_desc}/{nazwa_katalogu_serwer}"
        zrob_lekcje(dane_do_tworzenia_lekcji, sciezka_docelowa, adres_internetowy,host)



