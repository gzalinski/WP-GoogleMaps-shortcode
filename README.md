# WP-GoogleMaps-shortcode
Add a google map that has a marker in your wordpress posts. 

ShortCode [myMap]

Shortcode-ul are următoarele atribute:
id - identificatorul etichetei HTML ce va afișa harta.    
width - map width in %, px, wh .. 
height -map height in %,px, vh .. 
lat - latitude of marker
lng - longitude of marker
zoom - map zoom, valoarea inițială 
marker - culoarea marcatorului în orice format.

Valorile inițiale ale atributelor:
 id = map
 width = 100%
 height = 300px
 lat = personal
 lng = personal
 zoom = 11
 marker = #fd443d (red) 

Pentru a afișa o hartă inițial este suficient să indicăm doar coordonatele marcatorului. 
 Exemplu: [myMap lat="47.039897" lng="28.808067" ]

Pentru ca harta să arate de mai aproape folosim atributul zoom:
 Exemplu: [myMap lat="47.039897" lng="28.808067" zoom="17" ]
 
Pentru ca marcatorul să fie de o altă culoare folosim atributul marker:
 Exemplu: [myMap lat="47.039897" lng="28.808067" zoom="5" marker="blue"]
 
Pentru alte dimensiuni a hărții folosim atributele width și height:
 Exemplu: [myMap lat="47.039897" lng="28.808067" zoom="10" marker="blue" width="50%" height="50vh" ]
 
Nu are sens sa folosim: zoom="11", width="100%" , height= "300px" sau marker="#fd443d", întrucît ceste valori sunt inițiale.
  
  
