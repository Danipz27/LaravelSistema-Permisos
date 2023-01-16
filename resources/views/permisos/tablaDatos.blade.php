@extends('layout')
    
@section('tittle', 'Permiso')
    
@section('content')
    <div class="mt-6 mb-6 mx-auto w-8/12 ">
        <div class="bg-gray-200 font-bold text-center rounded-t-lg"><h3 class="p-2 text-2xl">SOLICITUD DE PERMISO</h3></div>
        <div class="overflow-auto  shadow rounded-b-xl">
            <div class="grid grid-rows-3 grid-flow-col gap-2">
                <div class="row-span-3 bg-gray-100 rounded-b-xl">
                    <h3 class="bg-gray-200 p-3 text-center font-semibold">DATOS DEL SOLICITANTE</h3>
                    <p class="p-4 text-base font-semibold">Nombre: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->nombre}}</span></p>
                    <p class="p-4 text-base font-semibold">Cédula: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->cedula}}</span></p> 
                    <p class="p-4 text-base font-semibold">Ubicación Geográfica: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->ubicacion}}</span></p>
                    <p class="p-4 text-base font-semibold">Nómina: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->nomina}}</span></p>
                    <p class="p-4 text-base font-semibold">Vicepresidencia o Gerencia General: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->vicepresidencia}}</span></p>
                    <p class="p-4 text-base font-semibold">Gerencia: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->gerencia}}</span></p>
                    <p class="p-4 text-base font-semibold">Departamento: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->departamento}}</span></p>
                    <p class="p-4 text-base font-semibold">Supervisor Inmediato: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->supervisor}}</span></p>
                </div>
                <div class="col-span-2 bg-gray-100 rounded-b-xl">
                <h3 class="p-3 bg-gray-200 text-center font-semibold rounded-t-lg">MOTIVO DE SOLICITUD</h3>
                    <p class="p-4 text-base font-semibold">Motivo del Permiso: <span class="p-3 text-center text-base text-gray-500 whitespace-normal">{{$id->motivo}}</span></p>
                </div>
                <div class="row-span-2 bg-gray-100 col-span-2  rounded-xl">
                <h3 class="p-3 bg-gray-200 text-center font-semibold">FECHA: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->fecha_solicitud}}</span></h3>
                    <p class="p-4 text-base font-semibold">Desde: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->tiempo_inicio}}</span></p>
                    <p class="p-4 text-base font-semibold">Hasta: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->tiempo_fin}}</span></p>
                    <p class="p-4 text-base font-semibold">Total de Días: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->total_dias}}</span></p>
                    <p class="p-4 text-base font-semibold">Total de Horas: <span class="p-3 text-center text-base text-gray-500 whitespace-nowrap">{{$id->total_horas}}</span></p>
                </div>
            </div>

        </div>
    </div>
@endsection