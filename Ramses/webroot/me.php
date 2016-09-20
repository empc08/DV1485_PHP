<?php

include(__DIR__ . '/config.php');
include(__DIR__ . '/menu.php');

$ramses['title'] = "Om mig";

$menu_html = generateMenu($menu, 'menu');

$ramses['header'] = "\n<img class='sitelogo' src=img/banner.png alt='Ramses Logo'/>\n"
                    . "$menu_html";

$ramses['main'] = <<<EOD
        
<h1>OM MIG</h1>

<img class='portrait' src='img/portrait.png'/>
        
<p>Mitt namn är Emil Persson. Jag kommer från de norra delarna i Skåne, där jag är uppvuxen i Broby, en mindre ort utanför
Kristianstad/Hässleholm. Jag växte upp tillsammans med min familj i ett medelstort torpliknande hus i utkanten av
byn, med angränsande skog och endast en granne som bodde i sitt torp under sommaren. Vi hade en stor svart hund, en fin korsning
mellan Sankt Bernhard och New Foundland. Jag har många fina minnen från den tiden, och de gånger jag idag åker tillbaks för att
hälsa på mina föräldrar på orten så händer det att jag promenerar förbi det gamla huset och tänker tillbaks. Min största dröm
är att en dag kunna köpa tillbaks mitt barndomshem från dansken som bor där nu och leva mina dagar där i harmoni under
parollen Hakuna Matata. Gärna med två hundar, bra böcker och en massa trädgårdsarbete.</p>
    
<p>Jag var alltid intresserad av datorer, och den där varma vårdagen -97 när jag kom hem från skolan så stod den där. Vår allra
första PC, som lirade Windows 95. Pappa hade slagit igång skärmen och ritat en blomma i Paint. Musen hade han placerat på
vänster sida i oförstånd, så än idag är hela min familj fortfarande "vänsterhänta". Jag minns fortfarande hur jag jäste när
jag på egen hand lyckades ladda ner, unzippa, och installera ett demo av Quake. Olikt de flesta nördar brydde mig inte nämnvärt
om vad som fanns innanför plåten, utan jag fascinerades istället av dess mångsidighet, hur du kan späcka arbetsredskap och nöjen
i en och samma maskin. Och de kreativa möjligheterna. En maskin för alla.</p>
        
<p>Redan under gymnasiet var jag ordentligt skoltrött och jag visste inte vad jag ville bli. Jag gick Teknikprogrammet, men
jag kan egentligen inte tala om varför. Jag kan inte påstå att mitt datorintresse var så starkt att jag kunde se mig själv
arbeta med det, men samtidigt var det inte mycket annat jag kunde föreställa mig. Betygen halkade efter i min avsaknad av
intresse, och jag kände mig vilsen. I ett av klassrummen hängde en tavla med en bild på en fotboll, och under bollen löd texten
"Om du inte vet var målet är hjälper det inte hur hårt du sparkar". Texten satte ord på vad jag kände. De varma somrarna jag
spenderade vid min fars firma som skrotare för 20kr/h hade i alla fall gett mig god insikt i vad jag inte ville jobba med.
En dag hamnade jag hos min syo, och tillsammans gick vi igenom en programkatalog för högskolor. Ett basår skulle troligen ge
mig insikt, kom vi fram till.</p>
        
<p>Jag hamnade på BTH, där jag gick ett basår 2008. Över sommaren funderade jag på vad det ska bli av det här. IT-säkerhets
programmet skulle dra igång till hösten, och tills dess måste jag veta. Jag funderade på vad programmering hade att ge mig,
och den sommaren beslöt jag mig för att lära mig C, vare sig jag tyckte om det eller inte. Boken C Primer Plus av Stephen
Prata fanns att låna på Piratebay, och jag provade för första gången självstudier, utan deadlines och i min egen takt. Då
hände något, och det förändrade mitt liv för alltid. När hösten infann sig var jag för första gången motiverad.</p>

<p>Jag läste IT-säkerhetsprogrammet mellan 2009 och 2012. Det var troligen de bästa åren i mitt liv sedan mellanstadiet.
Jag fick se mitt nyvunna intresse för programvaruteknik ta fart och explodera på riktigt. Jag började engagera mig och höja
mina betyg i kurserna. Jag fann vänner och likasinnade, självförtroendet växte, och skolan började för första gången i mitt
liv betyda något. Jag tror jag fann mig själv här. När kurserna tog slut efter tre år så sökte jag mig direkt till
arbetsmarknaden; jag kunde inte vänta. Att flytta hem till mina föräldrar igen kändes som en förlust för mig efter tre
år av självständighet. En månad senare slösade jag de sista av mina pengar på en tågbiljett till Linköping där jag fått en
arbetsintervju.</p>

<p>Idag fyra år senare är jag fortfarande anställd på Saab Aeronautics i Linköping, där jag arbetar som systemingenjör och
teamledare med utvecklingen av JAS 39E Gripen. Min fritid spenderar jag gärna med att läsa facklitteratur och artiklar, laga
mat, skriva kod i mina projekt eller med en helkväll med min bror och polarna över Skype, där vi brukar streama spel till
varandra och snacka om livet i allmänt. Men framför allt har jag lovat mig själv att slutföra min examen, vilket nu lett
mig till den här kursen.</p>

EOD;

$ramses['footer'] = <<<EOD
"The barriers are self imposed. If you want to set off and go develop some grand new thing, you don't need
millions of dollars of capitalization. You need enough pizza and Diet Coke to stick in your refrigerator, a cheap
PC to work on, and the dedication to go through with it."<br><br>
             
- John Carmack
EOD;

include(RAMSES_THEME_PATH);