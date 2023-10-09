<?php

namespace App\Controllers;

use App\Models\DesaModel;
use App\Models\KabupatenModel;
use App\Models\KecamatanModel;
use App\Models\ProvinsiModel;

class Desa extends BaseController
{
    public function index()
    {
        $desa_model = new DesaModel();

        $stringDesa = $this->request->getVar('desa');
        $all_data_desa = [];
        if ($stringDesa == "") {
            $all_data_desa = $desa_model->getAll(); //tanpa filter
        } else {
            $all_data_desa = $desa_model->getAll(["desa" => $stringDesa]); // pake filter
        }

        $provinsi_model = new ProvinsiModel();
        $kabupaten_model = new KabupatenModel();
        $kecamatan_model = new KecamatanModel();
        $desa_model = new DesaModel();

        $data = [
            'title' => 'Desa List',
            'all_data_desa' => $all_data_desa,
            // 'all_data_desa' => $data_desa,
            'dataDesa' => $desa_model->findAll(),
            'dataProvinsi' => $provinsi_model->findAll(),
            'dataKabupaten' => $kabupaten_model->findAll(),
            'dataKecamatan' => $kecamatan_model->findAll(),
            'dataDesa' => $desa_model->findAll(),
        ];

        return view('MasterDataDesa/desa', $data);
    }

    public function getKabupaten()
    {
        $id_provinsi = $this->request->getPost('id_provinsi');
        $kabupatenModel = new KabupatenModel();
        $data = $kabupatenModel->where('id_provinsi', $id_provinsi)->findAll();
        return $this->response->setJSON($data);
    }

    public function getKecamatan()
    {
        $id_kabupaten = $this->request->getPost('id_kabupaten');
        $kecamatanModel = new KecamatanModel();
        $data = $kecamatanModel->where('id_kabupaten', $id_kabupaten)->findAll();
        return $this->response->setJSON($data);
    }

    public function add_data_desa()
    {
        $desa_model = new DesaModel();
        $all_data_desa = $desa_model->findAll();

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        return view('MasterDataDesa/add_data_desa', ["all_data_desa" => $all_data_desa, "all_data_kecamatan" => $all_data_kecamatan, "all_data_kabupaten" => $all_data_kabupaten, "all_data_provinsi" => $all_data_provinsi]);
    }

    public function proses_add_desa()
    {
        $desa_model = new DesaModel();
        $data = [
            "desa" => $this->request->getPost("desa"),
            "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
        ];
        $desa_model->insert($data);

        return redirect()->to('desa');
    }

    public function edit_data_desa($id = false)
    {
        $desa_model = new DesaModel();
        $data_desa = $desa_model->find($id);

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        return view('MasterDataDesa/edit_data_desa', ['data_desa' => $data_desa, "all_data_kecamatan" => $all_data_kecamatan, "all_data_kabupaten" => $all_data_kabupaten, "all_data_provinsi" => $all_data_provinsi]);
    }

    public function proses_edit_desa()
    {
        $desa_model = new DesaModel();
        $data = [
            "desa" => $this->request->getPost("desa"),
            "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
        ];
        $desa_model->update($this->request->getPost('desa'), $this->request->getPost());

        return redirect()->to('desa');
    }

    public function delete_data_desa($id = false)
    {
        $desa_model = new DesaModel();
        $desa_model->delete($id);

        return redirect()->to(base_url('desa'));
    }
}
