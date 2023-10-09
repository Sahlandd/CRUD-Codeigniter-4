<?php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'tblm_kecamatan';
    protected $view = 'vw_kecamatan';
    protected $primaryKey = 'id_kecamatan';
    protected $returnType = 'object';
    protected $allowedFields = ['id_kabupaten', 'id_kecamatan', 'provinsi'];

    public function getKecamatanByKabupaten($id_kabupaten)
    {
        //return $this->where('id_kabupaten', $id_kabupaten)->findAll();
        return $this->builder("vw_kecamatan")->where('id_kabupaten', $id_kabupaten)->get()->getResult(); //+builder
    }

    public function getKecamatanId($id)
    {
        //return  $this->db->where(['id_kecamatan' => $id])->getResult();
        return  $this->builder("vw_kecamatan")->where(['id_kecamatan' => $id])->get()->getResult();
    }

    public function getAll(array $where = null)
    {
        $query = $this->builder("vw_kecamatan");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }

    public function getKabupaten(array $where = null)
    {
        $query = $this->builder("vw_kecamatan");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }
}
