<?php

namespace MyApp\Http\Controllers;

use Illuminate\Http\Request;
use MyApp\Car;

class Cars extends Controller
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
        $this->validate($request,[
            'plate_number' => 'required|max:20|unique:cars',
            'model' => 'required|Numeric',
            'color' => 'required|max:100',
            'engine_serial' => 'required|max:30',
            'km_mi' => 'required|Numeric',
            'brand' => 'required'

            ]);

        $carro = new Car();
        $carro->plate_number = $request->plate_number;
        $carro->model = $request->model;
        $carro->color = $request->color;
        $carro->engine_serial = $request->engine_serial;
        $carro->km_mi = $request->km_mi;
        $carro->brand = 1;
        

       if($carro->save())
        {
            return back()->with('msjCar','Carro Guardado Exitosamente');
        }
        else
        {
            return back()->with('msjerrorCar','Carro No Guardado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
