<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentModel extends Model
{
    protected $table            = 'Pasien_Fasilitas_Kesehatan';
    protected $primaryKey       = 'tanggal_pendaftaran';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [
        'id_faskes' => 'int'
    ];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAppointmentWithPatient() {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);

        $builder->select('*');
        $builder->join('Pasien', 'Pasien.NIK = Pasien_Fasilitas_Kesehatan.NIK');
        return $builder->get()->getResultObject();
    }

    public function getNextAppointment() {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);

        $builder->select('*');
        $builder->join('Pasien', 'Pasien.NIK = Pasien_Fasilitas_Kesehatan.NIK');
        $builder->where('Pasien_Fasilitas_Kesehatan.status_periksa', 'tunggu');
        $builder->orderBy('tanggal_pendaftaran', 'DESC');
        return $builder->get()->getFirstRow();
    }
}
