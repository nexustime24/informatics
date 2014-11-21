<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
		$this->load->view('homepage');
	}

	function grade()
	{
		$this->load->view('grades');

	}
	function login(){
		$this->load->view('login');
	}
	function prospectus(){
		$this->load->view('prospectus');

	}
	function stud_profile(){
		$this->load->view('stud_profile');

	}
	function schedule(){
		$this->load->view('schedule');

	}
	function home(){
		$this->load->view('home');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */