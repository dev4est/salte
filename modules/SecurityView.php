<?php/** * Created by PhpStorm. * User: user * Date: 20.04.18 * Time: 19:18 */require_once('View.php');class SecurityView extends View{    function fetch()    {        if(empty($this->user))        {            header('Location: '.$this->config->root_url.'/user/login');            exit();        }        if($this->request->method('post') && $this->request->post('name'))        {            $name			= $this->request->post('name');            $email			= $this->request->post('email');            $password		= $this->request->post('password');            $this->design->assign('name', $name);            $this->design->assign('email', $email);            $this->db->query('SELECT count(*) as count FROM __users WHERE email=? AND id!=?', $email, $this->user->id);            $user_exists = $this->db->result('count');            if($user_exists)                $this->design->assign('error', 'user_exists');            elseif(empty($name))                $this->design->assign('error', 'empty_name');            elseif(empty($email))                $this->design->assign('error', 'empty_email');            elseif($user_id = $this->users->update_user($this->user->id, array('name'=>$name, 'email'=>$email)))            {                $this->user = $this->users->get_user(intval($user_id));                $this->design->assign('name', $this->user->name);                $this->design->assign('user', $this->user);                $this->design->assign('email', $this->user->email);            }            else                $this->design->assign('error', 'unknown error');            if(!empty($password))            {                $this->users->update_user($this->user->id, array('password'=>$password));            }        }        else        {            // Передаем в шаблон            $this->design->assign('name', $this->user->name);            $this->design->assign('email', $this->user->email);        }        $orders = $this->orders->get_orders(array('user_id'=>$this->user->id));        $this->design->assign('orders', $orders);        $this->design->assign('meta_title', $this->user->name);        $body = $this->design->fetch('profile/security.tpl');        return $body;    }    public function communitysAction()    {        if(empty($this->user))        {            header('Location: '.$this->config->root_url.'/user/login');            exit();        }        $filter['visible'] = 1;        $filter['user_id'] = $this->user->id;        $communitys = $this->users->get_communitys($filter);        $this->design->assign('communitys', $communitys);        $body = $this->design->fetch('profile/communitys.tpl');        return $body;    }    public function messagesAction()    {        // Отображать скрытые страницы только админу        if(empty($this->user))        {            header('Location: '.$this->config->root_url.'/user/login');            exit();        }        $filter['new'] = $this->request->get('new', 'integer');        $filter['old'] = $this->request->get('old', 'integer');        $filter['all'] = $this->request->get('all', 'integer');        $filter['user_id'] = $this->user->id;        $messages = $this->users->get_messages($filter);        $this->design->assign('messages', $messages);        $messages = $this->users->get_messages(['user_id'=>$filter['user_id'], 'all'=>1]);        $count_new=0;        foreach ($messages as $m){            $count_new = $count_new + $m->countmessage;        }        $this->design->assign('count_new', $count_new);           // $this->design->assign('left_bar', 'messages/filter.tpl');        $body = $this->design->fetch('profile/messages.tpl');        return $body;    }    public function messageAction()    {        // Отображать скрытые страницы только админу        if(empty($this->user))        {            header('Location: '.$this->config->root_url.'/user/login');            exit();        }        $id = $this->request->get('id', 'integer');        $messages = $this->messages->get_massage($id);        $this->design->assign('messages', $messages);        $filter['user_id'] = $this->user->id;        $items= $this->users->get_messages($filter);        $this->design->assign('items', $items);        /*Subject*/        $subject = $this->messages->get_subject($id);        $this->design->assign('subject', $subject);        /*get users*/        $users = $this->messages->get_users($id);        $this->design->assign('users', $users);        $this->design->assign('left_bar', 'messages/item_block.tpl');        $this->design->assign('page_name', $subject->text);        $body = $this->design->fetch('messages/message.tpl');        return $body;    }    public function newsAction()    {        $body = $this->design->fetch('profile/news.tpl');        return $body;    }}