<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AddressModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class AddressController extends ResourceController
{
    public function cities($province_id = null)
    {
        if ($province_id != null) {
            $address = new AddressModel();
            $res = $address->getCities($province_id);
            return $this->respond(json_encode($res));
        }
        return ["kosong"];
    }

    public function districts($city_id = null)
    {
        if ($city_id != null) {
            $address = new AddressModel();
            $res = $address->getDistricts($city_id);
            return $this->respond(json_encode($res));
        }
        return ["kosong"];
    }

    public function villages($district_id = null)
    {
        if ($district_id != null) {
            $address = new AddressModel();
            $res = $address->getVillages($district_id);
            return $this->respond(json_encode($res));
        }
        return ["kosong"];
    }
}
