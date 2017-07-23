<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Services extends CI_Controller {

	
	
	public function index() {
		

	}
	
	/**
	 * service function.
	 * 
	 * @access public
	 * @return void
	 */
	public function services() {
		
		$this->load->ext_view('services/currency','service');
	}