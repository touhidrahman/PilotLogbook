<?php

class User_model extends MY_Model
{
    protected $_table = 'users';

    function __construct ()
    {
        parent::__construct();
    }


    public function validate ($u, $p)
    {
        $this->db->select('username, password');
        $this->db->from('users');
        $this->db->where('username', $u);
        $this->db->where('password', md5($p));
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $data = array(
                    'username' => $row->username,
                    'validated' => TRUE
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }
    
    public function new_user ($u, $p, $p2)
    {
        if ($p == $p2)
        {
            $this->insert(array(
                    'username' => $u,
                    'password' => $p,
            ));
        }
    }
    
    function get_hint($username)
    {
        $this->db->where('username', $username);
        $this->db->limit(1);
        $query = $this->db->get('users');
        
        return $query->result();
    }
    
    
    function SaveForm($form_data)
    {
        $this->db->insert('users', $form_data);
    
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
    
        return FALSE;
    }
    
    
    public function change_pass_in_db ($p, $np1, $np2)
    {
        if ($np1 == $np2)
        {
            $username = $this->session->userdata('username');
            $data = array('password' => md5($np1));
            
            $this->db->where('password', md5($p));
            $this->db->where('username', $username);
            $query = $this->db->update('users', $data);
            
            return TRUE;
        }
        
        return FALSE;
    }
}

?>