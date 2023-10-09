<?php

namespace App\Controllers;

use App\Models\AgamaModel;
use App\Models\DesaModel;
use App\Models\DocumentModel;
use App\Models\PendudukModel;
use App\Models\GolonganDarahModel;
use App\Models\KabupatenModel;
use App\Models\KecamatanModel;
use App\Models\ProvinsiModel;
use App\Models\UkuranBajuModel;
use App\Models\UserModel;
use Config\Services;

class Penduduk extends BaseController
{
    public function index()
    {
        $penduduk_model = new PendudukModel();
        $all_data_penduduk = $penduduk_model->findAll();

        $agama_model = new AgamaModel(); //nambah ini
        $golonganDarah_model = new GolonganDarahModel();
        $ukuranBaju_model = new UkuranBajuModel();
        $document_model = new DocumentModel();
        $provinsi_model = new ProvinsiModel();
        $kabupaten_model = new KabupatenModel();
        $kecamatan_model = new KecamatanModel();
        $desa_model = new DesaModel();
        $user_model = new UserModel();

        $data = [
            'title' => 'Penduduk List',
            'all_data_penduduk' => $all_data_penduduk,
            'dataAgama' => $agama_model->findAll(), //nambah ini
            'dataGolonganDarah' => $golonganDarah_model->findAll(),
            'dataUkuranBaju' => $ukuranBaju_model->findAll(),
            'dataDocument' => $document_model->findAll(),
            'dataProvinsi' => $provinsi_model->findAll(),
            'dataKabupaten' => $kabupaten_model->findAll(),
            'dataKecamatan' => $kecamatan_model->findAll(),
            'dataDesa' => $desa_model->findAll(),
            'dataUserModel' => $user_model->findAll(),
            'provinsi' => $provinsi_model->findAll(),
        ];

        return view('penduduk', $data);
    }


    public function getKabupaten()
    {
        $id_provinsi = $this->request->getVar('id_provinsi');
        $kabupatenModel = new KabupatenModel();
        $kabupaten = $kabupatenModel->getKabupatenByProvinsi($id_provinsi);

        return $this->response->setJSON($kabupaten);
    }

    public function getKecamatan()
    {
        $id_kabupaten = $this->request->getVar('id_kabupaten');

        $kecamatanModel = new KecamatanModel();
        $kecamatan = $kecamatanModel->getKecamatanByKabupaten($id_kabupaten);

        return $this->response->setJSON($kecamatan);
    }

    public function getDesa()
    {
        $id_kecamatan = $this->request->getVar('id_kecamatan');

        $desaModel = new DesaModel();
        $desa = $desaModel->getDesaByKecamatan($id_kecamatan);

        return $this->response->setJSON($desa);
    }

    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new PendudukModel($request);

        if ($request->getMethod(true) === 'POST') {
            $where = [];
            $agama = $request->getPost('id_agama'); //nambah ini
            if ($agama != null && $agama != '') {
                $where['id_agama'] = $agama;
            }
            $golonganDarah = $request->getPost('id_golonganDarah');
            if ($golonganDarah != null && $golonganDarah != '') {
                $where['id_golonganDarah'] = $golonganDarah;
            }
            $ukuranBaju = $request->getPost('id_ukuranBaju');
            if ($ukuranBaju != null && $ukuranBaju != '') {
                $where['id_ukuranBaju'] = $ukuranBaju;
            }
            $document = $request->getPost('id_document'); //nambah ini
            if ($document != null && $document != '') {
                $where['id_document'] = $document;
            }
            $provinsi = $request->getPost('id_provinsi'); //nambah ini
            if ($provinsi != null && $provinsi != '') {
                $where['id_provinsi'] = $provinsi;
            }
            $kabupaten = $request->getPost('id_kabupaten'); //nambah ini
            if ($kabupaten != null && $kabupaten != '') {
                $where['id_kabupaten'] = $kabupaten;
            }
            $kecamatan = $request->getPost('id_kecamatan'); //nambah ini
            if ($kecamatan != null && $kecamatan != '') {
                $where['id_kecamatan'] = $kecamatan;
            }
            $desa = $request->getPost('id_desa'); //nambah ini
            if ($desa != null && $desa != '') {
                $where['id_desa'] = $desa;
            }
            $start_tempat_tanggal_lahir = $request->getPost('start_tempat_tanggal_lahir');
            $end_tempat_tanggal_lahir = $request->getPost('end_tempat_tanggal_lahir');
            if ($start_tempat_tanggal_lahir != null && $end_tempat_tanggal_lahir != null) {
                $where["tempat_tanggal_lahir >="] = $start_tempat_tanggal_lahir;
                $where["tempat_tanggal_lahir <="] = $end_tempat_tanggal_lahir;
            }

            $lists = $datatable->getDatatables($where);
            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered($where),
                'data' => $lists
            ];

