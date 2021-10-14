<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorDashboardController extends Controller
{
    //
      public function __construct() {
        $this->middleware('auth');
      }
      
      public function index() {
        return view('doctor.dashboard');
      }

      public function my_profile() {
        $id = auth()->id();
       
        $doc = Doctor::where('user_id', $id)->first();
        /*if (!empty($doc)) {
          echo count($doc->user_id);}
        elseif (empty($doc))
        {
          echo "Not Found";
        }*/
      
        return view('doctor.profile', ['doctor' => $doc]);
      }

      public function edit_doctor($doctor)
      {
        return view('doctor.profile_edit',['doc'=>$doctor]);
        #return view('doctor.profile_edit', [
         # 'doctor' => Doctor::findOrFail($id)
      #]);
      }

      public function store_profile(Request $request)
      {
        $request->validate([
          'user_id' => ['required', 'int'],
          'biography' => ['string'],
          'specialization' => ['required', 'string', 'max:255'],
          'license_type' => ['required', 'string'],
          'license_number' => ['required', 'string'],
          'languages' => ['required', 'string', 'max:255'],
          'rate' => ['required', 'int'],
        ]);

        $doctor = Doctor::create([
          'user_id' => $request->user_id,
          'biography' => $request->biography,
          'specialization' => $request->specialization,
          'license_type' => $request->license_type,
          'license_number' => $request->license_number,
          'languages' => $request->languages,
          'rate' => $request->rate,
        ]);
        #print_r($request->languages);
        return redirect('/doctor_profile');


      }
    
}
