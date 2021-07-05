<?php

include "app/Koneksi.php";

class Mahasiswa extends koneksi {

	public function __construct() {
		parent::__construct();
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tbl_mahasiswa JOIN tbl_prodi ON tbl_mahasiswa.kode_prodi = tbl_prodi.kode_prodi";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

}