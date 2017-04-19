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
        if ($minutes >= 60) {
            $ret_str = sprintf('%d hr ', floor($minutes / 60));
        }
        $ret_str .= sprintf('%02d m', $minutes % 60);
    }
    return $ret_str;
}


function getErrorsClass($errors, $field) {
    $ret_str = '';
    if ($errors->has($field)) {
        $ret_str = ' has-error red';
    }
    return $ret_str;
}


function getErrorsContent($errors, $field) {
    $ret_str = '';
    if ($errors->has($field)) {
        if ($field === 'format') {
            $ret_str = '<div class="has-error red">Please select a valid format.</div>';
        } else {
            $ret_str = '<div class="has-error red">' . $errors->first($field) . '</div>';
        }
    }
    return $ret_str;
}


/*
 * Used on Form fields to assign the disabled="disabled" param when needed.
 * Currently only used by the "delete" action on the "show" view.
 */
function getDisabled($movieFormAction) {
    $ret = NULL;
    if ($movieFormAction === 'delete') {
        $ret = 'disabled';
    }
    return $ret;
}
