<?php

namespace App\Http\Controllers;

use App\Models\admissionform;
use App\Models\Admissionform as ModelsAdmissionform;
use Illuminate\Http\Request;

class AdmissionformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsAdmissionform::create($request->post());
        return redirect()->back()->with('success', 'Your Form has been saved successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admissionform  $admissionform
     * @return \Illuminate\Http\Response
     */
    public function show(admissionform $admissionform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admissionform  $admissionform
     * @return \Illuminate\Http\Response
     */
    public function edit(admissionform $admissionform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admissionform  $admissionform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admissionform $admissionform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admissionform  $admissionform
     * @return \Illuminate\Http\Response
     */
    public function destroy(admissionform $admissionform)
    {
        //
    }
}
