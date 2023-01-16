<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Permiso;
use Barryvdh\DomPDF\Facade\Pdf;

class ListarController extends Controller
{
    //Con esta función retornamos la vista \Permiso con datos al ingresar la cedula de cualquier empleado
    public function index(Request $request)
    {
        return view('Permiso');
    }

    //CON ESTA FUNCION BUSCAMOS POR CEDULA EL ULTIMO PERMISO DE DICHO EMPLEADO 
    //PARA EL AUTOCOMPLETADO DE CAMPOS
    public function filtrarPermiso(Request $request, Permiso $permisos)
    {
            $search = trim($request->get('search'));
            $permisos = DB::table('permiso')->select('id','fecha_solicitud', 'cedula', 'nombre', 
                                            'motivo', 'departamento', 'ubicacion', 'gerencia', 'nomina', 
                                            'supervisor', 'vicepresidencia', 'total_dias', 'total_horas')
                                            ->where('cedula', 'LIKE', '%' . $search . '%')
                                            ->latest('created_at')
                                            ->first();
            return view('PermisoCi', compact('permisos', 'search'));
            
    }

    //CON ESTA FUNCION MOSTRAMOS CADA UNO DE LOS PERMISOS DEL 
    //EMPLEADO MEDIANTE EL ID DEL PERMISO
    public function showId(Permiso $id)
    {
        return view('permisos/tablaDatos', ['id'=>$id]); 
    }

    //CON ESTO PODEMOS EXPORTAR UN PERMISO POR ID CREADO ANTERIORMENTE 
    //Y ASI PODER EXPORTARLO O IMPRIMIRLO PARA SU USO
    public function showpdfid(Permiso $id)
    {
        $pdf = PDF::loadview('pdf\pdfId', ['id'=>$id]);
        return $pdf->stream('PermisoCVG.pdf');
    }

    //CREAMOS EL PDF DEL PERMISO RECIENTEMENTE GENERADO PARA SER IMPRESO O DESCARGADO
    public function pdf(Request $request)
    {
        $request = DB::table('permiso')->latest('created_at')->first();
        $pdf = PDF::loadView('pdf\pdf', ['request' => $request]);
        return $pdf->stream('PermisoCVG.pdf');
        
    }
    
    //FUNCIÓN PARA MOSTRAR LOS PERMISOS DE LOS EMPLEADOS Y PODER BUSCARLOS POR NUMERO DE CEDULA
    public function mostrarPermiso(Request $request)
    {
        $search = trim($request->get('search'));
        $permisos = DB::table('permiso')->select('id','fecha_solicitud', 'cedula', 'nombre', 
                                        'motivo', 'departamento', 'ubicacion', 'gerencia', 
                                        'nomina', 'supervisor', 'vicepresidencia', 'total_dias', 
                                        'total_horas')->where('cedula', 'LIKE', '%' . $search . '%')
                                        ->paginate(10);
        return view('Mostrar', compact('permisos', 'search'));
    }

    public function buscarPermiso(Request $request)
    {
        $search = trim($request->get('search'));
        $permisos = DB::table('permiso')->select('id','fecha_solicitud', 'cedula', 'nombre', 
                                        'motivo', 'departamento', 'ubicacion', 'gerencia', 
                                        'nomina', 'supervisor', 'vicepresidencia', 'total_dias', 
                                        'total_horas')->where('cedula', 'LIKE', '%' . $search . '%')
                                        ->paginate(10);
        return view('MostrarCi', compact('permisos', 'search'));
    }
}
