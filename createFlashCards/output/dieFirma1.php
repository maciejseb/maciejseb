<!DOCTYPE html>
<html>
<body>
<a href = 'http://localhost/learn/index.php'>strona główna</a>
<h1>powtórka słówek</h1>
<h1>source - pons.pl, dw.com</h1>

<button onclick="myNiemiecki()">Następny</button>
<button onclick="myPolski()">Po Polsku</button>


<h2><p id="niemiecki" class = "name"></p></h2></br>
<h2><p id="polski" class = "name"></h2></p>



<script> 
worlds = [];
worlds[0] = ["Bewerbung.","podanie  [o pracę]."];
worlds[1] = ["Missfallen.","nie podobać się komuś."];
worlds[2] = ["was missfällt dir an ihr.","co ci się w niej nie podoba."];
worlds[3] = ["Jedenfalls.","w każdym razie."];
worlds[4] = ["er hat jedenfalls nichts davon gesagt.","w każdym razie on nic o tym nie wspomniał."];
worlds[5] = ["Verstand (Denkfähigkeit).","rozum ."];
worlds[6] = ["Verstand (Vernunft).","rozsądek ."];
worlds[7] = ["bei klarem/nicht bei klarem Verstand sein.","być/nie być przy zdrowych zmysłach."];
worlds[8] = ["jdn um den Verstand bringen.","pozbawić kogoś rozumu."];
worlds[9] = ["das geht über meinen Verstand pot.","to mi się nie mieści w głowie ."];
worlds[10] = ["Ehrgeiz.","Ambicja."];
worlds[11] = ["Unerlässlich.","Nieodzowny."];




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
