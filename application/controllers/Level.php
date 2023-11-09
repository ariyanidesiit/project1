<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_level');
    }

	function index()
	{
        $this->load->view('level/index');
    }

    function tampilLevel()
    {
        $data['hasil']=$this->Model_level->TampilLevel();
        $this->load->view('data-level',$data);
    }

    function tambah()
    {
        $aksi=$this->input->post('aksi');
        $this->load->view('tambah',$aksi);
    }

    function edit()
    {
        $id=$this->input->post('id');
        $data['hasil']=$this->Model_level->Getid($id);
        $this->load->view('edit',$data);
    }
    function hapus()
    {
        $id=$this->input->post('id');
        $data['hasil']=$this->Model_level->Getid($id);
        $this->load->view('hapus',$data);
    }

    function simpanLevel()
    {
        $data = array(
            'id'=>$this->input->post('id'),
            'nama'=>$this->input->post('nama'),
            'keterangan'=>$this->input->post('keterangan')
            );
            $this->db->insert('datainput',$data);
    }

    function editLevel()
    {
        $data = array(
            'id'=>$this->input->post('id_baru'),
            'nama'=>$this->input->post('nama'),
            'keterangan'=>$this->input->post('keterangan')
		);
        $id = $this->input->post('id_lama');
        $this->db->where('id', $id);
        $this->db->update('keterangan',$data);
    }
    function hapusLevel()
    {
        $id=$this->input->post('id');
        $this->db->delete('datainput',array('id' => $id));
    }
}
?>