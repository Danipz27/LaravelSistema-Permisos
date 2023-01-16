@extends('layout')

@section('tittle', 'Intranet')

@section('content')
<div class="w-9/12 mx-auto rounded-xl bg-gray-100 pb-16">
        <div class="mx-auto w-10/12 rounded-lg">
            <h1 class="print:hidden text-2xl mt-10 pt-5 font-bold text-center">ESTE ES EL INTRANET TEMPORAL</h1><br>
            <input type ="button" class="bg-sky-500 hover:bg-sky-700 text-white py-1 px-3 font-semibold rounded-full" value ="VOLVER A LOS PERMISOS" onclick="location.href='{{route('index.mostrar2')}}'"/>
            <input type ="button" class="bg-sky-500 hover:bg-sky-700 text-white ml-3 py-1 px-3 font-semibold rounded-full" value ="VER MIS PERMISOS" onclick="location.href='{{route('index.listado')}}'"/>
        </div>
</div>
@endsection

