<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Bonos.index');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Bonos.create');
    }

    public function show()
    {
        return view('Admin.Bonos.show');
    }
  
    public function edit()
    {
        return view('Admin.Bonos.edit');
    }
  
    public function update()
    {
        return redirect()->route('Admin.Bonos.index')
                    ->with('success','actividad actualizado satisfactoriamente');
    }

    public function destroy()
    {
        return redirect()->route('Admin.Bonos.index')
                        ->with('success','actividad eliminada satisfactoriamente');
    }
}