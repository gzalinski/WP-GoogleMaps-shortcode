# WP-GoogleMaps-shortcode
Add a google map that has a marker in your wordpress posts. 

ShortCode [myMap]

<b>Shortcode-ul are următoarele atribute:</b> <br>
id - identificatorul etichetei HTML ce va afișa harta. <br>   
width - map width in %, px, wh .. <br>
height -map height in %,px, vh .. <br>
lat - latitude of marker <br>
lng - longitude of marker <br>
zoom - map zoom, valoarea inițială <br>
marker - culoarea marcatorului în orice format. <br>

<b>Valorile inițiale ale atributelor:</b> <br>
 id = map <br>
 width = 100% <br>
 height = 300px <br>
 lat = personal <br>
 lng = personal <br>
 zoom = 11 <br>
 marker = #fd443d (red) <br>

<b>Pentru a afișa o hartă inițial este suficient să indicăm doar coordonatele marcatorului. </b> <br>
 Exemplu: <code>[myMap lat="47.039897" lng="28.808067" ] </code>

<b>Pentru ca harta să arate de mai aproape folosim atributul zoom:</b> <br>
 Exemplu: <code>[myMap lat="47.039897" lng="28.808067" zoom="17" ] </code>
 
<b>Pentru ca marcatorul să fie de o altă culoare folosim atributul marker:</b> <br>
 Exemplu: <code>[myMap lat="47.039897" lng="28.808067" zoom="5" marker="blue"] </code>
 
<b>Pentru alte dimensiuni a hărții folosim atributele width și height:</b><br>
 Exemplu: <code>[myMap lat="47.039897" lng="28.808067" zoom="10" marker="blue" width="50%" height="50vh" ]</code>
 
Nu are sens sa folosim: zoom="11", width="100%" , height= "300px" sau marker="#fd443d", întrucît ceste valori sunt inițiale.
  
  
