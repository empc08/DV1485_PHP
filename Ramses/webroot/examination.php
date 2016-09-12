<?php

include(__DIR__ . '/config.php');
include(__DIR__ . '/menu.php');

$ramses['title'] = "Redovisning";

$menu_html = generateMenu($menu, 'menu');

$ramses['header'] = "\n<img class='sitelogo' src=img/banner.png alt='Ramses Logo'/>\n"
        . "$menu_html";

$kmom01 = <<<EOD
        <h1>Redovisningstext 01!</h1>
EOD;

$ramses['main'] = $kmom01;

$ramses['footer'] = <<<EOD
"The barriers are self imposed. If you want to set off and go develop some grand new thing, you don't need
millions of dollars of capitalization. You need enough pizza and Diet Coke to stick in your refrigerator, a cheap
PC to work on, and the dedication to go through with it."<br><br>
             
- John Carmack
EOD;

include(RAMSES_THEME_PATH);