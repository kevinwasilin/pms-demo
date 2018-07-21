<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function create()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('order_create');
		$this->load->view('templates/footer');
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */

