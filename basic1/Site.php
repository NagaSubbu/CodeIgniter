<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}
	public function About()
	{
		$data['About'] = array('name'=>'Naga Subramanian','Title' =>'biography','content'=>'Solrathuku onnum illa');
		$this->load->view('About',$data);
	}
}
?>