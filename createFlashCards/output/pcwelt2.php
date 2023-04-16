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
worlds[0] = ["unbemerkt bleiben.","pozostawać niezauważonym."];
worlds[1] = ["Karte sperren lassen.","kazać zablokować kartę."];
worlds[2] = ["verhindern, dass jd etw tut.","uniemożliwić komuś zrobienie czegoś."];
worlds[3] = ["keine Benachrichtigung verschickt.","Nie wysłano powiadomienia."];
worlds[4] = ["Screenshots von einmaligen Fotos.","Zrzuty ekranu z unikalnych zdjęć."];
worlds[5] = ["die Kooperation verweigern.","odmówić współpracy."];
worlds[6] = ["Verschenken.","Rozdawać."];
worlds[7] = ["Altlast.","Obciążenie."];
worlds[8] = ["Voraussetzung für die Installation.","Warunek wstępny instalacji."];
worlds[9] = ["von einer Hypothese ausgehen.","przyjąć hipotezę."];
worlds[10] = ["ein formloser Antrag.","nieformalny wniosek."];
worlds[11] = ["den Antrag stellen.","wnieść  wnosić."];
worlds[12] = ["erneuter Antrag.","ponowny wniosek."];




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
