<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    
    function index ($error = NULL) 
    {
        $data['error'] = $error;
        $this->load->view('login_view', $data);
    }
    
    function process ()
    {
        $this->load->model('user_model');
        
        $u = $this->security->xss_clean($this->input->post('username'));
        $p = $this->security->xss_clean($this->input->post('password'));
        //validate the user
        $result = $this->user_model->validate($u, $p);
        
        //post validation
        if (! $result)
        {
            $error = "Incorrect Username or Password!";
            $this->index($error);
        }
        else 
        {
            redirect('home');
        }
    }
    
    
}

?>