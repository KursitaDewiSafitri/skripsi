<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_gejala');
        
    }
    
    public function index()
    {
        $this->load->view('view_gejala');
        
    }

    function gejala_data()
    {
        $data = $this->Model_gejala->gejala_list();
        echo json_encode($data);
    }
 
    function save(){

        if ($this->Model_gejala->rules()) {
            
            $data = array(
                'id_gejala' => $this->input->post('id_gejala'),
                'nama_gejala' => $this->input->post('nama_gejala'),
                
            );

            $result = array(
                'pesan' => 'Berhasil aja', 
                'status'=> $this->Model_gejala->save_gejala($data)
            );
        } else {
            $result = array(
                'pesan' => validation_errors(), 
                'status'=> false
            );
        }
        echo json_encode($result);
    }
 
    function update(){
        $data=$this->Model_gejala->update_gejala();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->Model_gejala->delete_gejala();
        echo json_encode($data);
    }

}

/* End of file Controllername.php */

?>