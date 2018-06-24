<?PHP

require_once('View.php');

class RegisterView extends View
{
    public $default_status = 1; // Активен ли пользователь сразу после регистрации (0 или 1)

    /**
     * @return bool
     */
    public function fetch()
	{
        $this->design->assign('wrapper', 'home_login.tpl');
		return $this->design->fetch('register.tpl');
	}

	public function userAction()
    {
        if($this->request->method('post') && $this->request->post('signup-button'))
        {
            $user = new stdClass();
            $user->username = $this->request->post('username');
            $user->surname = $this->request->post('surname');
            $user->lastname = $this->request->post('lastname');
            $user->email = $this->request->post('email');
            $user->password = $this->request->post('password');
            $user->type = 1;
            $user->last_ip = $_SERVER['REMOTE_ADDR'];
            $user->enabled = 1;

            $this->design->assign('u', $user);

            if (!empty($errors = $this->users->validate_form($user))) {
                $this->design->assign('errors', $errors);
            } else {
                $user = (array)$user;
                $user_id = $this->users->add_user($user);
                if ($user_id > 0)
                    header('Location: ' . $this->config->root_url);
            }
        }

        $this->design->assign('wrapper', 'home_login.tpl');
        return $this->design->fetch('register/user.tpl');
    }
    public function organizationAction()
    {
        if($this->request->method('post') && $this->request->post('signup-button')) {
            $organization = new stdClass();
            $organization->username = $this->request->post('username');
            $organization->email = $this->request->post('email');
            $organization->password = $this->request->post('password');
            $organization->legal_form = $this->request->post('legal_form');
            $organization->type = 2;
            $organization->last_ip = $_SERVER['REMOTE_ADDR'];
            $organization->enabled = 1;

            $this->design->assign('o', $organization);

            if (!empty($errors = $this->organization->validate_form($organization))) {
                $this->design->assign('errors', $errors);
            } else {
                $organization = (array)$organization;
                $user_id = $this->organization->add_organization($organization);
                if ($user_id > 0)
                    header('Location: ' . $this->config->root_url);
            }
        }

        $legal_form = $this->organization->get_legal_form();
        $this->design->assign('legal_form', $legal_form);

        $this->design->assign('wrapper', 'home_login.tpl');
        return $this->design->fetch('register/organization.tpl');
    }
}
