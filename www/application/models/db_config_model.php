<?php
class Db_Config_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
    }
    
    public function is_premium ()
    {
        $this->db->where('id', 1);
        $q = $this->db->get('_db_config');
        if ($q->num_rows() == 1)
        {
            $row = $q->row();
            
            if ($row->is_premium == TRUE)
            {
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
    public function inspected_valid ()
    {
        $this->db->where('id', 1);
        $q = $this->db->get('_db_config');
        if ($q->num_rows() == 1)
        {
            $row = $q->row();
        /* If inspected dt is 1 month and beyond */
            if (human_to_unix(time()) - mysql_to_unix($row->inspected) > 30*24*60*60)
            {
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
    public function get_clinic()
    {
        $sql = "SELECT clinic FROM _db_config WHERE id=1 LIMIT 1";
        $q = $this->db->query($sql);
        
        return $q->row();
    }
}
?>