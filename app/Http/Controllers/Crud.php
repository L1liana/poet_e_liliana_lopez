<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
    public function index()
    {
        $user = DB :: table('poet')
        ->get();
        return view('crud.showUsuarios',[
            'poet' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.altaUsuario');
    }
    public function store(Request $request)
    {
        $User = DB::table('poet')
        ->insert([
        'First_name' => $request->input('First_name'),
        'Surname' => $request->input('Surname'),
        'Address' => $request->input('Address'),
        'Postcode' => $request->input('Postcode'),
        'Telephone_number' => $request->input('Telephone_number')
        ]);
        return redirect()->action('Crud@index')
        ->with('status','Usuario creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=DB::table('poet')
            ->where('Poet_code','=',$id)
            ->first();
        return view('crud.altaUsuario', ['user' => $user]);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = DB::table('poet')
            ->where('Poet_code', '=',  $request->input('id'))
            ->update([
                'First_name' => $request->input('First_name'),
                'Surname' => $request->input('Surname'),
                'Address' => $request->input('Address'),
                'Postcode' => $request->input('Postcode'),
                'Telephone_number' => $request->input('Telephone_number')
            ]);

        return redirect()->action('Crud@index')
            ->with('status','Usuario Modificado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('poet')
            ->where('Poet_code', '=',  $id)
            ->delete();

        return redirect()->action('Crud@index')
            ->with('status','Usuario Eliminado Exitosamente');
    }
}

