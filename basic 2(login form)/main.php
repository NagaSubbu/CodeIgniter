<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main_view');
	}
public function form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","NAME","required|alpha");
	    $this->form_validation->set_rules("password","PASSWORD","required");
	    if($this->form_validation->run())
	    {
          $this->load->model("main_models");
          $data = array("name
          " => $this->input->post("name"),"password
          " => $this->input->post("password"));
          $this->main_models->insert_data($data);
         redirect(base_url()."main/inserted");
	    }
	    else{
	    	$this->index();
	    }
			
	}
	    

public function inserted()
{
	$this->index();
}


}    



?>