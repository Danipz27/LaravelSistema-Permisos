<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permiso;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PermisoController extends Controller
{
    //Mostrar datos de los usuarios de acuerdo a su cedula para ahorrar el escribir
    public function index(Request $request)
    {
        $search = trim($request->get('cedula'));
        $permisos = DB::table('permiso')->select('id','fecha_solicitud', 'cedula', 'nombre', 'motivo', 'departamento')
                                        ->where('cedula', '=', '%' . $search . '%');
        return view('\Permiso', compact('permisos', 'search'));
    }

    //Función para exporat e imprimir el pdf del permiso solicitado
    public function pdf(Request $request)
    {
        $registros = DB::table('permiso')->select('permiso.*')
                                        ->latest('created_at')
                                        ->first();
        return view('pdf\pdf')->with('registros', $registros);
    }

    //Aqui mostramos la vista instranet temporal solo es de prueba
    public function intranet()
    {
        return view('Intranet');
    }

    //CON ESTA FUNCION CREAMOS EL PERMISO, LO ALMACENAMOS EN LA BASE DE DATOS
    //Y POSTERIORMENTE LO TRAEMOS DE VUELTA PERO EN VISTA PDF PARA SER IMPRESO
    public function store(Request $request)
    {     
        try {
            DB::beginTransaction();
                $reg= new Permiso;
                $reg->cedula = $request->get('cedula');
                $reg->fecha_solicitud = $request->get('fecha_solicitud');
                $reg->nombre = $request->get('nombre');
                $reg->ubicacion = $request->get('ubicacion');
                $reg->nomina = $request->get('nomina');
                $reg->vicepresidencia = $request->get('vicepresidencia');
                $reg->gerencia = $request->get('gerencia');
                $reg->departamento = $request->get('departamento');
                $reg->motivo = $request->get('motivo');
                $reg->supervisor = $request->get('supervisor');
                $reg->tiempo_inicio = $request->get('tiempo_inicio');
                $reg->tiempo_fin = $request->get('tiempo_fin');
                $reg->total_dias = $request->get('total_dias');
                $reg->total_horas = $request->get('total_horas');
                $reg->save();
                DB::commit();
            } catch (Exception $e) {
            DB::rollback();
        }
        //Al finalizar el proceso de creado y guardado retornamos a permiso.pdf para imprimir
        return redirect()->route('permiso.pdf');
    }
}
