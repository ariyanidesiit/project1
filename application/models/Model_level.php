<?php
Class Model_level extends CI_Model
{
  function TampilLevel() 
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('inputlevel')
          ->get()
          ->result();
    }

    function Getid($id = '')
    {
      return $this->db->get_where('inputlevel', array('id' => $id))->row();
    }
    function HapusLevel($id)
    {
        $this->db->delete('inputlevel',array('id' => $id));
    }
}
?>