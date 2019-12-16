<?php


		class model_etalase extends CI_Model{

			public function tampil_barang(){


				return $this->db->get('etalase');

		}

			public function tambah_produk($data, $table){


				$this->db->insert($table,$data);
		}

			public function edit_produk($where, $table){


				return $this->db->get_where($table,$where);
		}

			public function update_produk($where, $data, $table){

				$this->db->where($where);
				$this->db->update($table, $data);
		}

			public function hapus_produk($where, $table){

				$this->db->where($where);
				$this->db->delete($table);
		}

			public function cari_id($id){

				$result = $this->db->where('id_barang', $id)
								   ->limit(1)
								   ->get('etalase');


				if ($result->num_rows() > 0) {
					
						return $result->row();

					}else{

						return array();

					}
			}


		}