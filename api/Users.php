<?php

/**
 * Simpla CMS
 *
 * @copyright	2011 Denis Pikusov
 * @link		http://simplacms.ru
 * @author		Denis Pikusov
 *
 */
 
require_once('Simpla.php');
use Zend\Crypt\Password\Bcrypt;

class Users extends Simpla
{	
	// осторожно, при изменении соли испортятся текущие пароли пользователей
	private $salt = '8e86a279d6e182b3c811c559e6b15484';
    private $visible_filter = '';
    private $group_by = '';
    private $sql_limit = '';
    private $page = 1;
    private $limit = 100;
    private $filter_new = '';

	function get_users($filter = array())
	{
		$limit = 1000;
		$page = 1;
		$group_id_filter = '';	
		$keyword_filter = '';

		if(isset($filter['limit']))
			$limit = max(1, intval($filter['limit']));

		if(isset($filter['page']))
			$page = max(1, intval($filter['page']));

		if(isset($filter['group_id']))
			$group_id_filter = $this->db->placehold('AND u.group_id in(?@)', (array)$filter['group_id']);
		
		if(isset($filter['keyword']))
		{
			$keywords = explode(' ', $filter['keyword']);
			foreach($keywords as $keyword)
				$keyword_filter .= $this->db->placehold('AND (u.name LIKE "%'.$this->db->escape(trim($keyword)).'%" OR u.email LIKE "%'.$this->db->escape(trim($keyword)).'%"  OR u.last_ip LIKE "%'.$this->db->escape(trim($keyword)).'%")');
		}
		
		$order = 'u.name';
		if(!empty($filter['sort']))
			switch ($filter['sort'])
			{
				case 'date':
				$order = 'u.created DESC';
				break;
				case 'name':
				$order = 'u.username';
				break;
			}
		

		$sql_limit = $this->db->placehold(' LIMIT ?, ? ', ($page-1)*$limit, $limit);
		// Выбираем пользователей
		$query = $this->db->placehold("SELECT u.id, u.email, u.password_hash as password, u.username as name, u.username, u.group_id, u.enabled, u.last_ip, u.created, g.discount, g.name, u.image as group_name FROM __users u
		                                LEFT JOIN __groups g ON u.group_id=g.id 
										WHERE 1 $group_id_filter $keyword_filter ORDER BY $order $sql_limit");
		$this->db->query($query);
		return $this->db->results();
	}
		
	function count_users($filter = array())
	{
		$group_id_filter = '';	
		$keyword_filter = '';

		if(isset($filter['group_id']))
			$group_id_filter = $this->db->placehold('AND u.group_id in(?@)', (array)$filter['group_id']);
		
		if(isset($filter['keyword']))
		{
			$keywords = explode(' ', $filter['keyword']);
			foreach($keywords as $keyword)
				$keyword_filter .= $this->db->placehold('AND u.name LIKE "%'.$this->db->escape(trim($keyword)).'%" OR u.email LIKE "%'.$this->db->escape(trim($keyword)).'%"');
		}

		// Выбираем пользователей
		$query = $this->db->placehold("SELECT count(*) as count FROM __users u
		                                LEFT JOIN __groups g ON u.group_id=g.id 
										WHERE 1 $group_id_filter $keyword_filter ORDER BY u.name");
		$this->db->query($query);
		return $this->db->result('count');
	}
		
	function get_user($id)
	{
		if(gettype($id) == 'string')
			$where = $this->db->placehold(' WHERE u.email=? ', $id);
		else
			$where = $this->db->placehold(' WHERE u.id=? ', intval($id));
	
		// Выбираем пользователя
		$query = $this->db->placehold("SELECT u.id, u.email, u.password_hash, u.image, u.username, u.username as name, u.lastname, u.surname, u.group_id, u.enabled, u.last_ip, u.created, g.discount, g.name as group_name FROM __users u LEFT JOIN __groups g ON u.group_id=g.id $where LIMIT 1", $id);
		$this->db->query($query);
		$user = $this->db->result();
		if(empty($user))
			return false;
		$user->discount *= 1; // Убираем лишние нули, чтобы было 5 вместо 5.00
		return $user;
	}
	
	public function add_user($param)
	{


        if(isset($param['password']))
            $param['password_hash'] = $this->create_password($param['password']);

        unset($param['password']);
			
		$query = $this->db->placehold("SELECT count(*) as count FROM __users WHERE email=?", $param['email']);
		$this->db->query($query);
		
		if($this->db->result('count') > 0)
			return false;
		
		$query = $this->db->placehold("INSERT INTO __users SET ?%", $param);
		$this->db->query($query);
		return $this->db->insert_id();
	}
		
	public function update_user($id, $user)
	{
		$user = (array)$user;
		if(isset($user['password']))
			$user['password'] = md5($this->salt.$user['password'].md5($user['password']));
		$query = $this->db->placehold("UPDATE __users SET ?% WHERE id=? LIMIT 1", $user, intval($id));
		$this->db->query($query);
		return $id;
	}
	
	/*
	*
	* Удалить пользователя
	* @param $post
	*
	*/	
	public function delete_user($id)
	{
		if(!empty($id))
		{
			$query = $this->db->placehold("UPDATE __orders SET user_id=NULL WHERE id=? LIMIT 1", intval($id));
			$this->db->query($query);
			
			$query = $this->db->placehold("DELETE FROM __users WHERE id=? LIMIT 1", intval($id));
			if($this->db->query($query))
				return true;
		}
		return false;
	}		
	
	function get_groups()
	{
		// Выбираем группы
		$query = $this->db->placehold("SELECT g.id, g.name, g.discount FROM __groups AS g ORDER BY g.discount");
		$this->db->query($query);
		return $this->db->results();
	}	
	
	function get_group($id)
	{
		// Выбираем группу
		$query = $this->db->placehold("SELECT * FROM __groups WHERE id=? LIMIT 1", $id);
		$this->db->query($query);
		$group = $this->db->result();

		return $group;
	}	
	
	
	public function add_group($group)
	{
		$query = $this->db->placehold("INSERT INTO __groups SET ?%", $group);
		$this->db->query($query);
		return $this->db->insert_id();
	}
		
	public function update_group($id, $group)
	{
		$query = $this->db->placehold("UPDATE __groups SET ?% WHERE id=? LIMIT 1", $group, intval($id));
		$this->db->query($query);
		return $id;
	}
	
	public function delete_group($id)
	{
		if(!empty($id))
		{
			$query = $this->db->placehold("UPDATE __users SET group_id=NULL WHERE group_id=? LIMIT 1", intval($id));
			$this->db->query($query);
			
			$query = $this->db->placehold("DELETE FROM __groups WHERE id=? LIMIT 1", intval($id));
			if($this->db->query($query))
				return true;
		}
		return false;
	}		
	
	public function check_password($email, $password)
	{
        $bcrypt = new Bcrypt();

		$query = $this->db->placehold("SELECT id, password_hash FROM __users WHERE email=? LIMIT 1", $email);
		$this->db->query($query);
        $user = $this->db->result();
        if ($bcrypt->verify($password, $user->password_hash)) {
            return $user->id;
        } else {
            return false;
        }

	}

    /* get communitys
     * @param integer $id
     * return object
    */

	public function get_communitys($filter)
    {

        if(isset($filter['limit']))
            $limit = max(1, intval($filter['limit']));

        if(isset($filter['page']))
            $page = max(1, intval($filter['page']));

        if(isset($filter['user_id']))
            $this->filter_user_id = $this->db->placehold('AND cu.user_id=?', $filter['user_id']);

        $this->sql_limit = $this->db->placehold(' LIMIT ?, ? ', ($this->page-1)*$this->limit, $this->limit);

        if (!empty($filter['sort']))
            $order = '';
        else
            $order = 'p.name';
        if(isset($filter['visible']))
            $this->visible_filter = $this->db->placehold('AND p.visible=?', intval($filter['visible']));

        $query = "SELECT  p.id, p.url, p.user_id as create_user_id, p.parent_id, p.name, p.annotation, p.body, p.created as created,
					p.visible, p.meta_title, p.meta_keywords, p.meta_description,
					p.type, p.legal_form_id, p.countuser, p.image
				FROM __communitys_user as cu
                LEFT JOIN __communitys as p ON cu.community_id=p.id
				WHERE 1 $this->visible_filter $this->filter_user_id
				ORDER BY $order
					$this->sql_limit";

        $this->db->query($query);
        return $this->db->results();

    }
    /* get communitys
     * @param integer $id
     * return object
    */

    public function get_messages($filter)
    {

        if(isset($filter['limit']))
            $limit = max(1, intval($filter['limit']));

        if(isset($filter['page']))
            $page = max(1, intval($filter['page']));

        if(isset($filter['user_id']))
            $this->filter_user_id = $this->db->placehold('AND cu.user_id=?', $filter['user_id']);
        if(!empty($filter['new']))
            $this->filter_new = $this->db->placehold('AND cu.countmessage>0');
        if(!empty($filter['old']))
            $this->filter_new = $this->db->placehold('AND cu.countmessage = 0');
        if(!empty($filter['all']))
            $this->filter_new = $this->db->placehold('');


        $this->sql_limit = $this->db->placehold(' LIMIT ?, ? ', ($this->page-1)*$this->limit, $this->limit);

        if (!empty($filter['sort']))
            $order = '';
        else
            $order = 'cm.create_data DESC';
        if(isset($filter['visible']))
            $this->visible_filter = $this->db->placehold('AND p.visible=?', intval($filter['visible']));

        $query = "SELECT cu.countmessage, cs.text as title, cm2.text, cm.create_data as date, u2.username, u2.surname, cu.countmessage, u.id as user_id, cm.id, cu.subject_id, cs.community_id,
                IF(cs.community_id>0, (SELECT cc.name FROM __communitys as cc WHERE cc.id = cs.community_id LIMIT 1), NULL) as name_community,
                IF(cs.community_id>0, (SELECT cc.image FROM __communitys as cc WHERE cc.id = cs.community_id LIMIT 1), u.image) as image 
                FROM __commes_users as cu
                LEFT JOIN __commes_subject as cs ON cs.id = cu.subject_id
                LEFT JOIN __commes as cm ON cm.id=(SELECT com.id FROM __commes as com WHERE com.subject_id=cs.id AND com.user_id<>".$filter['user_id']." ORDER BY com.create_data DESC LIMIT 1) 
                LEFT JOIN __commes as cm2 ON cm2.id=(SELECT com2.id FROM __commes as com2 WHERE com2.subject_id=cs.id ORDER BY com2.create_data DESC LIMIT 1) 
				LEFT JOIN __users as u2 ON u2.id = cm2.user_id 
				LEFT JOIN __users as u ON u.id = cm.user_id 
				WHERE 1 $this->visible_filter $this->filter_user_id $this->filter_new
				ORDER BY $order
					$this->sql_limit";

        $this->db->query($query);
        return $this->db->results();

    }

    /**
     * @param string $email
     * @return bool|string
     */
    public function exist_user(string $email='')
    {
        $this->db->query('SELECT count(*) as count FROM __users WHERE email=?', $email);
        $exist = $this->db->result('count');
        if($exist >0)
            return true;
        return false;
    }

    /**
     * @param string $password
     * @return string
     */
    public function create_password(string $password)
    {
        $bcrypt = new Bcrypt(['cost' => 13]);
        return $bcrypt->create($password);
    }

    public function validate_form($param)
    {
        $errors = new stdClass();
        if(empty($param->username))
            $errors->empty_username  ='empty_username';
        if(empty($param->surname))
            $errors->empty_surname  ='empty_surname';
        if(empty($param->lastname))
            $errors->empty_lastname  ='empty_lastname';
        if(empty($param->email))
            $errors->empty_email ='empty_email';
        else if($this->exist_user($param->email))
            $errors->user_exists = 'user_exists';

        if(empty($param->password))
            $errors->empty_password ='empty_password';

        if(count((array)$errors) > 0)
            return $errors;
        else
            return false;

    }

}