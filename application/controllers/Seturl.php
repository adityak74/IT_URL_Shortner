<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seturl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('token_generator');
		$this->load->model('site_model');
		$full_link = $this->input->post('full_link');
		if(isset($full_link)){
			$data['short_code'] = $this->site_model->set_link($full_link);
			$this->load->view('short_url_generator',$data);
		}else{
			echo '<meta http-equiv="refresh" content="0;http://itnsp.com">';
		}
	}
}
