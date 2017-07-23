<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once "services/currency/lib/nusoap.php";



class Home extends CI_Controller {

	public function index()
	{

		
	
		$data = array();
		
		$data['title']='Third Way User Management'; //$title
		$data['page']= 'index';
		//$data['client']= $client;
		

		$this->load->view('template',$data);

	}
}
