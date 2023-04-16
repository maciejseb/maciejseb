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
worlds = [];
worlds[0] = ["tom war einer der ersten, die ankamen.","Tom był jedną z pierwszych osób, która przyjechała."];
worlds[1] = ["gut angekommen","dobrze przyjęty"];
worlds[2] = ["grob gemahlen","grubo mielony"];
worlds[3] = ["wer zuerst kommt, mahlt zuerst","kto pierwszy, ten lepszy"];
worlds[4] = ["Angebot etwas aus der Zeit gefallen","Oferta trochę nie na czasie"];
worlds[5] = ["Arbeit abnehmen","Zdjąć z pracy"];
worlds[6] = ["Inhalte zusammenfassen","Podsumuj treść"];
worlds[7] = ["Auswirkung (einer Entdeckung)","skutek"];
worlds[8] = ["Aufsätze von der KI erstellen ","Tworzenie esejów z AI"];
worlds[9] = ["mit rudimentärem Verständnis für das Thema.","z elementarnym zrozumieniem tematu."];
worlds[10] = ["Beitrag (Artikel, Aufsatz)","artykuł "];
worlds[11] = ["Problemstellungen aus dem Linux-Kontext gefüttert ","Problemy pochodzące z kontekstu systemu Linux"];




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
