<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

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

    public function spackage()
	{
		$meta = $this->M_Meta->coreMeta();
		$data = [
			'meta' => [$meta],
			'title' => 'S Package Demo',
			'content' => 'demo/s-package',
            'css' => ['package/main','package/s-package'],
			// 'pluginCss' => [],
			// 'pluginJs' =>[],
			'javascript' => ['template/countDown', 'template/main']
		];
		$this->load->view('layout/package/main', $data);
	}
	
	public function mpackage()
	{
		$meta = $this->M_Meta->coreMeta();
		$data = [
			'meta' => [$meta],
			'title' => 'M Package Demo',
			'content' => 'demo/m-package',
			'css' => ['package/main','package/m-package'],
			'cdnCss' => [
				'https://unpkg.com/aos@2.3.1/dist/aos.css',
			],
			'cdnJs' =>[
				'https://unpkg.com/aos@2.3.1/dist/aos.js', 
			],
			'pluginCss' => ['TimeLiner/timeliner.css'],
			'pluginJs' =>['TimeLiner/timeliner.js'],
			'javascript' => ['template/countDown', 'template/main', 'template/m-main']
		];
		$this->load->view('layout/package/main', $data);
	}
	
	public function lpackage()
	{
		$meta = $this->M_Meta->coreMeta();
		$data = [
			'meta' => [$meta],
			'title' => 'L Package Demo',
			'content' => 'demo/l-package',
			'css' => ['package/main','package/l-package'],
			'cdnCss' => [
				'https://unpkg.com/aos@2.3.1/dist/aos.css',
				'https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.5/css/jquery.mb.YTPlayer.min.css'
			],
			'cdnJs' =>[
				'https://unpkg.com/aos@2.3.1/dist/aos.js', 
				'https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.5/jquery.mb.YTPlayer.min.js'
			],
			'pluginCss' => ['TimeLiner/timeliner.css'],
			'pluginJs' =>['TimeLiner/timeliner.js'],
			'javascript' => [
				'template/countDown', 
				'template/main', 
				'template/l-main'
			]
		];
		$this->load->view('layout/package/main', $data);
    }
    

}
