<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table = 'tblm_kota';
    protected $primaryKey = 'id_kota';
    protected $returnType = 'object';
    protected $allowedFields = ['kota'];

    public function getKecamatanId($id)
    {
        return  $this->db->where(['id_kota' => $id])->getResult();
    }
}
