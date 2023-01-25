<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Horas;
use App\Models\Asignaturas;
use Illuminate\Support\Facades\Auth;

class HorasController extends Controller
{
    protected $horas;

    public function __construct(Horas $horas)
    {
        $this->horas = $horas;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horas = $this->horas->obtenerHoras(Auth::user()->id);
        return view("horas", ["horas" => $horas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignatura = new Asignaturas();
        $asignaturas = $asignatura->obtenerAsignaturas();
        return view("horas.create", ["asignaturas" => $asignaturas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horas = new Horas($request->all());
        $horas->save();
        return redirect()->action([HorasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $horas = $this->horas->obtenerHoraPorId($id);
        return view("horas.edit", ["horas" => $horas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // ------------------------------------------------------------------------------------------------------------------------


    // ACLARACION SOBRE LAS FUNCIONES UPDATE Y DESTROY

    // Los metodos de elocuencia de laravel no funcionan para actualizar o eliminar registros con clave primaria compuesta
    // por lo que se utilizo el metodo DB::table() para realizar dichas acciones
    
    
    public function update(Request $request, $id)
    {
        $horas = Horas::find($id);
        $horas->fill($request->all());
        $horas->save();
        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horas = Horas::find($id);
        $horas->delete();
        return redirect()->action([HorasController::class, 'index']);
    }

}
