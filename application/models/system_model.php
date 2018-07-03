<?php

class System_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        parent::__construct();
    }

	
	public function insert_system ($data)
	{
		
		$this->db->insert ('system', $data);
	}
	
	public function get_state ()
	{
		
		$this->db->select ('*')
			->from ('state');
	
		return $this->db->get ()->result();
	}

	

    public function get_systems ()
	{
		$this->db->select ('*')
			->from ('system');
	
		return $this->db->get ()->result();
	}
	
	

	public function delete_system ($id)
    {
        $this->db->where ('id', $id)
            ->delete ('system');
    }
	
	
	public function update_system ($id, $save)
    {	

        $this->db->where ('id', $id)
            ->update ('system', $save);

    }
	
	public function get_system_byid($id)
    {
		
		$this->db->where('id', $id);
		$data = $this->db->get('system');
		return $data->result();

    } 


}

