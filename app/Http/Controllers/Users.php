<?php

namespace MyApp\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use MyApp\User;

class Users extends Controller
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
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required|max:255',
            'nit' => 'nullable',
            'direction' => 'required|max:255',
            'phone' => 'required|digits:8',
            'phone2' => 'nullable|digits:8'

            ]);

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt('PasswordSimbit');
        $user->nit = $request->nit;
        $user->phone = $request->phone;
        $user->phone2 = $request->phone2;
        $user->id_rol = 2;
        $user->direction = $request->direction;


       if($user->save())
        {
            return back()->with('msjUser','Usuario Guardado Exitosamente');
        }
        else
        {
            return back()->with('msjerrorUser','Usuario No Guardado');
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

    /**
     * Display the specified resource.
     *
     * @param  mail  $email
     * @return \Illuminate\Http\Response
     */
    public function getUser(Request $request)
    {

        try
        {
          //$user = DB::table('users')->where('name', 'John')->first();
          $user = DB::table('users')->where('email', $request->mail)->first();
          return response(['name'     =>  $user->name,
                           'nit'      =>  $user->nit,
                           'direction'=>  $user->direction,
                           'phone'    =>  $user->phone,
                           'phone2'   =>  $user->phone2,
                         ],200);
        }
        catch (Illuminate\Database\QueryException $ex)
        {
          //return response(['error'=>$ex->getMessage()],500);
          return $ex->getMessage();

        }

    }
}
