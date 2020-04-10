<?php

namespace App\Http\Controllers;

use App\Activofijo;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ActivofijosImport;

class ActivofijoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activofijo  $activofijo
     * @return \Illuminate\Http\Response
     */
    public function show(Activofijo $activofijo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activofijo  $activofijo
     * @return \Illuminate\Http\Response
     */
    public function edit(Activofijo $activofijo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activofijo  $activofijo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activofijo $activofijo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activofijo  $activofijo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activofijo $activofijo)
    {
        //
    }
    
    public function import(Request $request)
    {
        $this->validate($request, [
            'myfile' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new ActivofijosImport, $request->file('myfile'));
        
        $data = DB::table('activofijos')->get();

        return response()->json($data,200);
    }
}
