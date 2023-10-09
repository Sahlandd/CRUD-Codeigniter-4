<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentModel extends Model
{
    protected $table = 'tblm_document';
    protected $primaryKey = 'id_document';
    protected $returnType = 'object';
    protected $allowedFields = ['document'];

    public function getDocumentId($id)
    {
        return  $this->db->where(['id_document' => $id])->getResult();
    }
}
