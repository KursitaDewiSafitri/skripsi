<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hamapenyakit extends CI_Controller
{

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

    public function cek()
    {
        $data = array(
            'id_hamapenyakit' => $this->input->post('id')
        );

        $result = mb_substr($data['id_hamapenyakit'],0,2);

        if ($result == "PY" || $result == "HM") {
            $result = "Sama";
        } else {
            $result = "Tidak";
        }
        

        echo json_encode($result);
    }

    function save()
    {

        if ($this->Model_hamapenyakit->rules()) {
            $data = array(
                'id_hamapenyakit' => $this->input->post('id_hamapenyakit'),
                'nama_hamapenyakit' => $this->input->post('nama_hamapenyakit'),
                'foto' => ''
            );

            $formatID = mb_substr($data['id_hamapenyakit'], 0, 2);
            if ($formatID == "PY" || $formatID == "HM") {
                $formatID2 = intval(mb_substr($data['id_hamapenyakit'], 2));
                if ($formatID2 !== 0) {
                    $cekIDInsert = $this->Model_hamapenyakit->check_data_product($where = array('id_hamapenyakit' => $data["id_hamapenyakit"]));
                    if ($cekIDInsert == 0) {
                        $cekNamaInsert = $this->Model_hamapenyakit->check_data_product($where = array('nama_hamapenyakit' => $data["nama_hamapenyakit"]));
                        if ($cekNamaInsert == 0) {
                            $data['foto'] = $this->Model_hamapenyakit->upload('foto');
                            if ($this->Model_hamapenyakit->save_product($data)) {
                                $result = array(
                                    'pesan' => 'Data berhasil disimpan',
                                    'status' => true
                                );
                            } else {
                                $result = array(
                                    'pesan' => 'Gagal menyimpan data, coba kembali!',
                                    'status' => 'warning'
                                );
                            }
                        } else {
                            $result = array(
                                'pesan' => 'Nama sudah ada, coba cek kembali!',
                                'status' => false
                            );
                        }
                    } else {
                        $result = array(
                            'pesan' => 'ID sudah dipakai, coba ganti ID!',
                            'status' => false
                        );
                    }
                } else {
                    $result = array(
                        'pesan' => 'Karakter 3 dan 4 harus berisi angka!',
                        'status' => false
                    );
                }
            } else {
                $result = array(
                    'pesan' => '2 karakter awal harus bernilai "HM" untuk Hama dan "PY" untuk Penyakit, disertai dengan 2 digit angka',
                    'status' => false
                );
            }
        } else {
            $result = array(
                'pesan' => validation_errors(),
                'status' => false
            );
        }
        echo json_encode($result);
    }

    function update()
    {
        $data = $this->Model_hamapenyakit->update_product();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->Model_hamapenyakit->delete_product();
        echo json_encode($data);
    }
}

/* End of file Controllername.php */
