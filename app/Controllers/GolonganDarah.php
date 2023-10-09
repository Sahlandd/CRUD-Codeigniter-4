<?php

namespace App\Controllers;

use App\Models\GolonganDarahModel;

class GolonganDarah extends BaseController
{
    public function index()
    {
        $golonganDarah_model = new GolonganDarahModel();

        $stringGolonganDarah = $this->request->getVar('golonganDarah');
        $all_data_golonganDarah = [];
        if ($stringGolonganDarah == "") {
            $all_data_golonganDarah = $golonganDarah_model->findAll(); //tanpa filter
        } else {
            $all_data_golonganDarah = $golonganDarah_model->where("golonganDarah", $stringGolonganDarah)->findAll(); //filter
        }


        $data = [
            'title' => 'Golongan Darah List',
            'all_data_golonganDarah' => $all_data_golonganDarah,
            'dataGolonganDarah' => $golonganDarah_model->findAll()
        ];

        return view('MasterDataGolonganDarah/golonganDarah', $data);

        // $all_data_golonganDarah = $golonganDarah_model->findAll();
        // return view('golonganDarah', ['all_data_golonganDarah' => $all_data_golonganDarah]);

        // echo view('data_view', $all_data_golonganDarah);
    }

    public function add_data_golongan_darah()
    {
        return view('MasterDataGolonganDarah/add_data_golongan_darah');
    }

    public function proses_add_golongan_darah()
    {
        $golonganDarah_model = new GolonganDarahModel();
        $data = [
            "golonganDarah" => $this->request->getPost("golonganDarah"),
        ];
        $golonganDarah_model->insert($data);
        return redirect()->to('golonganDarah');
    }

    public function edit_data_golongan_darah($id = false)
    {
        $golonganDarah_model = new GolonganDarahModel();
        $data_golonganDarah = $golonganDarah_model->find($id);
        return view('MasterDataGolonganDarah/edit_data_golongan_darah', ['data_golonganDarah' => $data_golonganDarah]);
    }

    public function proses_edit_golongan_darah()
    {
        $golonganDarah_model = new GolonganDarahModel();
        $data = [
            "golonganDarah" => $this->request->getPost("golonganDarah"),
        ];
        $golonganDarah_model->update($this->request->getPost('golonganDarah'), $this->request->getPost());
        return redirect()->to('golonganDarah');
    }

    public function delete_data_golongan_darah($id = false)
    {
        $golonganDarah_model = new GolonganDarahModel();
        $golonganDarah_model->delete($id);
        return redirect()->to(base_url('golonganDarah'));
    }
}
