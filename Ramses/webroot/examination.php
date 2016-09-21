<?php

include(__DIR__ . '/config.php');
include(__DIR__ . '/menu.php');

$ramses['title'] = "Redovisning";

$menu_html = generateMenu($menu, 'menu');

$ramses['header'] = "\n<img class='sitelogo' src=img/banner.png alt='Ramses Logo'/>\n"
        . "$menu_html";

$kmom01 = <<<EOD
<h1>Redovisningstext kmom01</h1>
        
<h3>Vilken utvecklingsmiljö använder du?</h3>
        
<p>Jag sitter på Linux Ubuntu 14.04 och jag använder mig av NetBeans IDE när jag skriver kod i PHP. För att spara mina nerver kör
jag XAMPP, och jag använder Firefox som browser för att verifiera resultat.</p>

<h3>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</h3>

<p>Guiderna för PHP, Anax och den dynamiska menyn var lätta att följa och hade bra exempel. Jag har inte skrivit särskilt mycket PHP,
men jag har god vana av C/C++ och Java. Då syntaxen för PHP är väldigt lik C så var konstruktionerna lätta att känna igen. Däremot är
jag inte särskilt van vid att skriva i språk med dynamiska typsystem. Det känns inledningsvis som att man kommer undan med betydligt
mer i PHP, med all dess "type juggling" vid tilldelningar och jämförelser. Jag lade märke till att man i switch-satser
kan göra jämförelser på andra typer än heltal, exempelvis strängar. Detta är någonting jag länge saknat i mina favoritspråk.</p>

<p>Utvecklarna till PHP tycks ha fokuserat mycket på mångsidighet. Med en bakgrund i C får jag tillgång till snarlik syntax samt
funktioner som s/printf, strcmp m.fl. En person med scripting-bakgrund bemöts av ett gott stöd för associativa arrayer, reguljära
uttryck och echo-funktionen. Imponerande!</p>

<p>Vidare har jag bekantat mig med PEAR då jag ville installera phpDocumentor. Dessutom hittade jag en smidig plugin till NetBeans
som hjälper mig att autokomplettera med PhpDoc-taggar. Dessutom kan jag generera min dokumentation direkt från min IDE, vilket är
smidigt. Har testat, och det ser bra ut.</p>

<h3>Vad döpte du din webbmall Anax till?</h3>

<p>Min webbmall heter Ramses, farao över det forntida Egypten.</p>

<h3>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</h3>

<p>Jag gillar strukturen i Anax, den har hittills varit skön att arbeta i. Jag har mestadels varit inne i CSS-mallen och pillat runt
för att åstadkomma ett någorlunda tema på sidan. Det mesta i Anax är orört, men jag har vågat mig på att använda class-attributet i
menyn för att, utöver att känna igen vilken länk som är vald, även känna igen om menylänken är en bild eller vanlig text. På så sätt
kan jag använda mig av en ikon i menyn.</p>

<h3>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</h3>

<p>Jag gjorde den som en modul direkt för att lära mig hur man gör. Jag såg då i källkodsfilen för bootstrapper hur myAutoLoader()
förväntar sig att modulen är namngedd och placerad i filstrukturen. Eftersom klassfilen skriver ut HTML fanns det inget skäl för mig
att skapa ett CSource-objekt själv, utan jag inkluderade endast filen som den är. Jag ville dock få in dess HTML i en variabel för att
anpassa den till mitt tema, och jag hittade ett smidigt sätt för detta genom att påverka "output buffering" tillfälligt.</p>

<h3>Gjorde du extrauppgiften med GitHub?</h3>

<p>Ja, jag har lagt upp Ramses där. Jag har vana av Git sedan ett par månader tillbaks, och jag kände att erfarenhet av GitHub inte
kan skada. Det var inga problem att länka mitt lokala repo till GitHub.</p>
EOD;

$ramses['main'] = $kmom01;

$ramses['footer'] = <<<EOD
"The barriers are self imposed. If you want to set off and go develop some grand new thing, you don't need
millions of dollars of capitalization. You need enough pizza and Diet Coke to stick in your refrigerator, a cheap
PC to work on, and the dedication to go through with it."<br><br>
             
- John Carmack
EOD;

include(RAMSES_THEME_PATH);