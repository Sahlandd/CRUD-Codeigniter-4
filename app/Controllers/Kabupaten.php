<?php

namespace App\Controllers;

use App\Models\KabupatenModel;
use App\Models\ProvinsiModel;

class Kabupaten extends BaseController
{
    public function index()
    {
        $kabupaten_model = new KabupatenModel();
        // $data_kabupaten = $kabupaten_model->getDataWithNames();

        $provinsi_model = new ProvinsiModel();

        $stringKabupaten = $this->request->getVar('kabupaten');
        $all_data_kabupaten = [];
        if ($stringKabupaten == "") {
            $all_data_kabupaten = $kabupaten_model->getAll(); //tanpa filter
        } else {
            //$all_data_kabupaten = $kabupaten_model->where("kabupaten", $stringKabupaten)->findAll(); // pake filter
            $all_data_kabupaten = $kabupaten_model->getAll(["kabupaten" => $stringKabupaten]); // pake filter
        }

        $data = [
            'title' => 'Kabupaten List',
            'all_data_kabupaten' => $all_data_kabupaten,
            // 'all_data_kabupaten' => $data_kabupaten,
            'dataKabupaten' => $kabupaten_model->findAll(),
            'dataProvinsi' => $provinsi_model->findAll(),
        ];

        return view('MasterDataKabupaten/kabupaten', $data);
    }

    public function add_data_kabupaten()
    {
        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        return view('MasterDataKabupaten/add_data_kabupaten', ["all_data_kabupaten" => $all_data_kabupaten, "all_data_provinsi" => $all_data_provinsi]);
    }

    public function proses_add_kabupaten()
    {
        $kabupaten_model = new KabupatenModel();
        $data = [
            "kabupaten" => $this->request->getPost("kabupaten"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
        ];
        $kabupaten_model->insert($data);
        return redirect()->to('kabupaten');
    }

    public function edit_data_kabupaten($id = false)
    {
        $kabupaten_model = new KabupatenModel();
        $data_kabupaten = $kabupaten_model->find($id);

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();
        return view('MasterDataKabupaten/edit_data_kabupaten', ['data_kabupaten' => $data_kabupaten, "all_data_provinsi" => $all_data_provinsi]);
    }

    public function proses_edit_kabupaten()
    {
        $kabupaten_model = new KabupatenModel();
        $data = [
            "kabupaten" => $this->request->getPost("kabupaten"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
        ];
        $kabupaten_model->update($this->request->getPost('kabupaten'), $this->request->getPost());
        return redirect()->to('kabupaten');
    }

    public function delete_data_kabupaten($id = false)
    {
        $kabupaten_model = new KabupatenModel();
        $kabupaten_model->delete($id);
        return redirect()->to(base_url('kabupaten'));
    }
}
