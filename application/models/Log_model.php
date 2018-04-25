<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Log_model extends CI_Model {
    
    public $keys = array('create', 'opt');


    public function get_alllogs()
	{
        $this->db->from('tb_sendlog');
        $query = $this->db->get(); 
        return $query->result_array();
    }
    
    
    public function insert_log($opt =0){
        $data['opt'] = $opt;
        $data['created'] =  date('Y-m-d H:i:s');
        $this->db->insert('tb_sendlog', $data);
        return $this->db->affected_rows();
    }
}



?>