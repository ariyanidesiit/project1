<?php
class Model_role extends CI_Model
{
  function ambil_data()
  {
    return $this->db->get('roles');
  }

  public function simpan_data($data)
  {
    $this->db->insert('roles', $data);
  }

  public function hapus_data($id_roles)
  {
    $this->db->where('id_roles', $id_roles);
    $this->db->delete('roles');
  }

  public function get_data_by_id($id_roles)
  {
    $this->db->where('id_roles', $id_roles);
    $query = $this->db->get('roles');
    return $query->row_array();
  }

  public function edit_data($id_roles, $nama_roles)
  {
    $data = array(
      'nama_roles' => $nama_roles
     
    );

    $this->db->where('id_roles', $id_roles);
    $this->db->update('roles', $data);
  }
  public function get_menu_from_database()
{
    $query = $this->db->get('menu'); 
    return $query;
}
}
