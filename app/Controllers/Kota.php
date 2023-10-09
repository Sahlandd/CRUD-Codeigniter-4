<?php

namespace App\Controllers;

use App\Models\KotaModel;

class Kota extends BaseController
{
    public function index()
    {
        $kota_model = new KotaModel();

        $stringKota = $this->request->getVar('kota');
        $all_data_kota = [];
        if ($stringKota == "") {
            $all_data_kota = $kota_model->findAll(); //tanpa filter
        } else {
            $all_data_kota = $kota_model->where("kota", $stringKota)->findAll(); // pake filter
        }


        $data = [
            'title' => 'Kota List',
            'all_data_kota' => $all_data_kota,
            'dataKota' => $kota_model->findAll()
        ];

        return view('MasterDataKota/kota', $data);
    }

    public function add_data_kota()
    {
        return view('MasterDataKota/add_data_kota');
    }


    public function proses_add_kota()
    {

        $kota_model = new KotaModel();
        $data = [
            "kota" => $this->request->getPost("kota"),
        ];
        $kota_model->insert($data);
        return redirect()->to('kota');
    }

    public function edit_data_kota($id = false)
    {
        $kota_model = new KotaModel();
        $data_kota = $kota_model->find($id);
        return view('MasterDataKota/edit_data_kota', ['data_kota' => $data_kota]);
    }

    public function proses_edit_kota()
    {
        $kota_model = new KotaModel();
        $data = [
            "kota" => $this->request->getPost("kota"),
        ];
        $kota_model->update($this->request->getPost('kota'), $this->request->getPost());
        return redirect()->to('kota');
    }

    public function delete_data_kota($id = false)
    {
        $kota_model = new KotaModel();
        $kota_model->delete($id);
        return redirect()->to(base_url('kota'));
    }
}
