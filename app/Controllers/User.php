<?php

namespace App\Controllers;

use App\Models\UserDatatable;
use Config\Services;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User List'
        ];

        return view('index', $data);
    }
    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new UserDatatable($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $list->nik;
                $row[] = $list->nama_lengkap;
                $row[] = $list->nama_panggilan;
                $row[] = $list->tempat_tanggal_lahir;
                $row[] = $list->golongan_darah;
                $row[] = $list->nama_ibu;
                $row[] = $list->berat_badan;
                $row[] = $list->ukuran_baju;
                $row[] = $list->makanan_favorit;
                $row[] = $list->agama;
                $row[] = $list->provinsi;
                $row[] = $list->kabupaten;
                $row[] = $list->kecamatan;
                $row[] = $list->desa;
                $row[] = $list->foto;


                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
}
