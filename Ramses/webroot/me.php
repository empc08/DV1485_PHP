<?php

include(__DIR__ . '/config.php');
include(__DIR__ . '/menu.php');

$ramses['title'] = "Om mig";

$menu_html = generateMenu($menu, 'menu');

$ramses['header'] = "\n<img class='sitelogo' src=img/banner.png alt='Ramses Logo'/>\n"
        . "$menu_html";

$ramses['main'] = <<<EOD
        
<h1>OM MIG</h1>

<p>Mitt namn är Emil Persson. Jag kommer från de norra delarna i Skåne, där jag är uppvuxen i Broby, en mindre ort utanför
Kristianstad/Hässleholm. Jag växte upp tillsammans med min yngre bror i ett medelstort torpliknande hus i utkanten av
byn, med angränsande skog och endast en granne som bodde i sitt torp under sommaren. Vårt hus låg alldeles bredvid en stor
äng och en plätt där man höll (och håller fortfarande) marknad varje år. Jag och de flesta av mina släktingar gick alltid på
marknaden, och efteråt samlades släkten hemma hos oss för att äta rökt ål och dricka kaffe. Jag har många fina minnen från
den tiden, och de gånger jag idag åker tillbaks för att hälsa på mina föräldrar på orten så händer det att jag promenerar
förbi det gamla huset och tänker tillbaks. Min största dröm är att en vacker dag kunna köpa tillbaks mitt barndomshem från
dansken som bor där nu och leva mina dagar där i harmoni under parollen Hakuna Matata. Gärna med två hundar, bra böcker och
en massa trädgårdsarbete.</p>

<p>Redan under gymnasiet var jag ordentligt skoltrött och jag visste inte vad jag ville bli. Jag gick Teknikprogrammet, men
jag kan egentligen inte tala om varför. Några riktiga teknikintressen hade jag ju inte. Men inte heller något annat program
lockade mig. Betygen halkade efter i min avsaknad av intresse, och jag kände mig vilsen. I ett av klassrummen hängde en tavla
med en bild på en fotboll, och under bollen löd texten "Om du inte vet var målet är hjälper det inte hur hårt du sparkar".
Texten tilltalade mig genom att sätta ord på mina känslor. De varma somrarna jag spenderade vid min fars firma som skrotare för
20kr/h hade i alla fall gett mig god insikt i vad jag inte ville jobba med. Men jag lovade mig själv att vad jag än skulle
bli, det skulle jag bli bra på. En dag hamnade jag hos min syo, och tillsammans gick vi igenom en programkatalog för
högskolor.</p>

<p>Jag hamnade på BTH, där jag gick ett basår 2008 följt av IT-säkerhetsprogrammet mellan 2009 och 2012. Det var troligen de
bästa åren i mitt liv sedan jag gick i mellanstadiet. Någonting förändrade mig när jag började här, och mitt intresse för
programvaruteknik tog fart och exploderade på riktigt. Jag började engagera mig och höja mina betyg i kurserna. Jag fann
vänner och likasinnade, självförtroendet växte, och skolan började för första gången i mitt liv betyda något. Jag tror jag
fann mig själv här. När kurserna tog slut efter tre år så sökte jag mig direkt till arbetsmarknaden; jag kunde inte vänta.
Att flytta hem till mina föräldrar igen kändes som en förlust för mig efter tre självständiga år. En månad senare slösade
jag de sista av mina pengar på en tågbiljett till Linköping där jag fått en arbetsintervju.</p>

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