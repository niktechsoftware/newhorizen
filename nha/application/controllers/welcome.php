<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	public function about()
	{
		$this->load->view('about_us');
	}
	public function teachers()
	{
		$this->load->view('teachers');
	}
	public function courses()
	{
		$this->load->view('courses');
	}
	public function events()
	{
		$this->load->view('events');
	}
	public function contect()
	{
		$this->load->view('contect');
	}
	public function apply()
	{
		$this->load->view('apply');
	}
	public function galary()
	{
		$this->load->view('galary');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */