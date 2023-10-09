<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function tot_penduduk()
    {
        return $this->db->table('tblt_warga')->countAll();
    }

    public function tot_provinsi()
    {
        return $this->db->table('tblm_provinsi')->countAll();
    }

    public function tot_kabupaten()
    {
        return $this->db->table('tblm_kabupaten')->countAll();
    }

    public function tot_kecamatan()
    {
        return $this->db->table('tblm_kecamatan')->countAll();
    }

    public function tot_desa()
    {
        return $this->db->table('tblm_desa')->countAll();
    }

    public function getLahir($tahun)
    {
        return $this->db->table('tblt_warga')
            ->select('MONTH(tempat_tanggal_lahir) AS bulan, COUNT(*) AS jumlah')
            ->where('YEAR(tempat_tanggal_lahir)', $tahun)
            ->groupBy('MONTH(tempat_tanggal_lahir)')
            ->orderBy('MONTH(tempat_tanggal_lahir)', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getAgama()
    {
        return $this->db->table('vw_warga')
            ->select('agama, id_agama, COUNT(*) as jumlah')
            ->groupBy('id_agama')
            ->get()
            ->getResultArray();
    }
}
