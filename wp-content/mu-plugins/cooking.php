<?php
function my_cookie_path($path) {
    return '/tggfwordpress/';
}
add_filter( 'cmplz_cookie_path', 'my_cookie_path');
?>
