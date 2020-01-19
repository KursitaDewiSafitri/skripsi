<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_hamapenyakit extends CI_Model {

    function rules(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('tambah_id_hamapenyakit', 'ID Data', 'trim|required|exact_length[4]');
        $this->form_validation->set_rules('tambah_nama_hamapenyakit', 'Nama', 'required');

        if ($this->form_validation->run() == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
        
        
    }

    function product_list(){
        $hasil = $this->db->get('hamapenyakit');
        return $hasil->result();
    }

    function check_data_product($where){
        $result = $this->db->get_where('hamapenyakit',$where);
        return $result->num_rows();
    }
 
    function save_product($data){
        $result = $this->db->insert('hamapenyakit',$data);
        return $result;
    }
 
    function update_product($data,$where){
        $result = $this->db->update('hamapenyakit',$data,$where);
        return $result;
    }
 
    function delete_product($where){
        $result=$this->db->delete('hamapenyakit',$where);
        return $result;
    }

    function upload($file){
        $config['upload_path']  = "./assets/gambar";
        $config['allowed_types']= "gif|jpg|png|jpeg";
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($file)){
            $error = array('error' => $this->upload->display_errors());

            return $error;
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $judul= $data['upload_data']['file_name'];

            return $judul;
        }
        
    }

}

/* End of file Model_penyakit.php */

?>