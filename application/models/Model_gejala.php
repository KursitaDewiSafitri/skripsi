<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gejala extends CI_Model {

    function rules(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('tambah_id_gejala', 'ID Data', 'required');

        if ($this->form_validation->run() == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
        
        
    }

    function gejala_list(){
        $hasil = $this->db->get('gejala');
        return $hasil->result();
    }
 
    function save_gejala($data){
        $result = $this->db->insert('gejala',$data);
        return $result;
    }
 
    function update_gejala($data,$where){
        $result = $this->db->update('gejala',$data,$where);
        return $result;
    }
 
    function delete_gejala($where){
        $result=$this->db->delete('gejala',$where);
        return $result;
    }


}

/* End of file Model_penyakit.php */

?>