<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //public function showDoctor($id)
    public function showDoctor()
    {
        return view('doctor_profile');
    }

    public function doctorsList()
    {
        return view('doctors_list');
    }

    public function medicalDevices()
    {
        return view('medical_devices');
    }
}
