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

class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'news_model'
        ));
        $this->load->helper(array(
            'str_helper',
            'news_helper'
        ));
    }
	public function index()
	{
        $top_news   = $this->news_model->getNewsTop();
        $news       = $this->news_model->getNews();

		$this->template->loadContent("news/index", array(
            'top_news'  => $top_news,
            'news'      => $news
        ));
	}
}
