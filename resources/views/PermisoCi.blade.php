@extends('layout')
    
@section('tittle', 'Inicio Permisos')

@section('content')
<div class="min-h-screen py-5">
<h1 class="print:hidden text-2xl font-bold text-center">FORMATO DE SOLICITUD Y AUTORIZACIÓN DE PERMISOS</h1><br>
<div class="container w-full mx-auto">    
<div class=" flex flex-col lg:flex-row w-11/12 mx-auto bg-white rounded-xl drop-shadow-xl">
    <div class="print:hidden w-2/5 flex flex-col text-black items-center bg-violet-300 rounded-xl justify-top bg-no-repeat bg-center pt-10 bg-clip" style="background-image: url('img/CVG_Corporacion_Venezolana_de_Guayana-logo-3A049A7049-seeklogo.com.png');">
        <form action="{{route('index.mostrar')}}" method="get">
            <div class="w-72">
            <label class="block text-sm font-medium text-slate-700"><span class=" ml-1">Cédula del Empleado</span>
                <span class="absolute inset-y-0 left-0 flex items-center pl-2"><svg class="h-5 w-5 fill-slate-300"></svg></span>
                <input value="" id="btncedula" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Cédula para autocompletado..." type="search" name="search"/>
            </label>
            </div><br>
        </form>
            <div id="divmensaje">
                <h1 class="text-3xl font-bold mt-10 text-center">BUEN DÍA!!</h1>
                <h1 class="text-3xl text-center py-7 font-semibold mt-2"> Le desea la Corporación Venezolana de Guayana</h1>
            </div>
    </div>    
        <form class="w-10/12" method="POST" action="{{route('create.permiso')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <div class=" px-10 pt-10 pb-6">
            <fieldset>
                <legend>
                    <h2 class="font-bold">POR FAVOR</h2>
                    <h2 class="font-semibold">Complete el formulario y haga click en el Botón de Imprimir</h2><br>    
                </legend>
            </fieldset>
            <div class="shadow-md w-full">
                <label class="block">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Fecha de la Solicitud
                    </span>
                    <input type="date" required id="fechaActual" name="fecha_solicitud" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"/>
                </label>
            </div><br>
            @if ($permisos == null)
                <h1 class="font-semibold text-center pt-4 mb-8 w-9/12 mx-auto">El Número de Cédula Ingresado no ha sido Registrado, por favor presione el botón limpiar y proceda a llenar el formulario</h1>
                <style>
                    #divmensaje{display: none;}
                </style>   
            @else
            <h3 class="text-center font-semibold">DATOS DEL SOLICITANTE</h3>
            <div class="shadow-md w-full">
                <div class="grid grid-cols-2 gap-3">
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Cédula de Identidad
                            </span>
                            <input type="number" readonly value="{{$permisos->cedula}}" name="cedula" id="id_cedula" autocomplete="off"class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Cédula" />
                            <input type="text" readonly pattern="[A-Za-z ]*" required minLength="3" value="{{$permisos->nombre}}" name="nombre" id="id_nombre" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nombre" />
                        </label>
                    </div>
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Ubicación Geográfica
                            </span>
                            <input type="text" required name="ubicacion" value="{{$permisos->ubicacion}}" id="id_ubicacion" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Ubicación" />
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3" >
                    <div class="px-2 py-2"> 
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Nómina
                            </span>
                            <input type="number" required name="nomina" value="{{$permisos->nomina}}" id="id_nomina" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nómina" />
                        </label>
                    </div>
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Vicepresidencia o Gerencia General
                            </span>
                            <input type="text" required name="vicepresidencia" value="{{$permisos->vicepresidencia}}" id="id_vicepresidencia" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Vicepresidencia" />
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3" >
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Gerencia
                            </span>
                            <input type="text" required name="gerencia" value="{{$permisos->gerencia}}" id="id_gerencia" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Gerencia" />
                        </label>
                    </div>
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Departamento
                            </span>
                            <input type="text" required name="departamento" value="{{$permisos->departamento}}" id="id_departamento" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Departamento" />
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3" >
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Motivo
                            </span>
                            <textarea required name="motivo" autocomplete="off" rows="3" id="id_motivo" class="placeholder:italic placeholder:text-slate-400 mb-2 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Motivo del Permiso">{{$permisos->motivo}}</textarea>
                        </label>
                    </div>
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Supervisor Inmediato
                            </span>
                            <input type="text" required minLength="3" name="supervisor" value="{{$permisos->supervisor}}" id="id_supervisor" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Supervisor" />
                        </label>
                    </div>
                </div>
            </div><br>
            <h3 class="text-center font-semibold">DURACIÓN DEL PERMISO</h3>
                <div class="grid grid-cols-2 gap-3 shadow-md" >
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Fecha Inicio
                            </span>
                            <input type="date" id="fechaActualdias" required name="tiempo_inicio" id="id_inicio" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Desde" />
                        </label>
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Fecha Fin
                            </span>
                            <input type="date" required name="tiempo_fin" autocomplete="off" id="id_fin" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Hasta" />
                        </label>
                    </div>
                    <div class="px-2 py-2">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Total Días
                            </span>
                            <input type="number" required name="total_dias" value="{{$permisos->total_dias}}" id="id_dias" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nro de Días" />
                        </label>
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Total Horas
                            </span>
                            <input type="number" required name="total_horas" value="{{$permisos->total_dias * 8}}" id="id_horas" autocomplete="off" class="placeholder:italic placeholder:text-slate-400 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nro de Horas" />
                        </label><br>
                    </div>
                </div><br>
                @endif
                <div class=" text-center" >
                    <input type ="submit" class="w-28 bg-sky-500 hover:bg-sky-700 text-white mx-3 py-1 px-5 font-semibold rounded-full" value ="IMPRIMIR"/>
                    <input type="reset" onclick="location.href='{{route('index.mostrar2')}}'" value="LIMPIAR" class="w-28 bg-sky-500 hover:bg-sky-700 text-white mx-3 py-1 px-5 font-semibold rounded-full"/>
                    <input type ="button" class="w-52 bg-sky-500 hover:bg-sky-700 text-white mx-3 text-center py-1 px-5 font-semibold rounded-full" value ="VOLVER A LA INTRANET" onclick="location.href='{{route('volver.inicio')}}'"/>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
    <script>
        //Funcion para la fecha actual
        window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
            if(dia<10)
                dia='0'+dia; //agrega cero si el menor de 10
            if(mes<10)
                mes='0'+mes //agrega cero si el menor de 10
            document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
            document.getElementById('fechaActualdias').value=ano+"-"+mes+"-"+dia;
        }
    </script>
@endsection