<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tblt_warga';
    protected $primaryKey = 'id_warga';
    protected $returnType = 'object';
    protected $allowedFields = ['foto'];

    public function uploadPhoto($file)
    {
        // Mendefinisikan direktori tujuan untuk menyimpan foto
        $uploadPath = WRITEPATH . 'uploads'; // Sesuaikan dengan direktori tujuan Anda

        // Generate nama unik untuk file foto
        $newName = $file->getRandomName();

        // Pindahkan file foto ke direktori tujuan dengan nama yang baru
        $file->move($uploadPath, $newName);

        return $newName;
    }

    // ...
}
