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
worlds[0] = ["etw missbilligen","potępiać coś"];
worlds[1] = ["ohne vorherige Benachrichtigung","bez uprzedniego powiadomienia"];
worlds[2] = ["jdn über etw benachrichtigen","powiadomić kogoś o czymś"];
worlds[3] = ["aufnehmen","podejmować"];
worlds[4] = ["Und seine Kleidung. . sogar in Schwarz-Weiß war sie atemberaubend.","A jego ubranie... nawet w czerni i bieli to ubranie było oszałamiające!"];
worlds[5] = ["sich am Treppengeländer festhalten","trzymać się poręczy schodów"];
worlds[6] = ["Nicht, dass ihr Mann es mitbekommt.","Nie chciałbyś, żeby jej facet cię podsłuchał."];
worlds[7] = ["jegliche","każdy · wszelki"];
worlds[8] = ["neu erstellen","sporządzać ponownie"];
worlds[9] = ["selbstlöschend","samogasnący"];
worlds[10] = [" selbstlöschenden Nachrichten","wiadomości samoczynnie usuwane"];




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
