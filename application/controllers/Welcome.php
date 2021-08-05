<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function engine(){

		if($this->input->post('submit')){
			redirect('/');
		}
		$since = strtotime($this->input->post('date'));
		$days = $this->input->post('days');

		$diff = time() - $since;

		$count_from_today = round($diff / (60 * 60 * 24));


		$initialD = $days - 18 ;
		$finalD   = $initialD + 9;

		if(($initialD <= $count_from_today) && ($count_from_today <= $finalD)){
			$data['result'] = 'danger';
		}
		else{
			$data['result'] = 'safe';
		}

		$this->load->view('welcome_message', $data);



	}
}
