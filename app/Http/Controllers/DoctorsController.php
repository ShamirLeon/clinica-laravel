<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors = Doctor::get();

        return view('doctors',['doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $doctor = new Doctor;
        $doctor->code = $request->input('code');
        $doctor->name = $request->input('name');
        $doctor->middle_name = $request->input('middle_name');
        $doctor->surname = $request->input('surname');
        $doctor->second_surname = $request->input('second_surname');
        $doctor->birth_date = $request->input('birth_date');
        $doctor->address = $request->input('address');
        $doctor->specialty_id = $request->input('specialty_id');
        $doctor->contract_id = $request->input('contract_id');
        $doctor->save();

        return $this->index();

    }

    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
        return view('doctors.show', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
