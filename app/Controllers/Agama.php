<?php

namespace App\Controllers;

use App\Models\AgamaModel;

class Agama extends BaseController
{
    public function index()
    {
        $agama_model = new AgamaModel();

        $stringAgama = $this->request->getVar('agama');
        $all_data_agama = [];
        if ($stringAgama == "") {
            $all_data_agama = $agama_model->findAll(); //tanpa filter
        } else {
            $all_data_agama = $agama_model->where("agama", $stringAgama)->findAll(); // pake filter
        }


        $data = [
            'title' => 'Agama List',
            'all_data_agama' => $all_data_agama,
            'dataAgama' => $agama_model->findAll()
        ];

        return view('MasterDataAgama/agama', $data);

        // echo view('data_view', $all_data_agama);
    }

    public function add_data_agama()
    {
        return view('MasterDataAgama/add_data_agama');
    }


    public function proses_add_agama()
    {

        $agama_model = new AgamaModel();
        $data = [
            "agama" => $this->request->getPost("agama"),
        ];
        $agama_model->insert($data);
        return redirect()->to('agama');
    }

    public function edit_data_agama($id = false)
    {
        $agama_model = new AgamaModel();
        $data_agama = $agama_model->find($id);
        return view('MasterDataAgama/edit_data_agama', ['data_agama' => $data_agama]);
    }

    public function proses_edit_agama()
    {
        $agama_model = new AgamaModel();
        $data = [
            "agama" => $this->request->getPost("agama"),
        ];
        $agama_model->update($this->request->getPost('agama'), $this->request->getPost());
        return redirect()->to('agama');
    }

    public function delete_data_agama($id = false)
    {
        $agama_model = new AgamaModel();
        $agama_model->delete($id);
        return redirect()->to(base_url('agama'));
    }
}
