<?php
class Register extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('register_view');
    }
    
    public function process ()
    {
        $u = $this->security->xss_clean($this->input->post('username'));
        $p = $this->security->xss_clean($this->input->post('password'));
        $p2 = $this->security->xss_clean($this->input->post('password2'));
        
        $this->load->model('user_model');
        $this->user_model->new_user($u, $p, $p2);
        $this->load->view('home_view');
    }
}