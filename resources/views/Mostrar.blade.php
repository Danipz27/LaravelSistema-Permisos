@extends('layout')
    
@section('tittle', 'Mis Permisos')
    
@section('content')
<div class="my-5 w-10/12 mx-auto rounded-xl bg-gray-100 pb-16">
    <button class="bg-sky-500 hover:bg-sky-700 text-white mt-5 ml-5 py-1 px-3 font-semibold rounded-full" onclick="location.href='{{route('volver.inicio')}}'">VOLVER A INTRANET</button>
    <h1 class="text-xl mb-2 text-center">PÁGINA PARA VER MIS PERMISOS</h1>
    <p class="ml-24 my-4 font-semibold">Presiona el botón de buscar para visulizar tus permisos</p>
    <div class="mx-auto w-10/12 rounded-lg shadow">
            <form name="miform" action="{{route('index.listadoCi')}}" method="get">
                <div class="flex flex-wrap">
                    <div class="">
                        <label class="">
                            {{-- Cedula del Empleado en el "Value" del siguiente Input--}}
                            <input value="27765588" readonly autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt- px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 rounded-md sm:text-sm focus:ring-1" placeholder="Buscar por Cedula..." type="text" name="search"/>
                            <input type="submit" name="buscar" onclick="showTabla()" id="buscar" class="bg-sky-500 hover:bg-sky-700 px-3 py-1 text-white font-semibold rounded-md" value="Buscar" />
                        </label>
                    </div>
                    <div class="ml-auto">
                        
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection