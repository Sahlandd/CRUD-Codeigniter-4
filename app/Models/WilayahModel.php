<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahModel extends Model
{
    protected $table = 'tblt_wilayah';
    protected $primaryKey = 'id_wilayah';
    protected $returnType = 'object';
    protected $allowedFields = ['id_desa', 'id_kecamatan', 'id_kota', 'id_kabupaten'];

    public function getWilayahId($id)
    {
        return  $this->db->where(['id_wilayah' => $id])->getResult();
    }
}
