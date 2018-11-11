<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainLevels extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome/MainLevels');
	}
}
