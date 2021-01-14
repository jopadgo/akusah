<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('/meta/M_Meta');
	}
	
	public function index()
	{
		$meta = $this->M_Meta->coreMeta();
		$data = [
			'meta' => [$meta],
			'title' => 'akusah - Partners',
			'content' => 'partners/partners',
			'css' => ['home/home'],
			'javascript' => ['home/core']
		];
		$this->load->view('layout/home/main', $data);
	}
}
