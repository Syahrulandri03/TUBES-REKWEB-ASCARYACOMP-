<?php


	class dashboard extends CI_Controller{
		
		public function index(){
			

			$data['etalase'] = $this->model_etalase->tampil_barang()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer');
		}
	}