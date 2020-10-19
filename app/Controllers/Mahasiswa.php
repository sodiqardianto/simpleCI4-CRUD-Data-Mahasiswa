<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends Controller
{
    public function index()
    {
        $mhs = new Modelmahasiswa();
        $data = [
            'tampilData' => $mhs->tampilData()->getResult()
        ];

        echo view('tampilMahasiswa', $data);
    }

    public function formTambah()
    {
        helper('form');
        echo view('formTambah');
    }

    public function simpanData()
    {
        $data = [
            'mhs_nim' => $this->request->getPost('nim'),
            'mhs_nama' => $this->request->getPost('nama'),
            'mhs_jenisKelamin' => $this->request->getPost('jenisKelamin'),
            'mhs_tempatLahir' => $this->request->getPost('tempat'),
            'mhs_tanggalLahir' => $this->request->getPost('tanggal'),
            'mhs_alamat' => $this->request->getPost('alamat'),
            'mhs_telepon' => $this->request->getPost('telp')
        ];

        $mhs = new Modelmahasiswa();
        $simpan = $mhs->simpan($data);

        if ($simpan) {
            return redirect()->to('/mahasiswa/index');
        }
    }

    public function hapus()
    {
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();

        $mhs->hapusData($nim);
        return redirect()->to('/mahasiswa/index');
    }

    public function formEdit()
    {
        helper('form');
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();

        $ambilData = $mhs->ambilData($nim);

        if (count($ambilData->getResult()) > 0) {
            $row = $ambilData->getRow();
            $data = [
                'nim' => $nim,
                'nama' => $row->mhs_nama,
                'jenisKelamin' => $row->mhs_jenisKelamin,
                'tempat' => $row->mhs_tempatLahir,
                'tanggal' => $row->mhs_tanggalLahir,
                'alamat' => $row->mhs_alamat,
                'telp' => $row->mhs_telepon
            ];

            echo view('formEdit', $data);
        }
    }

    public function updateData()
    {
        $nim = $this->request->getPost('nim');
        $data = [
            'mhs_nama' => $this->request->getPost('nama'),
            'mhs_jenisKelamin' => $this->request->getPost('jenisKelamin'),
            'mhs_tempatLahir' => $this->request->getPost('tempat'),
            'mhs_tanggalLahir' => $this->request->getPost('tanggal'),
            'mhs_alamat' => $this->request->getPost('alamat'),
            'mhs_telepon' => $this->request->getPost('telp')
        ];

        $mhs = new Modelmahasiswa();
        $update = $mhs->editData($data, $nim);

        if ($update) {
            return redirect()->to('/mahasiswa/index');
        }
    }
}
