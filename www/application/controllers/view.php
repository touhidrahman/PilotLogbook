<?php
class View extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hours_model');
    }

    public function index()
    {
        $this->load->view('view_view');
    }
    
    public function date()
    {
        /* Views logbook from specific date  */
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        
        $data['results'] = $this->hours_model->get_between($from, $to);
        $this->load->view('logbook_view', $data);
    }
    
    
}