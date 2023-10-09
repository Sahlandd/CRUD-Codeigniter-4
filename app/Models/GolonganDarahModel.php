<?php

namespace App\Models;

use CodeIgniter\Model;

class GolonganDarahModel extends Model
{
    protected $table = 'tblm_golongandarah';
    protected $primaryKey = 'id_golonganDarah';
    protected $returnType = 'object';
    protected $allowedFields = ['golonganDarah'];
}
