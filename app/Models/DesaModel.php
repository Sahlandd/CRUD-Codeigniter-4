<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
    protected $table = 'tblm_desa';
    protected $view = 'vw_desa';
    protected $primaryKey = 'id_desa';
    protected $returnType = 'object';
    protected $allowedFields = ['id_kecamatan', 'id_kabupaten', 'id_provinsi', 'desa'];


    public function getDesaByKecamatan($id_kecamatan)
    {
        return $this->builder("vw_desa")->where('id_kecamatan', $id_kecamatan)->get()->getResult(); //+builder
    }

    public function getDesaId($id)
    {
        return  $this->builder("vw_desa")->where(['id_desa' => $id])->get()->getResult();
    }

    public function getAll(array $where = null)
    {
        $query = $this->builder("vw_desa");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }

    public function getKecamatan(array $where = null)
    {
        $query = $this->builder("vw_desa");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }
}
