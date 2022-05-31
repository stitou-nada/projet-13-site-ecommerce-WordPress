<?php 

/*
plugin name: helloword
plugin URI: github.com
author: nada stitou
author URI: 
version:

*/

add_action('the_content','sey_Hello');

function sey_Hello($content){
    return $content = "<h1>hello word</h1>";
}


?>