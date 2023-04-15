<!DOCTYPE html>
<html>
<body>
<a href = 'https://maciejseb.pl'>strona główna</a>
<h1>powtórka słówek</h1>
<h1>source - pons.pl, dw.com</h1>

<button onclick="myNiemiecki()">Następny</button>
<button onclick="myPolski()">Po Polsku</button>


<h2><p id="niemiecki" class = "name"></p></h2></br>
<h2><p id="polski" class = "name"></h2></p>


<script>

//#wstaw



//<a href = 'https://maciejseb.pl/pc-welt1.php'>pc welt1</a><br>

 worlds = [];
worlds[0] = ["bez uprzedniego powiadomienia","ohne vorherige Benachrichtigung"];
worlds[1] = ["powiadomić kogoś o czymś","jdn über etw benachrichtigen"];
worlds[2] = ["Podejmować","Aufnehmen"];
worlds[3] = ["","Und seine Kleidung"];
worlds[4] = ["A jego ubranie","sogar in Schwarz-Weiß war sie atemberaubend"];
worlds[5] = ["",""];
worlds[6] = ["sich am Treppengeländer festhalten","nawet w czerni i bieli to ubranie było oszałamiające"];
worlds[7] = ["Nicht, dass ihr Mann es mitbekommt","trzymać się poręczy schodów"];
worlds[8] = ["Jegliche","Nie chciałbyś, żeby jej facet cię podsłuchał"];
worlds[9] = ["neu erstellen","każdy · wszelki"];
worlds[10] = ["Selbstlöschend","sporządzać ponownie"];
worlds[11] = ["selbstlöschenden Nachrichten","Samogasnący"];
worlds[12] = ["","wiadomości samoczynnie usuwane"];


licznik = 0;
poNiemiecku = "";
function myNiemiecki() {
  document.getElementById("niemiecki").innerHTML = worlds[licznik][0];
  document.getElementById("polski").innerHTML = "";
  poNiemiecku = worlds[licznik][1];
  licznik = licznik +1;
  // gdy licznik jest wiekszy niż wymiar tablicy worlds przyjmuje wartość 0
  // początek tablicy
  if(licznik > (worlds.length-1))
  {
     licznik = 0;
  }

}
function myPolski() {
  document.getElementById("polski").innerHTML = poNiemiecku;
}
/*
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
*/
</script>

</body>
</html>