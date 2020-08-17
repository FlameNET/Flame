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
