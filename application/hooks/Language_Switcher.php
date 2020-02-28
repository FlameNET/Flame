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

class Language_Switcher
{
	public function switch_lang() 
	{
		/* Get CI */
		$CFG =& load_class('Config', 'core');

		/* Check session */
		if(!isset($_COOKIE['language'])) return;
		$lang = strip_tags($_COOKIE["language"]);

		$languages = $CFG->item("available_languages");

		if(!array_key_exists($lang, $languages)) return;

		if(empty($lang)) return;
		$CFG->set_item('language', $lang);
	}
}
?>
