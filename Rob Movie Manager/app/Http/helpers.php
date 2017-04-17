<?php
/*
 * See http://laravel-recipes.com/recipes/50/creating-a-helpers-file
 * See composer.json
 */

function getDisplayFormat($val) {
    $ret_str = '';
    if (($val > 0) && ($val < 7)) {
        // 1=VHS,2=LaserDisc,3=DVD,4=Blu-ray,5=File,6=Streaming
        $format_array = array("", "VHS", "LaserDisc", "DVD", "Blu-ray", "File", "Streaming");
        $ret_str = $format_array[$val];
    }
    return $ret_str;
}


function getDisplayMinutes($minutes) {
    $ret_str = '';
    if (!empty($minutes)) {
        $ret_str = sprintf('%d hr %02d m', floor($minutes / 60), $minutes % 60);
    }
    return $ret_str;
}
