<?php  

		class etalase extends CI_Controller{
			public function index(){

				$data['etalase'] = $this->model_etalase->tampil_barang()->result();
				$this->load->view('templates_admin/header');
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/etalase', $data);
				$this->load->view('templates_admin/footer');
			}

		}


