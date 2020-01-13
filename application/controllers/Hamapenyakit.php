<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hamapenyakit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_hamapenyakit');
        
    }
    
    public function index()
    {
        $this->load->view('view_hamapenyakit');
        
    }

    function product_data()
    {
        $data = $this->Model_hamapenyakit->product_list();
        echo json_encode($data);
    }
 
    function save(){

        if ($this->Model_hamapenyakit->rules()) {
            
            $data = array(
                'id_hamapenyakit' => $this->input->post('id_hamapenyakit'),
                'nama_hamapenyakit' => $this->input->post('nama_hamapenyakit'),
                'foto' => $this->Model_hamapenyakit->upload('foto')
            );

            $result = array(
                'pesan' => 'Berhasil aja', 
                'status'=> $this->Model_hamapenyakit->save_product($data)
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
        $data=$this->Model_hamapenyakit->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->Model_hamapenyakit->delete_product();
        echo json_encode($data);
    }

}

/* End of file Controllername.php */

?>