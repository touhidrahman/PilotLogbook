<?php

class Search extends MY_Controller
{
    /*
     * (non-PHPdoc) @see MY_Controller::__construct()
     */
    public function __construct ()
    {
        // TODO: Auto-generated method stub
        parent::__construct();
        $this->load->model('search_model');
    }

    public function index ()
    {
        $data['ac_names'] = $this->search_model->get_distinct('ac_name');
        $data['pilot_2s'] = $this->search_model->get_distinct('pilot_2');
        $data['pilot_1s'] = $this->search_model->get_distinct('pilot_1');
        $data['missions'] = $this->search_model->get_distinct('mission');
        $this->load->view('search_view', $data);
    }

    public function find ()
    {
        $dt = $this->input->post('dt');
        $pilot_1 = $this->input->post('pilot_1');
        $pilot_2 = $this->input->post('pilot_2');
        $ac_name = $this->input->post('ac_name');
        $rotor = $this->input->post('rotor');
        $multi_eng = $this->input->post('multi_eng');
        $night = $this->input->post('night');
        $mission = $this->input->post('mission');
        $route = $this->input->post('route');
        $data['results'] = $this->search_model->find_where(
            $dt, 
            $pilot_1, 
            $pilot_2, 
            $ac_name, 
            $rotor, 
            $multi_eng, 
            $night, 
            $mission
        );
        $this->load->view('logbook_view', $data);
    }

}
