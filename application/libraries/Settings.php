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

class Settings
{
    
    var $info = array();
    var $version = "1.0.0";

    public function __construct()
    {
        /**
         * Template Default 
         */
        $id_template = 1;
        
        $CI =& get_instance();
        $site = $CI->db->query("CALL `sp_site_settings`({$id_template})");
        
        if ($site->num_rows() == 0) {
            $CI->template->error("You are missing the site settings database row.");
        } else {
            $this->info = $site->row();
        }
    }
}
