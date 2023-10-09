<?php

namespace App\Models;

use CodeIgniter\Model;

class KabupatenModel extends Model
{
    protected $table = 'tblm_kabupaten';
    protected $view = 'vw_kabupaten';
    protected $primaryKey = 'id_kabupaten';
    protected $returnType = 'object';
    protected $allowedFields = ['id_provinsi', 'kabupaten'];

    public function getKabupatenByProvinsi($id_provinsi)
    {
        //return $this->where('id_provinsi', $id_provinsi)->findAll();
        return $this->builder("vw_kabupaten")->where('id_provinsi', $id_provinsi)->get()->getResult(); //+builder
    }

    public function getKabupatenId($id)
    {
        //return  $this->db->where(['id_kabupaten' => $id])->getResult();
        return  $this->builder("vw_kabupaten")->where(['id_kabupaten' => $id])->get()->getResult();
    }

    public function getAll(array $where = null)
    {
        $query = $this->builder("vw_kabupaten");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }

    public function getProvinsi(array $where = null)
    {
        $query = $this->builder("vw_kabupaten");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }
}
