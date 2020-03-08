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

class Account extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'account_model'
        ));
        
        $this->load->helper(array(
            'account_helper'
        ));
    }
    
    public function index()
    {
        $this->template->loadContent("home/index", array());
    }
    
    public function Creation($invite_code = "")
    {
        if ($this->account_model->check_block_ip()) {
            $this->template->error(lang("error_26"));
        }
        
        $countries       = $this->account_model->get_countries();
        $secret_question = $this->account_model->get_secret_question(1);
        
        /* Set Layout Register */
        $this->template->set_layout("layout/flame_register_layout");
        
        if (empty($invite_code)) {
            $invite_code = $this->input->post("code", true);
        }
        
        if (!empty($invite_code)) {
            $code = $this->account_model->get_invite_code($invite_code);
            if ($code->num_rows() > 0) {
                $code = $code->row();
                if (($code->status == 2 && $code->expire_upon_use) || $code->status == 3) {
                    $this->template->error(lang("error_82"));
                }
            }
            
            if ($this->settings->info->register && !$code->bypass_register) {
                $this->template->error(lang("error_54"));
            }
        } else {
            if ($this->settings->info->register) {
                $this->template->error(lang("error_54"));
            }
        }
        
        
        $fields = $this->account_model->get_custom_fields(array(
            "register" => 1
        ));
        
        if ($this->user->loggedin) {
            $this->template->error(lang("error_27"));
        }
        $this->load->helper('email');
        
        $email      = "";
        $name       = "";
        $username   = "";
        $fail       = "";
        $first_name = "";
        $last_name  = "";
        
        if (isset($_POST['emailAddress'])) {
            $country   = $this->input->post("country", true);
            $firstName = $this->input->post("firstName", true);
            $lastName  = $this->input->post("lastName", true);
            $bday      = $this->common->nohtml($this->input->post("dobDay", true));
            $bmonth    = $this->common->nohtml($this->input->post("dobMonth", true));
            $byear     = $this->common->nohtml($this->input->post("dobYear", true));
            $birthday  = $byear . '-' . $bmonth . '-' . $bday;
            $email     = $this->input->post("emailAddress", true);
            $pass      = $this->common->nohtml($this->input->post("password", true));
            /*$pass2 = $this->common->nohtml($this->input->post("password2", true));*/
            $captcha   = $this->input->post("captcha", true);
            $question  = $this->input->post("question1", true);
            $answer    = $this->input->post("answer1", true);
            $username  = $this->common->nohtml($this->input->post("username", true));
            $offer     = $this->input->post("receiveNewsSpecialOffersFlame", true);

            if (strlen($username) < 3)
                $fail = "error_31";
            
            if (!preg_match("/^[a-z0-9_]+$/i", $username)) {
                $fail = lang("error_15");
            }
            
            if (!$this->account_model->check_username_is_free($username)) {
                $fail = lang("error_16");
            }
            
            if ($this->settings->info->google_recaptcha) {
                require(APPPATH . 'third_party/autoload.php');
                $recaptcha = new \ReCaptcha\ReCaptcha(-$this->settings->info->google_recaptcha_secret);
                $resp      = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
                if ($resp->isSuccess()) {
                    // verified!
                } else {
                    $errors = $resp->getErrorCodes();
                    $fail   = lang("error_55");
                }
            }
            
            if (!$this->settings->info->disable_captcha) {
                if ($captcha != $_SESSION['sc']) {
                    $fail = lang("error_55");
                }
            }
            
            /*if ($pass != $pass2) $fail = lang("error_22");*/
            
            if (strlen($pass) <= 5) {
                $fail = lang("error_17");
            }
            
            if (empty($email)) {
                $fail = lang("error_18");
            }
            
            if (!valid_email($email)) {
                $fail = lang("error_19");
            }
            
            if (!$this->account_model->checkEmailIsFree($email)) {
                $fail = lang("error_20");
            }
            
            // Custom Fields
            // Process fields
            $answers = array();
            foreach ($fields->result() as $r) {
                $answer = "";
                if ($r->type == 0) {
                    // Look for simple text entry
                    $answer = $this->common->nohtml($this->input->post("cf_" . $r->ID));
                    
                    if ($r->required && empty($answer)) {
                        $fail = lang("error_78") . $r->name;
                    }
                    // Add
                    $answers[] = array(
                        "fieldid" => $r->ID,
                        "answer" => $answer
                    );
                } elseif ($r->type == 1) {
                    // HTML
                    $answer = $this->common->nohtml($this->input->post("cf_" . $r->ID));
                    
                    if ($r->required && empty($answer)) {
                        $fail = lang("error_78") . $r->name;
                    }
                    // Add
                    $answers[] = array(
                        "fieldid" => $r->ID,
                        "answer" => $answer
                    );
                } elseif ($r->type == 2) {
                    // Checkbox
                    $options = explode(",", $r->options);
                    foreach ($options as $k => $v) {
                        // Look for checked checkbox and add it to the answer if it's value is 1
                        $ans = $this->common->nohtml($this->input->post("cf_cb_" . $r->ID . "_" . $k));
                        if ($ans) {
                            if (empty($answer)) {
                                $answer .= $v;
                            } else {
                                $answer .= ", " . $v;
                            }
                        }
                    }
                    
                    if ($r->required && empty($answer)) {
                        $fail = lang("error_78") . $r->name;
                    }
                    $answers[] = array(
                        "fieldid" => $r->ID,
                        "answer" => $answer
                    );
                    
                } elseif ($r->type == 3) {
                    // radio
                    $options = explode(",", $r->options);
                    if (isset($_POST['cf_radio_' . $r->ID])) {
                        $answer = intval($this->common->nohtml($this->input->post("cf_radio_" . $r->ID)));
                        
                        $flag = false;
                        foreach ($options as $k => $v) {
                            if ($k == $answer) {
                                $flag   = true;
                                $answer = $v;
                            }
                        }
                        if ($r->required && !$flag) {
                            $fail = lang("error_78") . $r->name;
                        }
                        if ($flag) {
                            $answers[] = array(
                                "fieldid" => $r->ID,
                                "answer" => $answer
                            );
                        }
                    }
                    
                } elseif ($r->type == 4) {
                    // Dropdown menu
                    $options = explode(",", $r->options);
                    $answer  = intval($this->common->nohtml($this->input->post("cf_" . $r->ID)));
                    $flag    = false;
                    foreach ($options as $k => $v) {
                        if ($k == $answer) {
                            $flag   = true;
                            $answer = $v;
                        }
                    }
                    if ($r->required && !$flag) {
                        $fail = lang("error_78") . $r->name;
                    }
                    if ($flag) {
                        $answers[] = array(
                            "fieldid" => $r->ID,
                            "answer" => $answer
                        );
                    }
                }
            }
            
            if (empty($fail)) {
                
                $bnetpassword       = encryp_BattleNet($email, $pass);
                $account_password   = encryp_auth($username, $pass);
                $pass               = $this->common->encrypt($pass);
                $active             = 1;
                $activate_code      = "";
                $success            = lang("success_20");
                if ($this->settings->info->activate_account) {
                    $active        = 0;
                    $activate_code = md5(rand(1, 100000) . "fhsf" . rand(1, 10000));
                    $success       = lang("success_33");
                    
                    if (!isset($_COOKIE['language'])) {
                        // Get first language in list as default
                        $lang = $this->config->item("language");
                    } else {
                        $lang = $this->common->nohtml($_COOKIE["language"]);
                    }
                    
                    // Send Email
                    $email_template = $this->account_model->get_email_template_hook("email_activation", $lang);
                    if ($email_template->num_rows() == 0) {
                        $this->template->error(lang("error_48"));
                    }
                    $email_template = $email_template->row();
                    
                    $email_template->message = $this->common->replace_keywords(array(
                        "[NAME]" => $username,
                        "[SITE_URL]" => site_url(),
                        "[EMAIL_LINK]" => site_url("account/activate_account/" . $activate_code . "/" . $username),
                        "[SITE_NAME]" => $this->settings->info->site_name
                    ), $email_template->message);
                    
                    $this->common->send_email($email_template->title . " - " . $this->settings->info->site_name, $email_template->message, $email);
                }
                
                if (!isset($_COOKIE['language'])) {
                    /* Get first language in list as default */
                    $lang = $this->config->item("language");
                } else {
                    $lang = $this->common->nohtml($_COOKIE["language"]);
                }
                
                /* Send Email */
                $email_template = $this->account_model->get_email_template_hook("welcome_email", $lang);
                if ($email_template->num_rows() == 0) {
                    $this->template->error(lang("error_48"));
                }
                $email_template = $email_template->row();
                
                if (empty($first_name)) {
                    $fn = $username;
                } else {
                    $fn = $first_name;
                }
                
                $email_template->message = $this->common->replace_keywords(array(
                    "[NAME]" => $fn,
                    "[USERNAME]" => $username,
                    "[EMAIL]" => $email,
                    "[SITE_URL]" => site_url(),
                    "[SITE_NAME]" => $this->settings->info->site_name
                ), $email_template->message);
                
                $this->common->send_email($email_template->title . " - " . $this->settings->info->site_name, $email_template->message, $email);
                
                /**
                 * Register Battlenet Accounts
                 */
                // Battlenet Password
                $bnetId = $this->account_model->register_auth_battlenet_accounts(array(
                    'email' => $email,
                    'sha_pass_hash' => $bnetpassword
                ));

                $this->account_model->register_auth_accounts(array(
                    'username' => $username,
                    'sha_pass_hash' => $account_password,
                    'email' => $email,
                    'expansion' => 7,
                    'battlenet_account' => $bnetId,
                    'battlenet_index' => 1
                ));
                
                /**
                 * Register Web Accounts
                 */
                $userid = $this->account_model->add_user(array(
                    "bnetId" => $bnetId,
                    "username" => $username,
                    "email" => $email,
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "password" => $pass,
                    "user_role" => $this->settings->info->default_user_role,
                    "IP" => $_SERVER['REMOTE_ADDR'],
                    "joined" => time(),
                    "joined_date" => date("n-Y"),
                    "active" => $active,
                    "activate_code" => $activate_code,
                    "country" => $country,
                    "secret_question" => $question,
                    "secret_answer" => $answer,
                    "birthday" => $birthday,
                    "offer" => $offer
                ));
                
                if (!empty($invite_code)) {
                    
                    if ($code->expire_upon_use) {
                        $status = 2;
                    } else {
                        $status = 1;
                    }
                    
                    $this->account_model->update_invite($code->ID, array(
                        "status" => $status,
                        "user_registered" => $userid
                    ));
                }
                
                // Check for any default user groups
                $default_groups = $this->account_model->get_default_groups();
                foreach ($default_groups->result() as $r) {
                    $this->account_model->add_user_to_group($userid, $r->ID);
                }
                
                // Add Custom Fields data
                foreach ($answers as $answer) {
                    $this->account_model->add_custom_field(array(
                        "userid" => $userid,
                        "fieldid" => $answer['fieldid'],
                        "value" => $answer['answer']
                    ));
                }
                $this->session->set_flashdata("globalmsg", $success);
                redirect(site_url());
            }
        }
        
        $this->load->helper("captcha");
        $rand           = rand(4000, 100000);
        $_SESSION['sc'] = $rand;
        $vals           = array(
            'word' => $rand,
            'img_path' => './images/captcha/',
            'img_url' => base_url() . 'images/captcha/',
            'img_width' => 150,
            'img_height' => 30,
            'expiration' => 7200
        );
        
        $cap = create_captcha($vals);
        
        $this->template->loadContent("account/creation", array(
            'countries' => $countries,
            'secret_question' => $secret_question,
            "cap" => $cap,
            "email" => $email,
            "first_name" => $first_name,
            "last_name" => $last_name,
            'fail' => $fail,
            "username" => $username,
            "fields" => $fields,
            "code" => $invite_code
        ));
    }
    
}
