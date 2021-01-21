<?php
/*
 * See http://hack.swic.name/laravel-column-sorting-made-easy/
 * See composer.json app.php
 */

namespace RobMovieManager\Traits;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

trait SortableTrait {

    // To ensure invalid column names aren't attempted:
    public abstract function getSortable();

    public function scopeSortable($query) {
        if (empty(Request::input('s')) || empty(Request::input('o'))) {
            return $query;
        } else {
            return $query->orderBy(Request::input('s'), Request::input('o'));
        }
    }

    public static function link_to_sorting_action($col, $title = null) {
        if (is_null($title)) {
            $title = ucwords(str_replace('_', ' ', $col));
        }
        $indicator = (Request::input('s') == $col ? (Request::input('o') === 'asc' ? '&uarr;' : '&darr;') : null);
        $parameters = array_merge(Request::input(), array('s' => $col, 'o' => (Request::input('o') === 'asc' ? 'desc' : 'asc')));

        return link_to_route(Route::currentRouteName(), "$title $indicator", $parameters);
    }
}
