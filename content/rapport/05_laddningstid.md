# Laddningstid

Välja ut 3 webbplatser för att analysera laddningstider, resurser, ranking och ta reda på förbättringspunkter.
Sidorna som valdes (volvocars, matsmart, bth) är för att få till en bred bas som möjliggör varierande analyser.

## Urval

https://www.volvocars.com/se

https://www.matsmart.se/

https://www.bth.se/

## Metod

Jag har ett Google Kalkylark som jag sedan matar in värden på genom mitt urval, värden kommer från PageSpeed samt Dev Tools för att få en overall Pagespeed rating, till sist använder jag dev tools för att mäta laddningstid och antal resurser.

För att få en bra mätning på laddningstid och resurser så genomfördes testet tre gånger på varje utvald sida för att få ett medelvärde.

## Resultat

En sammanställning kan hittas på följande länk: <b>[Länk till kalkylarket](https://docs.google.com/spreadsheets/d/1txCgJqPN6er1ssRRsLA9MTEeV1ULSIn4wmQfRujK8cU/edit?usp=sharing)</b>

### Volvocars

[FIGURE src="image/sites/volvocars.png?h=500" caption="Bild på volvocars"]

<table style="border-spacing: 4px; border-collapse: separate;width:100%;background:#fff">
<h3> Mobil </h3>
<tr>
<td>PageSpeed Insights Rating </td>
<td>Förbättringar </td>
</tr>
<tr>
<td>25</td>

<td>Skicka bilder i modernare bildformat </td>
</tr>

</tr>
<tr>
<td></td>
<td>Använd bilder med rätt storlek</td>
<tr>
<td></td>
<td>Ta bort resurser som blockerar renderingen </td>
</tr>
<tr>
<td></td>
<td>Ta bort oanvänd CSS </td>
</tr>
</table>

<table style="border-spacing: 4px; border-collapse: separate;width:100%;background:#fff">
<h3> Dator </h3>
<tr>
<td>PageSpeed Insights Rating </td>
<td>Förbättringar </td>
<td>Laddningstid </td>
<td>Resurser</td>
<td>Storlek</td>
</tr>
<tr>
<td>83</td>
<td>Skicka bilder i modernare bildformat </td>
<td>1.1s </td>
<td>47st </td>
<td>5.7mb </td>
</tr>

</tr>
<tr> 
<td></td>
<td>Undvik upprepade omdirigeringar </td>
</tr>
<tr>
<td></td>
<td>Använd bilder med rätt storlek</td>
</tr>
<tr>
<td></td>
<td>Ta bort resurser som blockerar renderingen </td>
</tr>
<tr>
<td></td>
<td>Ta bort oanvänd CSS </td>
</tr>
</table>

### Matsmart

[FIGURE src="image/sites/matsmart.png?h=500" caption="Bild på Matsmart"]

<table style="border-spacing: 4px; border-collapse: separate;width:100%;background:#fff">
<h3> Mobil </h3>
<tr>
<td>PageSpeed Insights Rating </td>
<td>Förbättringar </td>
</tr>
<tr>
<td>10</td>
<td>Skicka bilder i modernare bildformat </td>
</tr>
<tr>
<td></td>
<td>Ta bort oanvänd CSS</td>
</tr>
<td></td>
<td>Undvik upprepade omdirigeringar</td>
</tr>
<tr>
<td></td>
<td>Ta bort resurser som blockerar renderingen </td>
</tr>
</table>

<table style="border-spacing: 4px; border-collapse: separate;width:100%;background:#fff">
<h3> Dator </h3>
<tr>
<td>PageSpeed Insights Rating </td>
<td>Förbättringar </td>
<td>Laddningstid </td>
<td>Resurser</td>
<td>Storlek</td>
</tr>
<tr>
<td>45</td>
<td>Skicka bilder i modernare bildformat </td>
<td>7.4s </td>
<td>111st </td>
<td>8.6mb </td>
</tr>

</tr>
<tr>
<td></td>
<td>Använd bilder med rätt storlek</td>
</tr>
<td></td>
<td>Använd bilder med rätt storlek</td>
</tr>
<tr>
<td></td>
<td>Ta bort resurser som blockerar renderingen </td>
</tr>
<tr>
<td></td>
<td>Ta bort oanvänd CSS </td>
</tr>
</table>

### BTH

[FIGURE src="image/sites/bth.png?h=500" caption="Bild på BTH"]

<table style="border-spacing: 4px; border-collapse: separate;width:100%;background:#fff">
<h3> Mobil </h3>
<tr>
<td>PageSpeed Insights Rating </td>
<td>Förbättringar </td>
</tr>
<tr>
<td>48</td>
<td>Skjut upp inläsningen av bilder som inte visas på skärmen </td>
</tr>

</tr>
<tr> 
<td></td>
<td>Skicka bilder i modernare bildformat </td>
</tr>
<tr>
<td></td>
<td>Minska svarstiderna från servern (tid till första byte) </td>

<tr>
<td></td>
<td>Ta bort resurser som blockerar renderingen </td>
</tr>
<tr>
<td></td>
<td>Ta bort oanvänd CSS </td>
</tr>
</table>

<table style="border-spacing: 4px; border-collapse: separate;width:100%;background:#fff">
<h3> Dator </h3>
<tr>
<td>PageSpeed Insights Rating </td>
<td>Förbättringar </td>
<td>Laddningstid </td>
<td>Resurser</td>
<td>Storlek</td>
</tr>
<tr>
<td>85</td>
<td>Skicka bilder i modernare bildformat </td>
<td>13.49s </td>
<td>141st </td>
<td>10.9mb </td>
</tr>

</tr>
<tr> 
<td></td>
<td>Minska svarstiderna från servern (tid till första byte) </td>
</tr>
<tr> 
<td></td>
<td>Ta bort resurser som blockerar renderingen </td>
</tr><tr> 
<td></td>
<td>Skicka bilder i modernare bildformat </td>
</tr>
</table>

## Sammanfattning

De gemensamma punkter som verkar dra ner på betyget sidorna har är bilderna samt oanvänd CSS regler vilket gäller för både dator och mobil.

Alla sidor har även problem med resurser som blockerar renderingen på båda enheter.

Åtgärder som samtliga sidor kan utnyttja är komprimering av bilder, olika bilder för olika storlekar (responsivitet) så att en högupplöst 6MB stor bild inte laddas in på en liten mobilenhet, istället skall det vara en mindre bild som är anpassad för den enheten.
Man bör även utnyttja cache lagring, minifiering av HTML, CSS och JavaScript.

Jag tycker att en gräns för absolut laddningstid bör bara under 2 sekunder. Dessvärre var både Matsmart och BTH väldigt långt efter, där Volvocars har lyckats bäst.

## Rangordning

Genom kalkylarket kan man tydligt se skillnader på samtliga webbplatser. Rangordningen är som följande (från bäst till sämst):

1. Volvocars
2. Matsmart
3. BTH

## Övrigt

Analys skriven utav Mohammad Alburhan
