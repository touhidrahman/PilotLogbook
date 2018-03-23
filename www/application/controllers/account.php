<?php
class Account extends MY_Controller
{
	/* (non-PHPdoc)
	 * @see MY_Controller::__construct()
	 */
	public function __construct() {
		// TODO: Auto-generated method stub
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('user_model');
	}
	
	public function changePassword ()
	{
	   $this->form_validation->set_rules('password', 'Password', 'required');			
		$this->form_validation->set_rules('new_password1', 'New Password', 'required');			
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required');
			
		$this->form_validation->set_error_delimiters('<br /><span class="label label-danger">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('changePassword_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$p = set_value('password');
			$np1 = set_value('new_password1');
			$np2 = set_value('new_password2');
		

			if ($this->user_model->change_pass_in_db($p, $np1, $np2)) // the information has therefore been successfully saved in the db
			{
				$data['notification'] = "Password successfully changed!";
				$this->load->view('home_view', $data);
			}
			else
			{
			     $data['error'] = "Error changing password. Try again later!";
				$this->load->view('home_view', $data);
			}
		}
	}
	
	
	function logout ()
	{
	    $sess_vars = $this->session->all_userdata();
	    $this->session->unset_userdata($sess_vars);
	    redirect('login');
	
	}
}