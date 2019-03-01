<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_data extends CI_Model{

    public function alldata(){
        $this->db->from('Menu');

        $query = $this->db->get();
        return $query->result();
    }

    public function inputcust($nama_cust,$no_tlp){
        $data = array(
			'nama_cust' => $nama_cust, 
			'no_tlp' => $no_tlp
        );
        
        $input = $this->db->insert('customer',$data);
    }

    public function allcust(){
        $this->db->from('customer');

        $query = $this->db->get();
        return $query->result();
    }

    public function cekcust()
    {
        $this->db->from('customer');

        $query = $this->db->get();
        return $query->result();
    }
}