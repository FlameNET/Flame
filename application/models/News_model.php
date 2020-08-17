<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

Class News_Model extends CI_Model 
{
    public function getNewsTop($id = 'NULL')
    {
        $query = $this->db->query("CALL `sp_news_top`({$id}, '{$_COOKIE['language']}');");
        mysqli_next_result($this->db->conn_id);
        return $query;
    }
}
