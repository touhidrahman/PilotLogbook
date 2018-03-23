<?php
class Search_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_distinct($col)
    {
        $sql = "SELECT DISTINCT " .$col. " FROM hours ORDER BY " .$col;
        $q = $this->db->query($sql);
        return $q->result();
    }
    
    public function find_where($dt=NULL, 
            $pilot_1=NULL, 
            $pilot_2=NULL, 
            $ac_name=NULL, 
            $rotor=NULL, 
            $multi_eng=NULL, 
            $night=NULL, 
            $mission=NULL
    )
    {
        $sql = "SELECT * FROM hours WHERE ";
        if ($dt != NULL) {$sql .= " dt = '".$dt. "' AND ";}
        if ($pilot_1 != NULL) {$sql .= " pilot_1 = '".$pilot_1. "' AND ";}
        if ($pilot_2 != NULL) {$sql .= " pilot_2 = '".$pilot_2. "' AND ";}
        if ($ac_name != NULL) {$sql .= " ac_name = '".$ac_name. "' AND ";}
        if ($rotor != NULL) {$sql .= " rotor = ".$rotor. " AND ";}
        if ($multi_eng != NULL) {$sql .= " multi_eng = ".$multi_eng. " AND ";}
        if ($night != NULL) {$sql .= " night = ".$night. " AND ";}
        if ($mission != NULL) {$sql .= " mission = '".$mission."' AND";}
        $sql .= " id != 0 ";
        $sql .= " ORDER BY dt";
        
        $q = $this->db->query($sql);
        
        return $q->result();
    }
}