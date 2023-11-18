<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roles extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_role');
        $this->load->database();
    }

    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('roles');
        }
        $data["hasil"] = $this->Model_role->ambil_data()->result();
        $data['menu'] = $this->Model_role->get_menu_from_database()->result();
        //  $data['roles'] = $this->Model_login->get_roles_from_database();
        $this->load->view('roles/index', $data);
    }

    function tambah()
    {
        $data = array(
            'nama_roles' => $this->input->post('nama_roles')
        );

        $this->Model_role->simpan_data($data);

        redirect('roles');
    }

    public function hapus()
    {
        $id_roles = $this->input->post('id');
        // $this->load->model('Model_name');
        $this->Model_role->hapus_data($id_roles);
        redirect('roles');
    }

    public function get_data_by_id()
    {
        $id_roles = $this->input->post('id');
        $data = $this->Model_role->get_data_by_id($id_roles);
        echo json_encode($data);
    }

    public function edit_data()
    {
        $id_roles = $this->input->post('id');
        $nama_roles = $this->input->post('nama_roles');
       

        $this->Model_role->edit_data($id_roles, $nama_roles);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        );

        echo json_encode($response);
    }
}