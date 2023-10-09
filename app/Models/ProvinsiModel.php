<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table = 'tblm_provinsi';
    protected $primaryKey = 'id_provinsi';
    protected $returnType = 'object';
    protected $allowedFields = ['provinsi'];


    public function getProvisnsiId($id)
    {
        return  $this->db->where(['id_provinsi' => $id])->getResult();
    }

    public function getAll(array $where = null)
    {
        $query = $this->builder("tblm_provinsi");
        if ($where != null) {
            $query = $query->where($where);
        }
        return $query->get()->getResult();
    }
}
