<?php

namespace App\Models;

use CodeIgniter\Model;

class AgamaModel extends Model
{
    protected $table = 'tblm_agama';
    protected $primaryKey = 'id_agama';
    protected $returnType = 'object';
    protected $allowedFields = ['agama'];

    public function getAgamaId($id)
    {
        return  $this->db->where(['id_agama' => $id])->getResult();
    }
}
