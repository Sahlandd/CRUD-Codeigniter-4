<?php

namespace App\Controllers;

use App\Models\UkuranBajuModel;

class UkuranBaju extends BaseController
{
    public function index()
    {
        $ukuranBaju_model = new UkuranBajuModel();

        $stringUkuranBaju = $this->request->getVar('ukuranBaju');
        $all_data_ukuranBaju = [];
        if ($stringUkuranBaju == "") {
            $all_data_ukuranBaju = $ukuranBaju_model->findAll(); //tanpa filter
        } else {
            $all_data_ukuranBaju = $ukuranBaju_model->where("ukuranBaju", $stringUkuranBaju)->findAll(); //filter
        }


        $data = [
            'title' => 'UkuranBaju List',
            'all_data_ukuranBaju' => $all_data_ukuranBaju,
            'dataUkuranBaju' => $ukuranBaju_model->findAll()
        ];

        return view('MasterDataUkuranBaju/ukuranBaju', $data);
    }

    public function add_data_ukuran_baju()
    {
        return view('MasterDataUkuranBaju/add_data_ukuran_baju');
    }

    public function proses_add_ukuran_baju()
    {
        $ukuranBaju_model = new UkuranBajuModel();
        $data = [
            "ukuranBaju" => $this->request->getPost("ukuranBaju"),
        ];
        $ukuranBaju_model->insert($data);
        return redirect()->to('ukuranBaju');
    }

    public function edit_data_ukuran_baju($id = false)
    {
        $ukuranBaju_model = new UkuranBajuModel();
        $data_ukuranBaju = $ukuranBaju_model->find($id);
        return view('MasterDataUkuranBaju/edit_data_ukuran_baju', ['data_ukuranBaju' => $data_ukuranBaju]);
    }

    public function proses_edit_ukuran_baju()
    {
        $ukuranBaju_model = new UkuranBajuModel();
        $data = [
            "ukuranBaju" => $this->request->getPost("ukuranBaju"),
        ];
        $ukuranBaju_model->update($this->request->getPost('ukuranBaju'), $this->request->getPost());
        return redirect()->to('ukuranBaju');
    }

    public function delete_data_ukuran_baju($id = false)
    {
        $ukuranBaju_model = new UkuranBajuModel();
        $ukuranBaju_model->delete($id);
        return redirect()->to(base_url('ukuranBaju'));
    }
}