            echo json_encode($output);
        }
    }

    public function add_data_penduduk()
    {
        $agama_model = new AgamaModel();
        $all_data_agama = $agama_model->findAll();

        $golonganDarah_model = new GolonganDarahModel();
        $all_data_golonganDarah = $golonganDarah_model->findAll();

        $ukuranBaju_model = new UkuranBajuModel();
        $all_data_ukuranBaju = $ukuranBaju_model->findAll();

        $document_model = new DocumentModel();
        $all_data_document = $document_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $desa_model = new DesaModel();
        $all_data_desa = $desa_model->findAll();

        return view('add_data_penduduk', ["all_data_agama" => $all_data_agama, "all_data_golonganDarah" => $all_data_golonganDarah, "all_data_ukuranBaju" => $all_data_ukuranBaju, "all_data_document" => $all_data_document, "all_data_provinsi" => $all_data_provinsi, "all_data_kabupaten" => $all_data_kabupaten, "all_data_kecamatan" => $all_data_kecamatan, "all_data_desa" => $all_data_desa]);
    }

    public function proses_add_penduduk()
    {
        $isValid = $this->validate([
            //'foto' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'berat_badan' => 'required',
            'makanan_favorit' => 'required',
            'id_agama' => 'required',
            'id_golonganDarah' => 'required',
            'id_ukuranBaju' => 'required',
            'id_document' => 'required',
            'id_desa' => 'required',
            'password' => 'required',
        ]);

        if (!$isValid) {
            return $this->response->setStatusCode(400)->setJSON([
                'status' => 400,
                'message' => "Data Tidak Valid",
                'data' => $this->validator->getErrors()
            ], 400);
        }


        $penduduk_model = new PendudukModel();
        $data = [
            "foto" => $this->request->getPost("foto"),
            "nik" => $this->request->getPost("nik"),
            "nama_lengkap" => $this->request->getPost("nama_lengkap"),
            "nama_panggilan" => $this->request->getPost("nama_panggilan"),
            "tempat_tanggal_lahir" => $this->request->getPost("tempat_tanggal_lahir"),
            "nama_ibu" => $this->request->getPost("nama_ibu"),
            "berat_badan" => $this->request->getPost("berat_badan"),
            "makanan_favorit" => $this->request->getPost("makanan_favorit"),
            "id_agama" => $this->request->getPost("id_agama"),
            "id_golonganDarah" => $this->request->getPost("id_golonganDarah"),
            "id_ukuranBaju" => $this->request->getPost("id_ukuranBaju"),
            "id_document" => $this->request->getPost("id_document"),
            // "id_provinsi" => $this->request->getPost("id_provinsi"),
            // "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            // "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_desa" => $this->request->getPost("id_desa"),
            "password" => $this->request->getPost("password"),
        ];

        $foto = $this->request->getFile('foto');
        if ($foto) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads', $newName);
                $data['foto'] = $newName;
            } else {
                return response()->setJSON([
                    'status' => 400,
                    'message' => 'Gagal mengunggah foto.'
                ], 400);
            }
        } else {
            $data['foto'] = '';
        }

        $penduduk_model->insert($data);
        return response()->setJSON([
            'status' => 200,
            'message' => 'Data berhasil disimpan nih!'
        ], 200);
    }


    public function edit_data_penduduk($id)
    {
        // $penduduk_model = new PendudukModel();
        // $data_penduduk = $penduduk_model->find($id);

        $penduduk_model = new PendudukModel();
        $data_penduduk = $penduduk_model->getView($id);

        $agama_model = new AgamaModel();
        $all_data_agama = $agama_model->findAll();

        $golonganDarah_model = new GolonganDarahModel();
        $all_data_golonganDarah = $golonganDarah_model->findAll();

        $ukuranBaju_model = new UkuranBajuModel();
        $all_data_ukuranBaju = $ukuranBaju_model->findAll();

        $document_model = new DocumentModel();
        $all_data_document = $document_model->findAll();

        $provinsi_model = new ProvinsiModel();
        $all_data_provinsi = $provinsi_model->findAll();

        $kabupaten_model = new KabupatenModel();
        $all_data_kabupaten = $kabupaten_model->findAll();

        $kecamatan_model = new KecamatanModel();
        $all_data_kecamatan = $kecamatan_model->findAll();

        $desa_model = new DesaModel();
        $all_data_desa = $desa_model->findAll();

        return view('edit_data_penduduk', ['data_penduduk' => $data_penduduk, "all_data_agama" => $all_data_agama, "all_data_golonganDarah" => $all_data_golonganDarah, "all_data_ukuranBaju" => $all_data_ukuranBaju, "all_data_document" => $all_data_document, "all_data_provinsi" => $all_data_provinsi, "all_data_kabupaten" => $all_data_kabupaten, "all_data_kecamatan" => $all_data_kecamatan, "all_data_desa" => $all_data_desa]);
        // echo '<pre>';
        // var_dump($data_penduduk);
    }

    public function proses_edit_penduduk()
    {
        $penduduk_model = new PendudukModel();
        $id_warga = $this->request->getPost('id_warga');
        $data_penduduk = $penduduk_model->find($id_warga);

        if (!$data_penduduk) {
            return $this->response->setStatusCode(404)->setJSON([
                'status' => 404,
                'message' => "Data tidak ditemukan"
            ], 404);
        }

        $isValid = $this->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'berat_badan' => 'required',
            'makanan_favorit' => 'required',
            'id_agama' => 'required',
            'id_golonganDarah' => 'required',
            'id_ukuranBaju' => 'required',
            'id_document' => 'required',
            'id_desa' => 'required',
            'password' => 'required',
        ]);

        if (!$isValid) {
            return $this->response->setStatusCode(400)->setJSON([
                'status' => 400,
                'message' => "Data Tidak Valid",
                'data' => $this->validator->getErrors()
            ], 400);
        }

        $penduduk_model = new PendudukModel();
        $data = [
            "nik" => $this->request->getPost("nik"),
            "nama_lengkap" => $this->request->getPost("nama_lengkap"),
            "nama_panggilan" => $this->request->getPost("nama_panggilan"),
            "tempat_tanggal_lahir" => $this->request->getPost("tempat_tanggal_lahir"),
            "nama_ibu" => $this->request->getPost("nama_ibu"),
            "berat_badan" => $this->request->getPost("berat_badan"),
            "makanan_favorit" => $this->request->getPost("makanan_favorit"),
            "id_agama" => $this->request->getPost("id_agama"),
            "id_golonganDarah" => $this->request->getPost("id_golonganDarah"),
            "id_ukuranBaju" => $this->request->getPost("id_ukuranBaju"),
            "id_document" => $this->request->getPost("id_document"),
            "id_provinsi" => $this->request->getPost("id_provinsi"),
            "id_kabupaten" => $this->request->getPost("id_kabupaten"),
            "id_kecamatan" => $this->request->getPost("id_kecamatan"),
            "id_desa" => $this->request->getPost("id_desa"),
            "password" => $this->request->getPost("password"),
        ];
        //$penduduk_model->where('id_warga', $id_warga)->update($data);

        $fotoFile = $this->request->getFile('foto');
        if ($fotoFile->isValid() && !$fotoFile->hasMoved()) {
            $newName = $fotoFile->getRandomName();
            $fotoFile->move('path/to/upload/directory', $newName);
            $data['foto'] = $newName;
        }

        //return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil disimpan!']);

        $penduduk_model->update($id_warga, $data);

        return response()->setJSON([
            'status' => 200,
            'message' => 'Data berhasil disimpan nih!'
        ], 200);
    }

    // public function proses_edit_penduduk()
    // {
    //     $penduduk_model = new PendudukModel();
    //     $id_warga = $this->request->getPost('id_warga');
    //     $data_penduduk = $penduduk_model->find($id_warga);

    //     if (!$data_penduduk) {
    //         return $this->response->setStatusCode(404)->setJSON([
    //             'status' => 404,
    //             'message' => "Data tidak ditemukan"
    //         ], 404);
    //     }

    //     // Jika data penduduk ditemukan, dan jika $data_penduduk berisi array, Anda dapat melakukan perulangan untuk mengakses data tiap barisnya.
    //     foreach ($data_penduduk as $row) {
    //         $nik = $row['nik'];
    //         $nama_lengkap = $row['nama_lengkap'];
    //         $nama_panggilan = $row['nama_panggilan'];
    //         $tempat_tanggal_lahir = $row['tempat_tanggal_lahir'];
    //         $nama_ibu = $row['nama_ibu'];
    //         $berat_badan = $row['berat_badan'];
    //         $makanan_favorit = $row['makanan_favorit'];
    //         $id_agama = $row['id_agama'];
    //         $id_golonganDarah = $row['id_golonganDarah'];
    //         $id_ukuranBaju = $row['id_ukuranBaju'];
    //         $id_document = $row['id_document'];
    //         $id_provinsi = $row['id_provinsi'];
    //         $id_kabupaten = $row['id_kabupaten'];
    //         $id_kecamatan = $row['id_kecamatan'];
    //         $id_desa = $row['id_desa'];
    //         $password = $row['password'];
    //         $foto = $row['foto'];

    //         // ... (proses data lainnya)

    //         // Misalnya, untuk meng-update data penduduk dengan nilai yang baru, Anda dapat melakukannya seperti berikut:
    //         $data = [
    //             "nik" => $nik,
    //             "nama_lengkap" => $nama_lengkap,
    //             "nama_panggilan" => $nama_panggilan,
    //             "tempat_tanggal_lahir" => $tempat_tanggal_lahir,
    //             "nama_ibu" => $nama_ibu,
    //             "berat_badan" => $berat_badan,
    //             "makanan_favorit" => $makanan_favorit,
    //             "id_agama" => $id_agama,
    //             "id_golonganDarah" => $id_golonganDarah,
    //             "id_ukuranBaju" => $id_ukuranBaju,
    //             "id_document" => $id_document,
    //             "id_provinsi" => $id_provinsi,
    //             "id_kabupaten" => $id_kabupaten,
    //             "id_kecamatan" => $id_kecamatan,
    //             "id_desa" => $id_desa,
    //             "password" => $password,
    //             "foto" => $foto
    //         ];


    //         // Update data di database menggunakan model
    //         $penduduk_model->update($id_warga, $data);
    //     }

    //     return response()->setJSON([
    //         'status' => 200,
    //         'message' => 'Data berhasil diubah!'
    //     ], 200);
    // }

    public function delete_data_penduduk($id = false)
    {
        $penduduk_model = new PendudukModel();
        $penduduk_model->delete($id);
        return redirect()->to(base_url('penduduk'));
    }

    public function detail_data_penduduk($id)
    {
        $penduduk_model = new PendudukModel();


        $data_penduduk = $penduduk_model->getView($id);

        // Mengambil data penduduk berdasarkan ID
        //$penduduk_model = $penduduk_model->find($id);

        // Kirim data penduduk ke view
        return view('detail_data_penduduk', ['penduduk' => $data_penduduk]);
    }
}
