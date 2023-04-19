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
worlds[0] = ["followed a few notches down by To Kill a Mockingbird","a po nim kilka stopni niżej Zabić drozda."];
worlds[1] = ["overwhelming success","przytłaczający sukces"];
worlds[2] = ["Reviewers were enthusiastic","Recenzenci byli entuzjastycznie nastawieni"];
worlds[3] = ["attracted readers by the tens of thousands","przyciągał czytelników dziesiątkami tysięcy"];
worlds[4] = ["observing that somehow contemporary statesmen","zauważając, że w jakiś sposób współcześni mężowie stanu"];
worlds[5] = ["avoid the pitfalls that led to August","uniknąć pułapek, które doprowadziły do sierpnia"];
worlds[6] = ["forbidden by the donor’s will","zabronione przez testament darczyńcy"];
worlds[7] = ["reward a work on a non-American subject with the Prize","nagrodzić nagrodą pracę o tematyce nieamerykańskiej"];
worlds[8] = ["found a solution by awarding Mrs. Tuchman a Prize","znalazł rozwiązanie, przyznając pani Tuchman nagrodę"];
worlds[9] = ["made the author’s reputation","sprawił, że reputacja autora"];
worlds[10] = ["her work thereafter was gripping and elegant","jej praca następnie była porywająca i elegancka."];
worlds[11] = ["gives it its stamp and has created its enormous reputation","nadaje jej piętno i stworzył jej ogromną reputację"];
worlds[12] = ["Four qualities stand out","Wyróżniają się cztery cechy"];
worlds[13] = ["wealth of vivid detail","bogactwo żywych szczegółów"];




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
