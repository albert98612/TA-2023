<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BahanBaku extends CI_Controller
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
	public function stok()
	{
		$data['title'] = 'Stok Bahan Baku';
		$data['active_page'] = 'stokbahanbaku';
		$this->load->view('stokbahanbaku_v', $data);
	}
	public function pembelian()
	{
		$data['title'] = 'Pembelian Bahan Baku';
		$data['active_page'] = 'pembelianbahanbaku';
		$this->load->view('pembelianbahanbaku_v', $data);
	}
}
