<?php

namespace App\Controllers;

use App\Models\AppointmentModel;

class Home extends BaseController
{
    public function index(): string
    {
        $appointments = new AppointmentModel();
        $listPatient = $appointments->getAppointmentWithPatient();
        $nextPatient = $appointments->getNextAppointment();

        $avatar = 'male_user.png';
        if ($nextPatient->jenis_kelamin == 'wanita') {
            $avatar = 'female_user.png';
        }
        return view('dash', [
            'listPatient' => $listPatient,
            'nextPatient' => $nextPatient,
            'nextPatientAvatar' => $avatar
        ]);
    }
}
