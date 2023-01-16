@extends('layout')
    
@section('tittle', 'Permiso PDF')

@section('content')
    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:11px;
        overflow:hidden;padding:5px 3px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:12px;
        font-weight:normal;overflow:hidden;padding:5px 3px;word-break:normal;}
    .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top;font-size:11px}
    .tg .tg-fymr{border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
    <tr>
        <th class="tg-lboi" style="text-align:center;" colspan="2"><img src="./img/CVG_Corporacion_Venezolana_de_Guayana-logo-3A049A7049-seeklogo.com.png" style="width:70;height:35;"></th>
        <th class="tg-7btt">SOLICITUD Y AUTORIZACIÓN<br>DE PERMISO</th>
        <th class="tg-7btt">FECHA <br><span style="font-weight: none;text-transform:uppercase;">{{$request->fecha_solicitud}}</span></th>
        <th class="tg-7btt">Nro° <br><span style="font-weight: none;text-transform:uppercase;">{{$request->id}}</span></th>
    </tr>
</thead>
<tbody>
    <tr>
        <td class="tg-c3ow" colspan="3"><span style="font-weight:bold">DATOS DEL SOLICITANTE</span></td>
        <td class="tg-7btt" colspan="2">AUTORIZACIÓN (SUPERVISOR)</td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="3"> Funcionario&nbsp;&nbsp;( )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contratado&nbsp;&nbsp;( )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obrero&nbsp;&nbsp;( )</td>
        <td class="tg-fymr" colspan="2" rowspan="2">Nombre del Supervisor Inmediato: <span style="font-weight: none;text-transform:uppercase;">{{$request->supervisor}}</span></td>
    </tr>
    <tr>
        <td class="tg-fymr" colspan="3">Nombre del Solicitante: <span style="font-weight: none;text-transform:uppercase;">{{$request->nombre}}</span></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2"><span style="font-weight:bold">Cédula de Identidad: <span style="font-weight: none;text-transform:uppercase;">{{$request->cedula}}</span></td>
        <td class="tg-fymr">Ubicación Geográfica: <span style="font-weight: none;text-transform:uppercase;">{{$request->ubicacion}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold;">Supervisor: </span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Jefe de Dpto: </span></td>
    </tr>
    <tr>
        <td class="tg-fymr" colspan="3">Vicepresidencia o Gerencia General: <span style="font-weight: none;text-transform:uppercase;">{{$request->vicepresidencia}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Gerente:</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Gerente General:</span></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2"><span style="font-weight:bold;">Gerencia: </span><span style="font-weight:none;text-transform:uppercase;">{{$request->gerencia}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Departamento: <span style="font-weight: none;text-transform:uppercase;">{{$request->departamento}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Vicepresidente:</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Presidente:</span></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="3" rowspan="2"><span style="font-weight:bold">Motivo del Permiso: <span style="font-weight: none;text-transform:uppercase;">{{$request->motivo}}</span></td>
        <td class="tg-7btt" colspan="2">TIPO DE PERMISO</td>
    </tr>
    <tr>
        <td class="tg-0pky"><span>Obligatorio:&nbsp;&nbsp;( )</spanstyle=></td>
        <td class="tg-0pky"><span>Remunerado:&nbsp;&nbsp;( )</span></td>
    </tr>
    <tr>
        <td class="tg-7btt" colspan="3">Duración del Permiso</td>
        <td class="tg-0pky"><span>Potestativo:&nbsp;&nbsp;( )</span></td>
        <td class="tg-0pky"><span>No Remunerado:&nbsp;&nbsp;( )</span></td>
    </tr>
    <tr>
        <td class="tg-fymr" style="width:110px;" >Desde: <span style="font-weight: none;text-transform:uppercase;">{{$request->tiempo_inicio}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> Hasta: <span style="font-weight: none;">{{$request->tiempo_fin}}</span></td>
        <td class="tg-fymr">Total de Dias: <span style="font-weight: none;text-transform:uppercase;">{{$request->total_dias}}</span></td>
        <td class="tg-fymr">Total de Horas: <span style="font-weight: none;text-transform:uppercase;">{{$request->total_horas}}</span></td>
        <td class="tg-fymr" colspan="2">Observaciones: </td>
    </tr>
    <tr>
        <td class="tg-fymr" colspan="2" rowspan="2">NOTA: Se deben anexar los <br>soportes del Permiso</td>
        <td class="tg-0pky" style="height:30;"></td>
        <td class="tg-0pky">Recibido por:  &nbsp;&nbsp;Fecha<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;/</td>
        <td class="tg-0pky">Procesado por:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;/</td>
    </tr>
    <tr>
        <td class="tg-7btt" style="height:15;">Firma del Solicitante</td>
        <td class="tg-0pky">Descuento por nómina:<br>Mes:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semana:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tg-0pky">Expediente de&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha<br>Personal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
</tbody>
</table>
<caption><span style="font-weight:bold">Original: </span>Expediente del Trabajador <span style="font-weight:bold">Copia 1: </span>Unidad Administrativa <span style="font-weight:bold">Copia 2: </span>Trabajador</caption>
<br><br><br>
<table class="tg">
<thead>
    <tr>
        <th class="tg-lboi" style="text-align:center;" colspan="2"><img src="./img/CVG_Corporacion_Venezolana_de_Guayana-logo-3A049A7049-seeklogo.com.png" style="width:70;height:35;"></th>
        <th class="tg-7btt">SOLICITUD Y AUTORIZACIÓN<br>DE PERMISO</th>
        <th class="tg-7btt">FECHA <br><span style="font-weight: none;text-transform:uppercase;">{{$request->fecha_solicitud}}</span></th>
        <th class="tg-7btt">Nro° <br><span style="font-weight: none;text-transform:uppercase;">{{$request->id}}</span></th>
    </tr>
</thead>
<tbody>
    <tr>
        <td class="tg-c3ow" colspan="3"><span style="font-weight:bold">DATOS DEL SOLICITANTE</span></td>
        <td class="tg-7btt" colspan="2">AUTORIZACIÓN (SUPERVISOR)</td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="3"> Funcionario&nbsp;&nbsp;( )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contratado&nbsp;&nbsp;( )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obrero&nbsp;&nbsp;( )</td>
        <td class="tg-fymr" colspan="2" rowspan="2">Nombre del Supervisor Inmediato: <span style="font-weight: none;text-transform:uppercase;">{{$request->supervisor}}</span></td>
    </tr>
    <tr>
        <td class="tg-fymr" colspan="3">Nombre del Solicitante: <span style="font-weight: none;text-transform:uppercase;">{{$request->nombre}}</span></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2"><span style="font-weight:bold">Cédula de Identidad: <span style="font-weight: none;text-transform:uppercase;">{{$request->cedula}}</span></td>
        <td class="tg-fymr">Ubicación Geográfica: <span style="font-weight: none;text-transform:uppercase;">{{$request->ubicacion}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold;">Supervisor: </span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Jefe de Dpto: </span></td>
    </tr>
    <tr>
        <td class="tg-fymr" colspan="3">Vicepresidencia o Gerencia General: <span style="font-weight: none;text-transform:uppercase;">{{$request->vicepresidencia}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Gerente:</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Gerente General:</span></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2"><span style="font-weight:bold;">Gerencia: </span><span style="font-weight:none;text-transform:uppercase;">{{$request->gerencia}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Departamento: <span style="font-weight: none;text-transform:uppercase;">{{$request->departamento}}</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Vicepresidente:</span></td>
        <td class="tg-0pky"><span style="font-weight:bold">Presidente:</span></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="3" rowspan="2"><span style="font-weight:bold">Motivo del Permiso: <span style="font-weight: none;text-transform:uppercase;">{{$request->motivo}}</span></td>
        <td class="tg-7btt" colspan="2">TIPO DE PERMISO</td>
    </tr>
    <tr>
        <td class="tg-0pky"><span>Obligatorio:&nbsp;&nbsp;( )</spanstyle=></td>
        <td class="tg-0pky"><span>Remunerado:&nbsp;&nbsp;( )</span></td>
    </tr>
    <tr>
        <td class="tg-7btt" colspan="3">Duración del Permiso</td>
        <td class="tg-0pky"><span>Potestativo:&nbsp;&nbsp;( )</span></td>
        <td class="tg-0pky"><span>No Remunerado:&nbsp;&nbsp;( )</span></td>
    </tr>
    <tr>
        <td class="tg-fymr" style="width:110px;" >Desde: <span style="font-weight: none;text-transform:uppercase;">{{$request->tiempo_inicio}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> Hasta: <span style="font-weight: none;">{{$request->tiempo_fin}}</span></td>
        <td class="tg-fymr">Total de Dias: <span style="font-weight: none;text-transform:uppercase;">{{$request->total_dias}}</span></td>
        <td class="tg-fymr">Total de Horas: <span style="font-weight: none;text-transform:uppercase;">{{$request->total_horas}}</span></td>
        <td class="tg-fymr" colspan="2">Observaciones: </td>
    </tr>
    <tr>
        <td class="tg-fymr" colspan="2" rowspan="2">NOTA: Se deben anexar los <br>soportes del Permiso</td>
        <td class="tg-0pky" style="height:30;"></td>
        <td class="tg-0pky">Recibido por:  &nbsp;&nbsp;Fecha<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;/</td>
        <td class="tg-0pky">Procesado por:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;/</td>
    </tr>
    <tr>
        <td class="tg-7btt" style="height:15;">Firma del Solicitante</td>
        <td class="tg-0pky">Descuento por nómina:<br>Mes:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semana:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tg-0pky">Expediente de&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha<br>Personal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
</tbody>
</table>
<caption><span style="font-weight:bold">Original: </span>Expediente del Trabajador <span style="font-weight:bold">Copia 1: </span>Unidad Administrativa <span style="font-weight:bold">Copia 2: </span>Trabajador</caption>

@endsection