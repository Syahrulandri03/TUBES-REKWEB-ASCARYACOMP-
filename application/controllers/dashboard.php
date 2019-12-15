<?php


	class dashboard extends CI_Controller{
		
		public function index(){
			

			$data['etalase'] = $this->model_etalase->tampil_barang()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer');
		}

		public function keranjang(){

			$etalase = $this->model_etalase->find($id_barang);

			$data = array(

					'id'		=> $etalase->id_barang;
					'qty'		=> 1,
					'price'		=> $etalase->harga,
					'name'		=> $barang->nama_barang

			);

			$this->cart->insert($data);
			redirect('dashboard');
		}
	}