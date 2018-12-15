<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
    $data["photo"]='uploads/doctor/default.png';
    $json_url = "https://rsiagrandfamily.com/id/tim-dokter-api";
    $json = file_get_contents($json_url);
    $data = json_decode($json, TRUE);
    // print_r($data[name]) ;
    $data_array = array(
        'datalist' => $data
    );
    // print_r($data_array);
		$this->load->view('home',$data_array);
	}
}
