<?php

namespace MyApp\Http\Controllers;

use Illuminate\Http\Request;
use MyApp\Brand;
//use Storage;

class Brands extends Controller
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


        try
        {
            $this->validate($request,[
            'name' => 'required|unique:brands',
            'description' => 'required'

            ]);

            $brand = new Brand();
            $brand->name = $request->name;
            $brand->description = $request->description;
            
            $brand->save();

            return response(['msj'=>'Marca Guardada Exitosamente'],200);

            /*
                200 ok
                500 error del servidor
                404 not found
                403 bad request
                503 bad gw
            */

           /*if($brand->save())
            {
                return back()->with('msj','Marca Guardada Exitosamente');
            }
            else
            {
                return back()->with('msjerror','Marca No Guardada');
            }*/
        }
        catch (\Exception $e)
        {
            return response(['msj'=>'Marca No Guardada'],500);
        }

        /**
        * $img = $request->file('imagen');
        * Storage::disk('imgCars')->put("FrontalOrden1.jpg",file_get_contents($img->getRealPath()));
        **/

        
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
