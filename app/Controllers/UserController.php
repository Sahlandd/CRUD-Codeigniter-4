<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PendudukModel;

class UserController extends Controller
{
    public function showUploadForm()
    {
        return view('add_data_penduduk');
    }

    public function saveImage()
    {
        // var_dump($this->request->getPost());
        // var_dump($this->request->getFiles());
        // die;

        // Validasi input file
        $validation = \Config\Services::validation();
        $validation->setRules([
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil file gambar yang diupload dari form
        $image = $this->request->getFile('image');

        // Pindahkan file gambar ke folder tujuan
        // $image->move(WRITEPATH . 'uploads');
        $newName = $image->getRandomName();
        $image->move('./uploads', $newName);

        $penduduk_model = new PendudukModel();
        $data = [
            "foto" => $newName,
            "nik" => $this->request->getPost("nik"),
            "nama_lengkap" => $this->request->getPost("nama_lengkap"),
            "nama_panggilan" => $this->request->getPost("nama_panggilan"),
            "tempat_tanggal_lahir" => $this->request->getPost("tempat_tanggal_lahir"),
            "nama_ibu" => $this->request->getPost("nama_ibu"),
            "berat_badan" => $this->request->getPost("berat_badan"),
            "makanan_favorit" => $this->request->getPost("makanan_favorit"),
            "id_agama" => $this->request->getPost("id_agama"),
            "id_golonganDarah" => $this->request->getPost("id_golonganDarah"),
            "id_ukuranBaju" => $this->request->getPost("id_ukuranBaju"),
            "id_document" => $this->request->getPost("id_document"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_desa" => $this->request->getPost("id_desa"),
            "password" => $this->request->getPost("password"),

        ];
        //return d($data);
        $penduduk_model->insert($data);


        // Lakukan sesuatu dengan file gambar yang diunggah

        return redirect()->to('/penduduk')->with('success', 'Gambar berhasil diunggah.');
    }
}
