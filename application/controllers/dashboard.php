<?php


	class dashboard extends CI_Controller{
		
		public function index(){
			

			$data['etalase'] = $this->model_etalase->tampil_barang()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer');
		}

		public function keranjang($id){
			
			$etalase = $this->model_etalase->cari_id($id);

			$data = array(

					'id'		=> $etalase->id_barang,
					'qty'		=> 1,
					'price'		=> $etalase->harga,
					'name'		=> $etalase->nama_barang

			);

			$this->cart->insert($data);

			redirect('dashboard');
		}
	}