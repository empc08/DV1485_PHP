<?php
/**
 * Theme-related functions.
 */

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 * 
 * @param string $title The title for this page.
 * @return Returns the title as a string if favicon is defined, else _null_ is returned.
 */
function get_title($title) {
    global $ramses;
    return $title . (isset($ramses['title_append']) ? $ramses['title_append'] : null);
}