<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class and Function List:
 * Function list:
 * - __construct()
 * - index()
 * - view()
 * Classes list:
 * - Iphone extends CI_Controller
 */

class Iphone extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('languages');
	}
	
	public function index()
	{
		$this->load->model('pastes');
		$data = $this->pastes->getLists('iphone/');
		$this->_view('iphone/recent', $data);
	}
	
	public function view()
	{
		$this->load->model('pastes');
		$data = $this->pastes->getPaste(3);
		$this->_view('iphone/view', $data);
	}

	private function _view($v, $d)
	{
		$this->theme = config_item('theme');
		$this->load->view('themes/' . $this->theme . '/views/iphone/header');
		$this->load->view('themes/' . $this->theme . '/views/' . $v, $d);
		$this->load->view('themes/' . $this->theme . '/views/iphone/footer');
	}
}
