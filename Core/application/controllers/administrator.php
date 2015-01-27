<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
	
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
				redirect('auth', 'refresh');
		} 
	}	

	public function index()	{
		echo $this->load->view("admin/template"); 
	}
	
	public function users()	{
		//list the users
		$this->data['page'] = 'admin/auth_users';
		$this->data['users'] = $this->ion_auth->users()->result();
		foreach ($this->data['users'] as $k => $user)
		{
			$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
		}
		echo $this->load->view("admin/template", $this->data ); 
		
	}

}
