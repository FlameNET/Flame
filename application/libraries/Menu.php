<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
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

Class Menu
{  
    var $menu = array();

    public function getMenu()
    {
        $CI =& get_instance();

        if (mysqli_more_results($CI->db->conn_id)) {
            mysqli_next_result($CI->db->conn_id);
        }
        $query = $CI->db->query("CALL `sp_menu`(NULL, '{$_COOKIE['language']}', 1)");
        return $query;
    }

    public function getSubMenuID()
    {
        $CI =& get_instance();

        if (mysqli_more_results($CI->db->conn_id)) {
            mysqli_next_result($CI->db->conn_id);
        }

        $query = $CI->db->query("CALL `sp_sub_menu_distinct`()");
        return $query;
    }

    public function getSubMenuCategory($menu)
    {
        $CI =& get_instance();

        if (mysqli_more_results($CI->db->conn_id)) {
            mysqli_next_result($CI->db->conn_id);
        }

        $query = $CI->db->query("CALL `sp_sub_menu_category`({$menu}, '{$_COOKIE['language']}')");
        return $query;
    }

    public function getSubMenu($category)
    {
        $CI =& get_instance();

        if (mysqli_more_results($CI->db->conn_id)) {
            mysqli_next_result($CI->db->conn_id);
        }

        $query = $CI->db->query("CALL `sp_sub_menu`({$category}, '{$_COOKIE['language']}', 1)");
        return $query;
    }
}
