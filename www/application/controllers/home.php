<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('hours_model');
    }
    
    
    function index()
	{
	    $this->load->view('home_view');
	    
	}
    
    function help()
	{
	    $this->load->view('help_view');
	    
	}
    
    function del($id=NULL)
	{
	    $id = $this->uri->segment(3);
	    $this->hours_model->delete($id);
	    $this->session->flashdata('notification', 'Record deleted!');
	    $this->load->view('home_view');
	    
	}
    
	
    public function add()
	{			
		$this->form_validation->set_rules('dt', 'Date', 'trim|xss_clean');			
		$this->form_validation->set_rules('pilot_1', '1st Pilot', 'trim|xss_clean|max_length[64]');			
		$this->form_validation->set_rules('pilot_2', '2nd Pilot', 'trim|xss_clean|max_length[64]');			
		$this->form_validation->set_rules('ac_name', 'Aircraft Name', 'trim|xss_clean|');			
		$this->form_validation->set_rules('ac_num', 'Aircraft Number', 'trim|xss_clean');			
		$this->form_validation->set_rules('mission', 'Mission', 'trim|xss_clean');			
		$this->form_validation->set_rules('route', 'Route', 'trim|xss_clean');			
		$this->form_validation->set_rules('hr_1', 'Hour as 1st Pilot', 'trim|xss_clean|is_natural|max_length[10]');			
		$this->form_validation->set_rules('min_1', 'Minutes as 1st Pilot', 'trim|xss_clean|is_natural|max_length[2]|less_than[59]');			
		$this->form_validation->set_rules('hr_2', 'Hour as 2nd Pilot', 'trim|xss_clean|is_natural|max_length[10]');			
		$this->form_validation->set_rules('act_hr', 'Hour in Actual Flight', 'trim|xss_clean|is_natural|max_length[10]');			
		$this->form_validation->set_rules('sim_hr', 'Hour in Simulated Flight', 'trim|xss_clean|is_natural|max_length[10]');			
		$this->form_validation->set_rules('min_2', 'Minutes as 2nd Pilot', 'trim|xss_clean|is_natural|max_length[2]|less_than[59]');			
		$this->form_validation->set_rules('act_min', 'Minutes in Actual Flight', 'trim|xss_clean|is_natural|max_length[2]|less_than[59]');			
		$this->form_validation->set_rules('sim_min', 'Minutes in Simulated Flight', 'trim|xss_clean|is_natural|max_length[2]|less_than[59]');			
			
		$this->form_validation->set_error_delimiters('<br /><span class="label label-danger">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('home_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
		    $rotor = $this->input->post('rotor');
		    $multi_eng = $this->input->post('multi_eng');
		    $night = $this->input->post('night');
		    
			$form_data = array(
					       	'dt' => set_value('dt'),
					       	'pilot_1' => strtoupper(set_value('pilot_1')),
					       	'pilot_2' => strtoupper(set_value('pilot_2')),
					       	'ac_name' => strtoupper(set_value('ac_name')),
					       	'ac_num' => set_value('ac_num'),
					       	'mission' => strtoupper(set_value('mission')),
					       	'route' => strtoupper(set_value('route')),
					       	'hr_1' => set_value('hr_1'),
					       	'hr_2' => set_value('hr_2'),
					       	'min_2' => set_value('min_2'),
					       	'min_1' => set_value('min_1'),
					       	'act_hr' => set_value('act_hr'),
					       	'act_min' => set_value('act_min'),
					       	'sim_min' => set_value('sim_min'),
					       	'sim_hr' => set_value('sim_hr'),
					       	'rotor' => $rotor,
			                'multi_eng' => $multi_eng,
			                'night' => $night,
			);
					
			// run insert model to write data to db
		
			if ($insert_id = $this->hours_model->SaveForm($form_data)) // the information has therefore been successfully saved in the db
			{
			    $this->session->set_flashdata('notification', "New flight data saved!");

			    redirect('home');
			}
			else
			{
			     $data['error'] = "An error occurred. Please try again later.";
	             $this->load->view('home');
			     // Or whatever error handling is necessary
			}
		}
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */