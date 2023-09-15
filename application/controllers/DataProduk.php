<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Pendataan';
		$data['active_page'] = 'pendataan';
		$this->load->view('dataproduk_v', $data);
	}
	public function penjualan()
	{
		$data['title'] = 'Penjualan';
		$data['active_page'] = 'penjualan';
		$this->load->view('penjualan_v', $data);
	}

}
