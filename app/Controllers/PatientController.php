<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AddressModel;
use App\Models\AppointmentModel;
use App\Models\PatientModel;
use CodeIgniter\HTTP\ResponseInterface;

class PatientController extends BaseController
{
    public function index()
    {
        $patient = new PatientModel();

        $data = $patient->findAll();

        return view('patient/patient_index', [
            'data' => $data,
        ]);
    }

    public function insert() {
        $address = new AddressModel();
        $provinces = $address->getProvinces();

//        dd($provinces);
        return view('patient/patient_form', [
            'provinces' => $provinces
        ]);
    }

    public function save($id = null) {
//        dd($this->request->getPost());
        $patient = new PatientModel();
        if ($id != null) {
            //model initialize
            $patient = $patient->find($id);
        } else {
            $patient->insert([
                'NIK' => $this->request->getPost('NIK'),
                'nama_pasien' => $this->request->getPost('nama_pasien'),
                'alamat' => $this->request->getPost('address'),
                'jenis_kelamin' => $this->request->getPost('gender'),
                'tanggal_lahir' => $this->request->getPost('dob'),
                'id_desa' => $this->request->getPost('village'),
            ]);

            $isAddToAppointment = $this->request->getPost('appointment') == 'on';
            if ($isAddToAppointment) {
                $appointment = new AppointmentModel();
                $appointment->insert([
                    'NIK' => $this->request->getPost('NIK'),
                    'id_faskes' => 1,
                    'status_periksa' => 'tunggu',
                    'tanggal_pendaftaran' => $this->request->getPost('appointment_time')
                ]);
            }
        }

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('index.php/patient'));
    }
}
