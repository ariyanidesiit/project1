<?php
class Model_datalog extends CI_Model
{
    function ambil_data()
    {
      return $this->db->get('login');
    }

    public function simpan_data($data)
    {
      $this->db->insert('login', $data);
    }

    public function hapus_data($id_user)
  {
    $this->db->where('id_user', $id_user);
    $this->db->delete('login');
  }

  public function get_data_by_id($id_user)
  {
    $this->db->where('id_user', $id_user);
    $query = $this->db->get('login');
    return $query->row_array();
  }
  public function edit_data($id_user, $username, $password)
  {
    $data = array(
      'username' => $username,
      'password' => $password
    );

    $this->db->where('id_user', $id_user);
    $this->db->update('login', $data);
  }
}