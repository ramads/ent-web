<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
    protected $table            = 'Desa';
    protected $primaryKey       = 'id_desa';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
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

    public function getVillages($district_id = null) {
        $db      = \Config\Database::connect();
        $builder = $db->table("Desa");
        $builder->select('*');

        if ($district_id != null) {
            $builder->where("id_kecamatan", $district_id);
        }

        return $builder->get()->getResultObject();
    }
    public function getProvinces() {
        $db      = \Config\Database::connect();
        $builder = $db->table("Provinsi");

        $builder->select('*');
        return $builder->get()->getResultObject();
    }

    public function getCities($province_id = null) {
        $db      = \Config\Database::connect();
        $builder = $db->table("Kabupaten");
        $builder->select('*');

        if ($province_id != null) {
            $builder->where("id_provinsi", $province_id);
        }

        return $builder->get()->getResultObject();
    }

    public function getDistricts($city_id = null) {
        $db      = \Config\Database::connect();
        $builder = $db->table("Kecamatan");
        $builder->select('*');

        if ($city_id != null) {
            $builder->where("id_kabupaten", $city_id);
        }

        return $builder->get()->getResultObject();
    }
}
