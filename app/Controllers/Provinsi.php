<?php

namespace App\Controllers;

use App\Models\ProvinsiModel;

class Provinsi extends BaseController
{
    public function index()
    {
        $provinsi_model = new ProvinsiModel();

        $stringProvinsi = $this->request->getVar('provinsi');
        $all_data_provinsi = [];
        if ($stringProvinsi == "") {
            $all_data_provinsi = $provinsi_model->findAll(); //tanpa filter
        } else {
            $all_data_provinsi = $provinsi_model->where("provinsi", $stringProvinsi)->findAll(); // pake filter
        }


        $data = [
            'title' => 'Provinsi List',
            'all_data_provinsi' => $all_data_provinsi,
            'dataProvinsi' => $provinsi_model->findAll()
        ];

        return view('MasterDataProvinsi/provinsi', $data);

        // echo view('data_view', $all_data_agama);
    }

    public function add_data_provinsi()
    {
        return view('MasterDataProvinsi/add_data_provinsi');
    }


    public function proses_add_provinsi()
    {

        $provinsi_model = new ProvinsiModel();
        $data = [
            "provinsi" => $this->request->getPost("provinsi"),
        ];
        $provinsi_model->insert($data);
        return redirect()->to('provinsi');
    }

    public function edit_data_provinsi($id = false)
    {
        $provinsi_model = new ProvinsiModel();
        $data_provinsi = $provinsi_model->find($id);
        return view('MasterDataProvinsi/edit_data_provinsi', ['data_provinsi' => $data_provinsi]);
    }

    public function proses_edit_provinsi()
    {
        $provinsi_model = new ProvinsiModel();
        $data = [
            "provinsi" => $this->request->getPost("provinsi"),
        ];
        $provinsi_model->update($this->request->getPost('provinsi'), $this->request->getPost());
        return redirect()->to('provinsi');
    }

    public function delete_data_provinsi($id = false)
    {
        $provinsi_model = new ProvinsiModel();
        $provinsi_model->delete($id);
        return redirect()->to(base_url('provinsi'));
    }
}
