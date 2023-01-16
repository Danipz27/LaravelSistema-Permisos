@extends('layout')
    
@section('tittle', 'Mis Permisos')
    
@section('content')
<div class="my-5 w-10/12 mx-auto rounded-xl bg-gray-100 pb-16">
    <button class="bg-sky-500 hover:bg-sky-700 text-white mt-5 ml-5 py-1 px-3 font-semibold rounded-full" onclick="location.href='{{route('volver.inicio')}}'">VOLVER A INTRANET</button>
    <h1 class="text-xl mb-2 text-center">PÁGINA PARA VER MIS PERMISOS</h1>
    <div class="mx-auto w-10/12 rounded-lg shadow">
            <form name="miform" action="{{route('index.listadoCi')}}" method="get">
                <div class="flex flex-wrap">
                    <div class="">
                        <label class="">
                            {{-- Cedula del Empleado en el "Value" del siguiente Input--}}
                            <input value="27765588" readonly autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 rounded-md sm:text-sm focus:ring-1" placeholder="Buscar por Cedula..." type="text" name="search"/>
                            <input type="submit" name="buscar" onclick="showTabla()" id="buscar" class="bg-sky-500 hover:bg-sky-700 px-3 py-1 text-white font-semibold rounded-md" value="Buscar" />
                        </label>
                    </div>
                    <div class="ml-auto">
                        {{$permisos->links()}}
                    </div>
                </div>
            </form>
            <table class="w-full" id="tablaPermisos" style="">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">ID</th>--}}
                    <th class="p-3  text-sm font-semibold tracking-wide text-center">Fecha Solicitud</th>
                    <th class="p-3  text-sm font-semibold tracking-wide text-center">Cédula</th>
                    <th class="p-3  text-sm font-semibold tracking-wide text-center">Nombre</th>
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Ubicación</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Nómina</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Vicepresidencia</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Gerencia</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center">Departamento</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Motivo</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Supervisor</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Fecha Inicio</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center">Fecha Fin</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Total Días</th>--}}
                    {{--<th class="p-3 text-sm font-semibold tracking-wide text-center">Total Horas</th>--}}
                    <th class="p-3  text-sm font-semibold tracking-wide text-center">Ver Permiso</th>
                    <th class="p-3  text-sm font-semibold tracking-wide text-center">Descargar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @forelse ($permisos as $d)
                <tr class="">
                {{--<td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{$d->id}}</td>--}}
                    <td class="p-3 text-center text-sm text-gray-800 whitespace-nowrap">{{$d->fecha_solicitud}}</td>
                    <td class="p-3 text-center text-sm text-gray-800 whitespace-nowrap">{{$d->cedula}}</td>
                    <td class="p-3 text-center text-sm text-gray-800 whitespace-nowrap">{{$d->nombre}}</td>
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->ubicacion}}</td>--}}
                {{--<td class="w-10 p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->nomina}}</td>--}}
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->vicepresidencia}}</td>--}}
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->gerencia}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->departamento}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->motivo}}</td>--}}
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->supervisor}}</td>--}}
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->tiempo_inicio}}</td>
                    <td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->tiempo_fin}}</td>--}}
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->total_dias}}</td>--}}
                {{--<td class="p-3 text-sm text-gray-800 whitespace-nowrap">{{$d->total_horas}}</td>--}}
                    <td class="text-center"><a class="font-bold text-blue-500 hover:underline whitespace-nowrap" href="/Mostrar/Permiso/{{$d->id}}" target="blank_">Visualizar Datos</a></td>
                    <td class="text-center"><a class="font-bold text-blue-500 hover:underline whitespace-nowrap" href="/Mostrar/pdf/{{$d->id}}" target="blank_">PDF</a></td>
                    @empty
                        <thead><p class="text-base mb-2 text-center mx-auto font-bold">Todavia no tienes Permisos ó la cédula ingresada no esta registrada</p></thead>
                </tr>
                    @endforelse
            </tbody>
        </table>
    </div>
</div>
<script>
    function showTabla(){
        document.getElementById('tablaPermisos').style.display = '';
    }
</script>
@endsection