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

class Template
{
    
    var $cssincludes;
    var $jsincludes;
    var $sidebar;
    var $responsive_sidebar;
    var $layout = "";
    var $data = array();
    var $error_layout = 0;
    var $error_view = "error/error.php";
    var $page_title = "";
    var $error_hack = 0;
    
    public function loadContent($view, $data = array(), $die = 0)
    {
        $CI =& get_instance();
        $site = array();
        
        if (empty($this->layout)) {
            $this->set_layout($CI->settings->info->layout);
        }
        
        $site['cssincludes'] = $this->cssincludes;
        $site['jsincludes']  = $this->jsincludes;
        
        foreach ($this->data as $k => $v) {
            $site[$k] = $v;
        }
        foreach ($this->data as $k => $v) {
            $data[$k] = $v;
        }
        $site['content'] = $CI->load->view($view, $data, true);
        if ($this->sidebar) {
            $site['sidebar'] = $CI->load->view($this->sidebar, $data, true);
        }
        
        if ($this->page_title) {
            $site['page_title'] = $this->page_title;
        }
        
        if ($this->responsive_sidebar) {
            $site['responsive_sidebar'] = $CI->load->view($this->responsive_sidebar, $data, true);
        }
        
        /* Language */
        $lang   = $CI->config->item('language');
        $prefix = $CI->config->item("cookieprefix");
        
        $languages      = $CI->config->item("available_languages");
        $enable_rtl     = 0;
        $datatable_lang = "";
        if (array_key_exists($lang, $languages)) {
            if (isset($languages[$lang]['rtl_support'])) {
                $enable_rtl = $languages[$lang]['rtl_support'];
            }
            if (isset($languages[$lang]['datatable_lang'])) {
                $datatable_lang = $languages[$lang]['datatable_lang'];
            }
        }
        
        $accept = $CI->input->cookie($prefix . "acc", TRUE);
        if ($accept) {
            $cookie_flag = true;
        } else {
            $cookie_flag = false;
        }
        
        $site['enable_rtl']     = $enable_rtl;
        $site['accept_cookies'] = $cookie_flag;
        $site['datatable_lang'] = $datatable_lang;
        $CI->load->view($this->layout, $site);
        if ($die)
            die($CI->output->get_output());
    }
    
    public function loadAjax($view, $data = array(), $die = 0)
    {
        $CI =& get_instance();
        $site                = array();
        $site['cssincludes'] = $this->cssincludes;
        $site['jsincludes']  = $this->jsincludes;
        $CI->load->view($view, $data);
        if ($die)
            die($CI->output->get_output());
    }
    
    public function set_page_title($title)
    {
        $this->page_title = $title;
    }
    
    public function loadSidebar($view)
    {
        $this->sidebar = $view;
    }
    
    public function loadResponsiveSidebar($view)
    {
        $this->responsive_sidebar = $view;
    }
    
    public function set_error_layout($error)
    {
        $this->error_layout = $error;
    }
    
    public function set_error_view($view)
    {
        $this->error_view = $view;
    }
    
    public function set_layout($view)
    {
        $this->layout = $view;
    }
    
    public function loadData($key, $data)
    {
        $this->data[$key] = $data;
    }
    
    public function loadCssExternal($code)
    {
        $this->cssincludes = $code;
    }
    
    public function loadJsExternal($code)
    {
        $this->jsincludes = $code;
    }
    
    public function error($message)
    {
        if (!$this->error_layout) {
            $this->loadContent($this->error_view, array(
                "message" => $message
            ), 1);
        } else {
            $this->loadContent($this->error_view, array(
                "message" => $message
            ), 1);
        }
    }
    
    public function errori($msg)
    {
        echo "ERROR: " . $msg;
        exit();
    }
    
    public function jsonError($msg)
    {
        echo json_encode(array(
            "error" => 1,
            "error_msg" => $msg
        ));
        exit();
    }
    
}
