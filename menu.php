<?php

$kasutaja = "<b></b>";

$menu_arr = array('index','otsing' , 'muutmine');

$menu_begin = '<div class="header-menu">' .$kasutaja;

$menu_end = '</div>';

function menu($begin,$body,$end){
    echo $begin;
    for ($i = 0; $i < count($body); $i++)
    {
        echo '<li><a href="'.$body[$i].'.php">.'.$body[$i].'</a></li>';
    }
    echo $end;
}  

?>