<?php

namespace App\Models;

use CodeIgniter\Model;

class UkuranBajuModel extends Model
{
    protected $table = 'tblm_ukuranbaju';
    protected $primaryKey = 'id_ukuranBaju';
    protected $returnType = 'object';
    protected $allowedFields = ['ukuranBaju'];
}
