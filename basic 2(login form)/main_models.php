<?php 
class Main_models extends CI_Model
{
	function test_main()
	{
		echo"this is model";
	}
	function insert_data($data)
	{
      $this->db->insert("test",$data);
	}
}

?>