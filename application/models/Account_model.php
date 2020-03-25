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

class Account_Model extends CI_Model
{

	public function __construct() 
	{
        parent::__construct();
        $this->auth = $this->load->database('auth', TRUE);
    }

    public function registerUser($username, $email, $first_name, $last_name, $password, $access_level = 1)
    {
        $this->db->insert("users", array(
            "email" => $email,
            "username" => $username,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "password" => $password,
            "user_role" => $access_level,
            "IP" => $_SERVER['REMOTE_ADDR'],
            "joined" => time(),
            "joined_date" => date("n-Y")
        ));
        return $this->db->insert_id();
    }

    public function add_user($data)
    {
        $this->db->insert("users", $data);
        return $this->db->insert_id();
    }

    public function checkEmailIsFree($email)
    {
        $s = $this->db->where("email", $email)->get("users");
        if ($s->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function check_username_is_free($username)
    {
        $s = $this->db->where("username", $username)->get("users");
        if ($s->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function add_username($userid, $username)
    {
        $this->db->where("ID", $userid)->update("users", array(
            "username" => $username
        ));
    }

    public function register_twitter_user($provider, $oauth_id, $name, $oauth_token, $oauth_token_secret)
    {
        
        $this->db->insert("users", array(
            "oauth_provider" => $provider,
            "oauth_id" => $oauth_id,
            "first_name" => $name,
            "oauth_token" => $oauth_token,
            "oauth_secret" => $oauth_token_secret,
            "IP" => $_SERVER['REMOTE_ADDR'],
            "joined" => time(),
            "joined_date" => date("n-Y")
        ));
        return $this->db->insert_id();
    }

    public function register_facebook_user($provider, $oauth_id, $name, $oauth_token)
    {
        
        $this->db->insert("users", array(
            "oauth_provider" => $provider,
            "oauth_id" => $oauth_id,
            "first_name" => $name,
            "oauth_token" => $oauth_token,
            "IP" => $_SERVER['REMOTE_ADDR'],
            "joined" => time(),
            "joined_date" => date("n-Y")
        ));
        return $this->db->insert_id();
    }

    public function register_google_user($provider, $oauth_id, $name, $oauth_token)
    {
        
        $this->db->insert("users", array(
            "oauth_provider" => $provider,
            "oauth_id" => $oauth_id,
            "first_name" => $name,
            "oauth_token" => $oauth_token,
            "IP" => $_SERVER['REMOTE_ADDR'],
            "joined" => time(),
            "joined_date" => date("n-Y")
        ));
        return $this->db->insert_id();
    }

    public function update_username($userid, $username, $email)
    {
        $this->db->where("ID", $userid)->update("users", array(
            "username" => $username,
            "email" => $email
        ));
    }

    public function get_invite_code($code)
    {
        return $this->db->where("code", $code)->get("invites");
    }

    public function update_invite($id, $data)
    {
        $this->db->where("ID", $id)->update("invites", $data);
    }

    public function getUser($email, $pass)
    {
        return $this->db->select("ID")->where("email", $email)->where("password", $pass)->get("users");
    }

    public function get_user_by_id($userid)
    {
        return $this->db->where("ID", $userid)->get("users");
    }

    public function get_user_by_username($username)
    {
        return $this->db->where("username", $username)->get("users");
    }

    public function delete_user($id)
    {
        $this->db->where("ID", $id)->delete("users");
    }

    public function get_new_members($limit)
    {
        return $this->db->select("email, username, joined, oauth_provider, 
			avatar")->order_by("ID", "DESC")->limit($limit)->get("users");
    }

    public function get_registered_users_date($month, $year)
    {
        $s = $this->db->where("joined_date", $month . "-" . $year)->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_oauth_count($provider)
    {
        $s = $this->db->where("oauth_provider", $provider)->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_total_members_count()
    {
        $s = $this->db->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_total_members_online_count()
    {
        $s = $this->db->where("online_timestamp >", time() - 60 * 15)->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_active_today_count()
    {
        $s = $this->db->where("online_timestamp >", time() - 3600 * 24)->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_new_today_count()
    {
        $s = $this->db->where("joined >", time() - 3600 * 24)->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_online_count()
    {
        $s = $this->db->where("online_timestamp >", time() - 60 * 15)->select("COUNT(*) as num")->get("users");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_members_online($datatable)
    {
        $datatable->db_order();
        
        $datatable->db_search(array(
            "users.username",
            "users.first_name",
            "users.last_name",
            "user_roles.name"
        ), true);
        
        $this->db->where("users.online_timestamp >", time() - 60 * 15)->select("users.username, users.email, users.first_name, 
			users.last_name, users.ID, users.joined, users.oauth_provider,
			users.user_role, users.online_timestamp, users.avatar,
			user_roles.name as user_role_name")->join("user_roles", "user_roles.ID = users.user_role", "left outer");
        return $datatable->get("users");
    }

    public function get_members($datatable)
    {
        $datatable->db_order();
        
        $datatable->db_search(array(
            "users.username",
            "users.first_name",
            "users.last_name",
            "user_roles.name"
        ), true // Cache
            );
        
        $this->db->select("users.username, users.email, users.first_name, 
			users.last_name, users.ID, users.joined, users.oauth_provider,
			users.user_role, users.online_timestamp, users.avatar,
			user_roles.name as user_role_name")->join("user_roles", "user_roles.ID = users.user_role", "left outer");
        return $datatable->get("users");
    }

    public function get_members_admin($datatable)
    {
        $datatable->db_order();
        
        $datatable->db_search(array(
            "users.username",
            "users.first_name",
            "users.last_name",
            "user_roles.name",
            "users.email"
        ), true);
        
        $this->db->select("users.username, users.email, users.first_name, 
			users.last_name, users.ID, users.joined, users.oauth_provider,
			users.user_role, users.online_timestamp, users.avatar,
			user_roles.name as user_role_name")->join("user_roles", "user_roles.ID = users.user_role", "left outer");
        return $datatable->get("users");
    }

    public function get_notifications($userid)
    {
        return $this->db->where("user_notifications.userid", $userid)->select("users.ID as userid, users.username, users.avatar,
    			user_notifications.timestamp, user_notifications.message,
    			user_notifications.url, user_notifications.ID, 
    			user_notifications.status")->join("users", "users.ID = user_notifications.fromid")->limit(5)->order_By("user_notifications.ID", "DESC")->get("user_notifications");
    }

    public function get_notifications_unread($userid)
    {
        return $this->db->where("user_notifications.userid", $userid)->select("users.ID as userid, users.username, users.avatar,
    			user_notifications.timestamp, user_notifications.message,
    			user_notifications.url, user_notifications.ID, 
    			user_notifications.status")->join("users", "users.ID = user_notifications.fromid")->limit(5)->where("user_notifications.status", 0)->order_By("user_notifications.ID", "DESC")->get("user_notifications");
    }

    public function get_notification($id, $userid)
    {
        return $this->db->where("user_notifications.userid", $userid)->where("user_notifications.ID", $id)->select("users.ID as userid, users.username, users.avatar,
    			user_notifications.timestamp, user_notifications.message,
    			user_notifications.url, user_notifications.ID, 
    			user_notifications.status")->join("users", "users.ID = user_notifications.fromid")->order_By("user_notifications.ID", "DESC")->get("user_notifications");
    }

    public function get_notifications_all($userid, $datatable)
    {
        $datatable->db_order();
        
        $datatable->db_search(array(
            "users.username",
            "user_notifications.message"
        ));
        
        return $this->db->where("user_notifications.userid", $userid)->select("users.ID as userid, users.username, users.avatar,
    			users.online_timestamp,
    			user_notifications.timestamp, user_notifications.message,
    			user_notifications.url, user_notifications.ID, 
    			user_notifications.status")->join("users", "users.ID = user_notifications.fromid")->limit($datatable->length, $datatable->start)->order_By("user_notifications.ID", "DESC")->get("user_notifications");
    }

    public function get_notifications_all_fp($userid, $page, $max = 10)
    {
        return $this->db->where("user_notifications.userid", $userid)->select("users.ID as userid, users.username, users.avatar,
    			users.online_timestamp,
    			user_notifications.timestamp, user_notifications.message,
    			user_notifications.url, user_notifications.ID, 
    			user_notifications.status")->join("users", "users.ID = user_notifications.fromid")->limit($max, $page)->order_By("user_notifications.ID", "DESC")->get("user_notifications");
    }

    public function get_notifications_all_total($userid)
    {
        $s = $this->db->where("user_notifications.userid", $userid)->select("COUNT(*) as num")->get("user_notifications");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function add_notification($data)
    {
        if (isset($data['email']) && isset($data['email_notification']) && $data['email_notification']) {
            // Send Email
            $subject = $this->settings->info->site_name . " Notification!";
            if (isset($data['username'])) {
                $body = "Dear " . $data['username'] . ",";
            } else {
                $body = "Dear User";
            }
            $body .= "
			<br /><br />
			You have a new notification waiting for you at <a href='" . site_url() . "'>" . site_url() . "</a><br /><br />
			Login now to view it. Thanks!
			<br /><br />
			Yours,<br />
			" . $this->settings->info->site_name;
            $this->common->send_email($subject, $body, $data['email']);
        }
        unset($data['email']);
        unset($data['email_notification']);
        unset($data['username']);
        $this->db->insert("user_notifications", $data);
    }

    public function update_notification($id, $data)
    {
        $this->db->where("ID", $id)->update("user_notifications", $data);
    }

    public function update_user_notifications($userid, $data)
    {
        $this->db->where("userid", $userid)->update("user_notifications", $data);
    }

    public function increment_field($userid, $field, $amount)
    {
        $this->db->where("ID", $userid)->set($field, $field . '+' . $amount, FALSE)->update("users");
    }

    public function decrement_field($userid, $field, $amount)
    {
        $this->db->where("ID", $userid)->set($field, $field . '-' . $amount, FALSE)->update("users");
    }

    public function update_user($userid, $data)
    {
        $this->db->where("ID", $userid)->update("users", $data);
    }

    public function check_block_ip()
    {
        mysqli_next_result($this->db->conn_id);
        $s = $this->db->where("IP", $_SERVER['REMOTE_ADDR'])->get("ip_block");
        if ($s->num_rows() == 0)
            return false;
        
        return true;
    }

    public function get_user_groups($userid)
    {
        return $this->db->where("user_group_users.userid", $userid)->select("user_groups.name,user_groups.ID as groupid, user_group_users.userid")->join("user_groups", "user_groups.ID = user_group_users.groupid")->get("user_group_users");
    }

    public function check_user_in_group($userid, $groupid)
    {
        $s = $this->db->where("userid", $userid)->where("groupid", $groupid)->get("user_group_users");
        if ($s->num_rows() == 0)
            return 0;
        return 1;
    }

    public function get_default_groups()
    {
        return $this->db->where("default", 1)->get("user_groups");
    }

    public function add_user_to_group($userid, $groupid)
    {
        $this->db->insert("user_group_users", array(
            "userid" => $userid,
            "groupid" => $groupid
        ));
    }

    public function add_points($userid, $points)
    {
        $this->db->where("ID", $userid)->set("points", "points+$points", FALSE)->update("users");
    }

    public function get_verify_user($code, $username)
    {
        return $this->db->where("activate_code", $code)->where("username", $username)->get("users");
    }

    public function get_user_event($request)
    {
        return $this->db->where("IP", $_SERVER['REMOTE_ADDR'])->where("event", $request)->order_by("ID", "DESC")->get("user_events");
    }

    public function add_user_event($data)
    {
        $this->db->insert("user_events", $data);
    }

    public function get_custom_fields($data)
    {
        if (isset($data['register'])) {
            $this->db->where("register", 1);
        }
        return $this->db->get("custom_fields");
    }

    public function add_custom_field($data)
    {
        $this->db->insert("user_custom_fields", $data);
    }

    public function get_custom_fields_answers($data, $userid)
    {
        if (isset($data['edit'])) {
            $this->db->where("custom_fields.edit", 1);
        }
        return $this->db->select("custom_fields.ID, custom_fields.name, custom_fields.type,
				custom_fields.required, custom_fields.help_text,
				custom_fields.options,
				user_custom_fields.value")->join("user_custom_fields", "user_custom_fields.fieldid = custom_fields.ID
			 AND user_custom_fields.userid = " . $userid, "LEFT OUTER")->get("custom_fields");
        
    }

    public function get_user_cf($fieldid, $userid)
    {
        return $this->db->where("fieldid", $fieldid)->where("userid", $userid)->get("user_custom_fields");
    }

    public function update_custom_field($fieldid, $userid, $value)
    {
        $this->db->where("fieldid", $fieldid)->where("userid", $userid)->update("user_custom_fields", array(
            "value" => $value
        ));
    }

    public function get_payment_logs($userid, $datatable)
    {
        $datatable->db_order();
        
        $datatable->db_search(array(
            "users.username",
            "payment_logs.email"
        ));
        return $this->db->where("payment_logs.userid", $userid)->select("users.ID as userid, users.username, users.email,
			users.avatar, users.online_timestamp,
			payment_logs.email, payment_logs.amount, payment_logs.timestamp, 
			payment_logs.ID, payment_logs.processor")->join("users", "users.ID = payment_logs.userid")->limit($datatable->length, $datatable->start)->get("payment_logs");
    }

    public function get_total_payment_logs_count($userid)
    {
        $s = $this->db->where("userid", $userid)->select("COUNT(*) as num")->get("payment_logs");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function get_profile_comments($userid, $page)
    {
        return $this->db->where("profile_comments.profileid", $userid)->select("profile_comments.ID, profile_comments.comment,
				profile_comments.userid, profile_comments.timestamp,
				profile_comments.profileid, profile_comments.userid,
				users.username, users.avatar, users.online_timestamp")->join("users", "users.ID = profile_comments.userid")->limit(5, $page)->order_by("profile_comments.ID", "DESC")->get("profile_comments");
    }

    public function add_profile_comment($data)
    {
        $this->db->insert("profile_comments", $data);
    }

    public function get_profile_comment($id)
    {
        return $this->db->where("ID", $id)->get("profile_comments");
    }

    public function delete_profile_comment($id)
    {
        $this->db->where("ID", $id)->delete("profile_comments");
    }

    public function get_total_profile_comments($userid)
    {
        $s = $this->db->where("profile_comments.profileid", $userid)->select("COUNT(*) as num")->get("profile_comments");
        $r = $s->row();
        if (isset($r->num))
            return $r->num;
        return 0;
    }

    public function increase_profile_views($userid)
    {
        $this->db->where("ID", $userid)->set("profile_views", "profile_views+1", FALSE)->update("users");
    }

    public function add_user_data($data)
    {
        $this->db->insert("user_data", $data);
    }

    public function update_user_data($id, $data)
    {
        $this->db->where("ID", $id)->update("user_data", $data);
    }

    public function get_user_data($userid)
    {
        return $this->db->where("userid", $userid)->get("user_data");
    }

    public function get_user_role($roleid)
    {
        return $this->db->where("ID", $roleid)->get("user_roles");
    }

    public function get_users_with_permissions($permissions)
    {
        foreach ($permissions as $p) {
            $this->db->or_where("user_roles." . $p, 1);
        }
        
        return $this->db->select("users.ID as userid, users.username, users.email, users.first_name, users.last_name, users.online_timestamp")->join("user_roles", "user_roles.ID = users.user_role")->get("users");
    }
    
    public function get_all_user_groups()
    {
        return $this->db->get("user_groups");
    }
    
    public function get_user_group($id)
    {
        return $this->db->where("ID", $id)->get("user_groups");
    }
    
    public function delete_user_from_groups($userid)
    {
        $this->db->where("userid", $userid)->delete("user_group_users");
    }
    
    public function add_log($data)
    {
        $this->db->insert("user_logs", $data);
    }

	public function get_email_template_hook($hook, $language) 
	{
		return $this->db->where("hook", $hook)
			->where("language", $language)->get("email_templates");
    }

    /* Stored Procedure */
    public function get_countries()
    {
        $query = $this->db->query("CALL `sp_countries`()");
        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function get_secret_question($active)
    {
        $query = $this->db->query("CALL sp_secret_question({$active})");
        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function register_auth_battlenet_accounts($data)
    {
        $this->auth->insert("battlenet_accounts", $data);
        return $this->auth->insert_id();
    }

    public function register_auth_accounts($data)
    {
        $this->auth->insert("account", $data);
    }


    /**
     * Website
     */
	public function getUserByEmail($email) 
	{
        if (mysqli_more_results($this->db->conn_id)) {
            mysqli_next_result($this->db->conn_id);
        }
		return $this->db->select("ID,email,password,token,active,online_timestamp")->where("email", $email)->get("users");
	}

	public function getUserByUsername($username) 
	{
		return $this->db->select("ID,email,password,token,active,online_timestamp")->where("username", $username)->get("users");
	}

	public function updateUserToken($userid, $token) 
	{
		$this->db->where("ID", $userid)->update("users", array("token" => $token));
	}

	public function addToResetLog($ip) 
	{
		$this->db->insert("reset_log", 
			array(
				"IP" => $ip, 
				"timestamp" => time()
			)
		);
	}

	public function getResetLog($ip) 
	{
		return $this->db->where("IP", $ip)->get("reset_log");
	}

	public function getUserEmail($email) 
	{
		return $this->db->where("email", $email)->select("ID, username")->get("users");
	}

	public function resetPW($userid, $token) 
	{
		$this->db->insert("password_reset", 
			array(
				"userid" => $userid, 
				"token" => $token, 
				"IP" => $_SERVER['REMOTE_ADDR'], 
				"timestamp" => time()
			)
		);
	}



	public function getResetUser($token, $userid) 

	{
		return $this->db->where("token", $token)->where("userid", $userid)->get("password_reset");
	}

	public function updatePassword($userid, $password) 
	{
		$this->db->where("ID", $userid)->update("users", array("password" => $password));
	}

	public function deleteReset($token) 
	{
		$this->db->where("token", $token)->delete("password_reset");
	}

	public function get_oauth_user($provider, $oauth_id) 
	{
		return $this->db->where("oauth_provider", $provider)->where("oauth_id", $oauth_id)->get("users");
	}

	public function update_facebook_user($provider, $oauth_id, $token) 
	{
		$this->db->where("oauth_id", $oauth_id)
		->where("oauth_provider", $provider)
		->update("users", array(
			"oauth_token" => $token,
			"IP" => $_SERVER['REMOTE_ADDR']
			)
		);
	}

	public function update_google_user($provider, $oauth_id, $token) 
	{
		$this->db->where("oauth_id", $oauth_id)
		->where("oauth_provider", $provider)
		->update("users", array(
			"oauth_token" => $token,
			"IP" => $_SERVER['REMOTE_ADDR']
			)
		);
	}

	public function update_oauth_user($oauth_token, $oauth_secret, $oauth_id, $provider) 
	{
		$this->db->where("oauth_id", $oauth_id)
		->where("oauth_provider", $provider)
		->update("users", array(
			"oauth_token" => $oauth_token,
			"oauth_secret" => $oauth_secret,
			"IP" => $_SERVER['REMOTE_ADDR']
			)
		);
	}

	public function get_login_attempts($ip, $username, $time) 
    {
        if (mysqli_more_results($this->db->conn_id)) {
            mysqli_next_result($this->db->conn_id);
        }
        return $this->db->query("CALL `sp_login_attempts`('{$ip}', '{$username}', '{$time}');");
    }

    public function update_login_attempt($id, $data) 
    {
    	$this->db->where("ID", $id)->update("login_attempts", $data);
    }

    public function add_login_attempt($data) 
    {
    	$this->db->insert("login_attempts", $data);
    }

}
