<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class PendudukModel extends Model
{
    protected $table = 'tblt_warga';
    protected $viewTable = 'vw_warga';
    protected $allowedFields = ['id_warga', 'nik', 'nama_lengkap', 'nama_panggilan', 'tempat_tanggal_lahir', 'nama_ibu', 'id_golonganDarah', 'berat_badan', 'id_ukuranBaju', 'makanan_favorit', 'id_agama', 'foto', 'id_document', 'id_provinsi', 'id_kabupaten', 'id_kecamatan', 'id_desa', 'password'];
    protected $column_search = ['nama_lengkap', 'nama_panggilan'];
    protected $order = ['id_warga' => 'DESC'];
    protected $request;
    protected $db;
    protected $dt;
    protected $vwdt;
    protected $primaryKey = 'id_warga';
    protected $returnType = 'object';

    public function getView($id)
    {
        $query = $this->builder($this->viewTable);
        $query = $query->where('id_warga', $id);
        $result = $query->get()->getRow();
        return $result;
    }

    public function getTable($id_warga)
    {
        $query = $this->builder($this->table);
        $query = $query->where('id_warga', $id_warga);
        $result = $query->get()->getRow();
        return $result;
    }


    public function __construct(RequestInterface $request = null)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);
        $this->vwdt = $this->db->table($this->viewTable);
    }

    private function getDatatablesQuery()
    {
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($this->request->getPost('search')['value']) {
                if ($i === 0) {
                    $this->vwdt->groupStart();
                    $this->vwdt->like($item, $this->request->getPost('search')['value']);
                } else {
                    $this->vwdt->orLike($item, $this->request->getPost('search')['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->vwdt->groupEnd();
            }
            $i++;
        }

        if ($this->request->getPost('order')) {
            $this->vwdt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->vwdt->orderBy(key($order), $order[key($order)]);
        }
    }

    public function getDatatables($where) //nambah where disini
    {
        $this->getDatatablesQuery();
        foreach ($where as $key => $value) {
            $this->vwdt->where($key, $value);
        }
        if ($this->request->getPost('length') != -1)
            $this->vwdt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        $query = $this->vwdt->get();
        return $query->getResult();
    }

    public function countFiltered($where) //nambah where disini
    {
        $this->getDatatablesQuery();
        foreach ($where as $key => $value) {
            $this->vwdt->where($key, $value);
        }
        return $this->vwdt->countAllResults();
    }

    public function countAll()
    {
        $tbl_storage = $this->db->table($this->table);
        return $tbl_storage->countAllResults();
    }

    public function uploadPhoto($file)
    {
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('./uploads', $newName);
            return $newName;
        }
        return null;
    }
}

//tutor serevrside
// https://qadrlabs.com/post/integrasi-datatables-server-side-processing-codeigniter-4
