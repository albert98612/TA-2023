<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Larutan extends CI_Controller
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
		$data['title'] = 'Stok larutan';
		$data['active_page'] = 'stoklarutan';
		$this->load->view('stoklarutan_v', $data);
	}
	public function produksi()
	{
		$data['title'] = 'Produksi larutan';
		$data['active_page'] = 'produksilarutanep';
		$this->load->view('produksilarutanep_v', $data);
	}
	public function pembersihan()
	{
		$data['title'] = 'Tahap Pembersihan';
		$data['active_page'] = 'pembersihan';
		$this->load->view('pembersihan_v', $data);
	}
	public function perendaman()
	{
		$data['title'] = 'Tahan Perendaman';
		$data['active_page'] = 'perendaman';
		$this->load->view('perendaman_v', $data);
	}
	public function pewarnaan()
	{
		$data['title'] = 'Tahap Pewarnaan';
		$data['active_page'] = 'pewarnaan';
		$this->load->view('pewarnaan_v', $data);
	}
	public function penjemuran()
	{
		$data['title'] = 'Tahap Penjemuran';
		$data['active_page'] = 'penjemuran';
		$this->load->view('penjemuran_v', $data);
	}
}
