<?php

namespace MyApp\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        //$car = DB::table('cars')->where('plate_number', $id)->first();
        $car = DB::table('cars')
            ->join('brands', 'cars.brand', '=', 'brands.id')
            ->select('cars.*', 'brands.name')->where('cars.plate_number', $id)
            ->first();
        dd($car);
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

    public function getCar(Request $request)
    {
      try
      {
        $car = DB::table('cars')
            ->join('brands', 'cars.brand', '=', 'brands.id')
            ->select('cars.*', 'brands.name')->where('cars.plate_number', $request->plate)
            ->first();

        //$car = DB::table('cars')->where('plate_number', $request->plate)->first();

        return response(['model'            =>  $car->model,
                         'color'            =>  $car->color,
                         'engine_serial'    =>  $car->engine_serial,
                         'millaje'          =>  $car->km_mi,
                         'brand'            =>  $car->name,
                         'id'               =>  $car->plate_number,
                       ],200);
        return $car;
      }
      catch (Illuminate\Database\QueryException $ex)
      {
        //return response(['error'=>$ex->getMessage()],500);
        return $ex->getMessage();

      }
    }
}
