<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AppointmentModel;
use CodeIgniter\HTTP\ResponseInterface;

class AppointmentController extends BaseController
{
    public function index()
    {
        $patient = new AppointmentModel();

        $data = $patient->getAppointmentWithPatient();

        return view('appointment/appointment_index', [
            'data' => $data,
        ]);
    }

    public function create() {
        return view('appointment/appointment_form');
    }
}
