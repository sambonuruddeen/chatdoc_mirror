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

        $doc = Doctor::where('user_id', $doctor)->first();
        return view('doctor.profile_edit',['doc'=>$doc]);
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
          'twitter' => ['max:255'],
          'facebook' => [ 'max:255'],
          'linkedin' => [ 'max:255'],
        ]);

        $doctor = Doctor::create([
          'user_id' => $request->user_id,
          'biography' => $request->biography,
          'specialization' => $request->specialization,
          'license_type' => $request->license_type,
          'license_number' => $request->license_number,
          'languages' => $request->languages,
          'rate' => $request->rate,
          'twitter' => $request->twitter,
          'facebook' => $request->facebook,
          'linkedin' => $request->linkedin,
        ]);
        #print_r($request->languages);
        return redirect('/doctor_profile')->with('status', 'Profile updated!');


      }

      public function update(Request $request)
      {
          //
          $request->validate([
            'user_id' => ['required', 'int'],
            'biography' => ['string'],
            'specialization' => ['required', 'string', 'max:255'],
            'license_type' => ['required', 'string'],
            'license_number' => ['required', 'string'],
            'languages' => ['required', 'string', 'max:255'],
            'rate' => ['required', 'int'],
            'twitter' => ['max:255'],
            'facebook' => ['max:255'],
            'linkedin' => ['max:255'],
          ]);
  
          #$doctor = Doctor::where('user_id', '=', $request->user_id)->first();
          #$doctor->update($request->all());
          $doctor = Doctor::where('user_id', $request->user_id)->update([
            'user_id' => $request->user_id,
            'biography' => $request->biography,
            'specialization' => $request->specialization,
            'license_type' => $request->license_type,
            'license_number' => $request->license_number,
            'languages' => $request->languages,
            'rate' => $request->rate,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
          ]);

          
          #return back()->with('status','Profile updated!');
          return redirect('/doctor_profile')->with('status', 'Profile updated!');
      }
    
}
