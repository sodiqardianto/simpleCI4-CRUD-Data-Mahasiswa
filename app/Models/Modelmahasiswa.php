<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampilData()
    {
        return $this->db->table('mahasiswa')->get();
    }

    public function simpan($data)
    {
        return $this->db->table('mahasiswa')->insert($data);
    }

    public function hapusData($nim)
    {
        return $this->db->table('mahasiswa')->delete(['mhs_nim' => $nim]);
    }

    public function ambilData($nim)
    {
        return $this->db->table('mahasiswa')->getWhere(['mhs_nim' => $nim]);
    }

    public function editData($data, $nim)
    {
        return $this->db->table('mahasiswa')->update($data, ['mhs_nim' => $nim]);
    }
}
