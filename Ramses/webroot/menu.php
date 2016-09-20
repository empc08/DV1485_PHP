<?php

/**
 * Sets the class element of the currently selected menu item.
 * @param array $items The menu items.
 * @return array The input menu items, where the selected menu item has been set.
 */
function modifyNavBar($items) {
    $ref = isset($_GET['p']) && isset($items[$_GET['p']]) ? $_GET['p'] : null;
    
    if ($ref) {
        $items[$ref]['class'] .= (empty($items[$ref]['class'])) ? 'selected' : '_selected';
    }
    
    return $items;
}


/**
 * Generates a menu of hyperlinks.
 * @param array $menu The menu array to be generated.
 * @param string $class The class name of the menu navigation links.
 * @return string The generated HTML for the menu.
 */
function generateMenu($menu, $class) {
    if (isset($menu['callback'])) {
        $items = call_user_func($menu['callback'], $menu['items']);
    }
    
    $html = "<nav class='$class'>\n";
    
    foreach($items as $item) {
        $html .= "<a href='{$item['url']}' class='{$item['class']}'>{$item['text']}</a>\n";
    }
    
    $html .= "</nav>\n";
    
    return $html;
}


$menu = array(
    'callback' => 'modifyNavBar',
    'items' => array (
        'hem' => array('text'=>'', 'url'=>'me.php?p=hem', 'class'=>'img'),
        'redovisning' => array('text'=>'Redovisning', 'url'=>'examination.php?p=redovisning', 'class'=>''),
        'kallkod' => array('text'=>'Källkod', 'url'=>'source.php?p=kallkod', 'class'=>'')
    )
);