<?php
class Hours_model extends MY_Model {

    function __construct()
    {
        parent::__construct();
        $_table = "hours";
    }

    function SaveForm($form_data)
    {
        $this->db->insert("hours", $form_data);

        if ($this->db->affected_rows() == '1')
        {
            return $this->db->insert_id();
        }

        return FALSE;
    }
    
    public function get_between($f, $t)
    {
        $sql = "SELECT * FROM hours WHERE dt BETWEEN '".$f."' AND '".$t."' ORDER BY dt";
        $q = $this->db->query($sql);
        
        return $q->result();
    }
}