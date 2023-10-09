<?php

namespace App\Controllers;

use App\Models\KecamatanModel;
use App\Models\KabupatenModel;
use App\Models\ProvinsiModel;

class Kecamatan extends BaseController
{
    public function index()
    {
        $kecamatan_model = new KecamatanModel();
        // $data_kecamatan = $kecamatan_model->getDataWithNames();

        $stringKecamatan = $this->request->getVar('kecamatan');
        $all_data_kecamatan = [];
        if ($stringKecamatan == "") {
            $all_data_kecamatan = $kecamatan_model->getAll(); //tanpa filter
        } else {
            //$all_data_kecamatan = $kecamatan_model->where("kecamatan", $stringKecamatan)->findAll(); // pake filter
            $all_data_kecamatan = $kecamatan_model->getAll(["kecamatan" => $stringKecamatan]); // pake filter
        }

        $data = [
            'title' => 'Kecamatan List',
            'all_data_kecamatan' => $all_data_kecamatan,
            // 'all_data_kecamatan' => $data_kecamatan,
            'dataKecamatan' => $kecamatan_model->findAll()
        ];
        return view('MasterDataKecamatan/kecamatan', $data);
    }

    public function getKabupaten()
    {
        $id_provinsi = $this->request->getPost('id_provinsi');
        $kabupatenModel = new KabupatenModel();
        $data = $kabupatenModel->where('id_provinsi', $id_provinsi)->findAll();

        return $this->response->setJSON($data);
    }

    public function add_data_kecamatan()
    {

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        return view('MasterDataKecamatan/add_data_kecamatan', ["all_data_kabupaten" => $all_data_kabupaten, "all_data_kecamatan" => $all_data_kecamatan, "all_data_provinsi" => $all_data_provinsi]);
    }


    public function proses_add_kecamatan()
    {

        $kecamatan_model = new KecamatanModel();
        $data = [
            "kecamatan" => $this->request->getPost("kecamatan"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
        ];
        $kecamatan_model->insert($data);

        return redirect()->to('kecamatan');
    }

    public function edit_data_kecamatan($id = false)
    {
        $kecamatan_model = new KecamatanModel();
        $data_kecamatan = $kecamatan_model->find($id);

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        return view('MasterDataKecamatan/edit_data_kecamatan', ['data_kecamatan' => $data_kecamatan, "all_data_kabupaten" => $all_data_kabupaten, "all_data_provinsi" => $all_data_provinsi]);
    }

    public function proses_edit_kecamatan()
    {
        $kecamatan_model = new KecamatanModel();
        $data = [
            "kecamatan" => $this->request->getPost("kecamatan"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
        ];
        $kecamatan_model->update($this->request->getPost('kecamatan'), $this->request->getPost());

        return redirect()->to('kecamatan');
    }

    public function delete_data_kecamatan($id = false)
    {
        $kecamatan_model = new KecamatanModel();
        $kecamatan_model->delete($id);

        return redirect()->to(base_url('kecamatan'));
    }
}
