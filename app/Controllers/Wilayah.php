<?php

namespace App\Controllers;

use App\Models\DesaModel;
use App\Models\KecamatanModel;
use App\Models\KotaModel;
use App\Models\KabupatenModel;
use App\Models\WilayahModel;

class Wilayah extends BaseController
{
    public function index()
    {
        $wilayah_model = new WilayahModel();

        $stringWilayah = $this->request->getVar('wilayah');
        $all_data_wilayah = [];
        if ($stringWilayah == "") {
            $all_data_wilayah = $wilayah_model->findAll(); //tanpa filter
        } else {
            $all_data_wilayah = $wilayah_model->where("wilayah", $stringWilayah)->findAll(); // pake filter
        }


        $data = [
            'title' => 'Wilayah List',
            'all_data_wilayah' => $all_data_wilayah,
            'dataWilayah' => $wilayah_model->findAll()
        ];

        return view('Wilayah/wilayah', $data);
    }

    public function add_data_wilayah()
    {
        $desa_model = new DesaModel();
        $all_data_desa = $desa_model->findAll();

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $kota_model = new KotaModel();
        $all_data_kota = $kota_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        return view('Wilayah/add_data_wilayah', ["all_data_desa" => $all_data_desa, "all_data_kecamatan" => $all_data_kecamatan, "all_data_kota" => $all_data_kota, "all_data_kabupaten" => $all_data_kabupaten,]);
    }


    public function proses_add_wilayah()
    {
        $wilayah_model = new WilayahModel();
        $data = [
            "id_desa" => $this->request->getPost("id_desa"),
            "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_kota" => $this->request->getPost("id_kota"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
        ];
        $wilayah_model->insert($data);
        return redirect()->to('wilayah');
    }

    public function edit_data_wilayah($id = false)
    {
        $wilayah_model = new WilayahModel();
        $data_wilayah = $wilayah_model->find($id);

        $desa_model = new DesaModel();
        $all_data_desa = $desa_model->findAll();

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $kota_model = new KotaModel();
        $all_data_kota = $kota_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        return view('Wilayah/edit_data_wilayah', ["data_wilayah" => $data_wilayah, "all_data_desa" => $all_data_desa, "all_data_kecamatan" => $all_data_kecamatan, "all_data_kota" => $all_data_kota, "all_data_kabupaten" => $all_data_kabupaten,]);
        //return view('Wilayah/edit_data_wilayah', ['data_wilayah' => $data_wilayah]);
    }

    public function proses_edit_wilayah()
    {
        $wilayah_model = new WilayahModel();
        $data = [
            "id_desa" => $this->request->getPost("id_desa"),
            "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_kota" => $this->request->getPost("id_kota"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
        ];
        $wilayah_model->update($this->request->getPost('id_desa'), $this->request->getPost());
        return redirect()->to('wilayah');
    }

    public function delete_data_wilayah($id = false)
    {
        $wilayah_model = new WilayahModel();
        $wilayah_model->delete($id);
        return redirect()->to(base_url('wilayah'));
    }

    public function detail_data_wilayah($id)
    {
        $wilayah_model = new WilayahModel();

        // Mengambil data penduduk berdasarkan ID
        $wilayah_model = $wilayah_model->find($id);

        // Kirim data penduduk ke view
        return view('Wilayah/detail_data_wilayah', ['wilayah' => $wilayah_model]);
    }
}
