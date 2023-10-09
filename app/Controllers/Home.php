<?php

namespace App\Controllers;

use App\Models\HomeModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    private $HomeModel;

    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }

    public function index()
    {
        $data = array(
            'isi' =>  'Home/home',
            'tot_penduduk' => $this->HomeModel->tot_penduduk(),
            'tot_provinsi' => $this->HomeModel->tot_provinsi(),
            'tot_kabupaten' => $this->HomeModel->tot_kabupaten(),
            'tot_kecamatan' => $this->HomeModel->tot_kecamatan(),
            'tot_desa' => $this->HomeModel->tot_desa(),
        );

        return view('Home/home', $data);
    }

    public function showChartAgama()
    {
        $homeModel = new HomeModel();
        $data_agama = $homeModel->getAgama();

        $response = [
            'status' => true,
            'data' => $data_agama
        ];
        // return $this->response->setJSON($response);
        echo json_encode($response);
    }


    public function showChartLahir()
    {
        // $tahun = date('Y');
        $tahun = $this->request->getVar('tahun');
        $data_lahir = $this->HomeModel->getLahir($tahun);
        // dd($data_lahir);
        $response = [
            'status' => true,
            'data' => $data_lahir
        ];
        echo json_encode($response);
    }
}
