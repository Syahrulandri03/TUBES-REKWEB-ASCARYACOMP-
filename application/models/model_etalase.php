<?php


		class model_etalase extends CI_Model{
			public function tampil_barang(){


				return $this->db->get('etalase');

			}

			public function tambah_produk($data, $table){


				$this->db->insert($table,$data);
			}

		}