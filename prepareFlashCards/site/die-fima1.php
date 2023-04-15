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



//<a href = 'https://maciejseb.pl/die-fima1.php>die fima1</a><br>

 worlds = [];
worlds[0] = ["podanie  [o pracę]","Bewerbung"];
worlds[1] = ["nie podobać się komuś","Missfallen"];
worlds[2] = ["co ci się w niej nie podoba","was missfällt dir an ihr"];
worlds[3] = ["w każdym razie","Jedenfalls"];
worlds[4] = ["w każdym razie on nic o tym nie wspomniał","er hat jedenfalls nichts davon gesagt"];
worlds[5] = ["rozum","Verstand (Denkfähigkeit)"];
worlds[6] = ["rozsądek","Verstand (Vernunft)"];
worlds[7] = ["być/nie być przy zdrowych zmysłach","bei klarem/nicht bei klarem Verstand sein"];
worlds[8] = ["pozbawić kogoś rozumu","jdn um den Verstand bringen"];
worlds[9] = ["to mi się nie mieści w głowie","das geht über meinen Verstand pot"];
worlds[10] = ["Ambicja","Ehrgeiz"];
worlds[11] = ["Nieodzowny","Unerlässlich"];


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