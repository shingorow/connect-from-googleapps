<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->set_header('Access-Control-Allow-Origin: *');
	}
	
	public function schedule_list()
	{
		$data_path = APPPATH.'data/data.json';
		
		$str = file_get_contents('php://input');
		
		$arr = array_map(function($v) {
			return explode(",", $v);
		}, explode("\n", $str));
		
		$this->keys = array_shift($arr);
		$result = array_map(function($v) {
			return array_combine($this->keys, $v);
		}, $arr);
		
		file_put_contents($data_path, json_encode($result));
	}
}
