<?php

include(__DIR__ . '/config.php');
include(__DIR__ . '/menu.php');

$ramses['title'] = "Redovisning";

$menu_html = generateMenu($menu, 'menu');

$ramses['header'] = "\n<img class='sitelogo' src=img/banner.png alt='Ramses Logo'/>\n"
        . "$menu_html";

/* Temporarily turn on output buffering, instantiate the CSource
 * class to have it produce its output, capture the object output in
 * $ramses['main'] and then turn off output buffering. */
ob_start();
new CSource();
$ramses['main'] = ob_get_contents();
ob_end_clean();

$ramses['footer'] = <<<EOD
"The barriers are self imposed. If you want to set off and go develop some grand new thing, you don't need
millions of dollars of capitalization. You need enough pizza and Diet Coke to stick in your refrigerator, a cheap
PC to work on, and the dedication to go through with it."<br><br>
             
- John Carmack
EOD;

include(RAMSES_THEME_PATH);