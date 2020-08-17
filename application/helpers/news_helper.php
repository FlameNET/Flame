<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Copyright (C) 2020 FlameCMS <NOT YET>
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation; either version 2 of the License, or (at your
 * option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://www.gnu.org/licenses/>.
 */

if(!function_exists('ago_news'))
{
    function ago_news($time)
    {
        $periods    = array("seconds", "minute", "hour", "day", "week", "month", "year", "decade");
        $lengths    = array("60", "60", "24", "7", "4.35", "12", "10");
        $now        = time();
        $difference = $now - $time;
        $tense      = "ago";

        for ($i=0; $difference >= $lengths[$i] && $i < count($lengths); $i++) { 
            $difference /= $lengths[$i];
        }

        $difference = round($difference);

        if($difference != 1){
            $periods[$i].="s";
        }

        return $difference." ".$periods[$i]." ago";
    }
}



if (!function_exists('html_excerpt'))
{
    function html_excerpt( $str, $count= 500, $end_char = '&#8230;' ) {
        $str = strip_all_tags( $str, true );
        $str = mb_substr( $str, 0, $count );

        // remove part of an entity at the end
        $str = preg_replace( '/&[^;\s]{0,6}$/', '', $str );
        return $str.$end_char;
    }
}


/**
 * Properly strip all HTML tags including script and style
 *
 * @param string $string String containing HTML tags
 * @param bool $remove_breaks optional Whether to remove left over line breaks and white space chars
 * @return string The processed string.
 */

if (!function_exists('strip_all_tags'))
{
    function strip_all_tags($string, $remove_breaks = false) {
        $string = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $string );
        $string = strip_tags($string);

        if ( $remove_breaks ) {
            $string = preg_replace('/[\r\n\t ]+/', ' ', $string);
        }
        return trim( $string );
    }
}
