<?php  

		class etalase extends CI_Controller{
			public function index(){

				$data['etalase'] = $this->model_etalase->tampil_barang()->result();
				$this->load->view('templates_admin/header');
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/etalase', $data);
				$this->load->view('templates_admin/footer');
			}

			public function tambah_produk(){

				$gambar 			= $_FILES['gambar']['name'];
				$nama_barang 		= $this->input->post('nama_barang');
				$deskripsi			= $this->input->post('deskripsi');
				$kategori 			= $this->input->post('kategori');
				$harga 				= $this->input->post('harga');
				$jumlah_stok 		= $this->input->post('jumlah_stok');

					if ($gambar ='') {} else{

							$config['upload_path'] = './uploads';
							$config['allowed_types'] = 'jpg|jpeg|png';

							$this->load->library('upload', $config);
							
								if (!$this->upload->do_upload('gambar')) {
									
									echo "Upload Gambar Gagal!";

								}else{

									$gambar = $this->upload->data('file_name');
									
								}
					}

						$data = array(

							'gambar'   		=> $gambar,
							'nama_barang'   => $nama_barang,
							'deskripsi'		=> $deskripsi,
							'kategori'		=> $kategori,
							'harga'			=> $harga,
							'jumlah_stok'	=> $jumlah_stok

						);
						

					$this->model_etalase->tambah_produk($data, 'etalase');
					redirect('admin/etalase/index');


			}

			public function edit_produk($id){

					$where = array('id_barang' =>$id);
					$data['etalase'] = $this->model_etalase->edit_produk($where, 'etalase')->result();
						$this->load->view('templates_admin/header');
						$this->load->view('templates_admin/sidebar');
						$this->load->view('admin/edit_produk', $data);
						$this->load->view('templates_admin/footer');
			}

			public function update_produk(){

					$id					= $this->input->post('id_barang');
					$gambar 			= $this->input->post('gambar');
					$nama_barang		= $this->input->post('nama_barang');
					$deskripsi			= $this->input->post('deskripsi');
					$kategori 			= $this->input->post('kategori');
					$harga				= $this->input->post('harga');
					$jumlah_stok		= $this->input->post('jumlah_stok');

					$data = array(


								'gambar'		=> $gambar, 
								'nama_barang' 	=> $nama_barang,
								'deskripsi'		=> $deskripsi,
								'kategori'		=> $kategori,
								'harga'			=> $harga,
								'jumlah_stok'	=> $jumlah_stok
					);


					$where = array(

								'id_barang' 	=> $id
					);

					$this->model_etalase->update_produk($where, $data, 'etalase');
					redirect('admin/etalase/index');
			}


		}


