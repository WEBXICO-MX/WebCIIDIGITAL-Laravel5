@extends('layout/template')

@section('main')

    <h1>All Tipo medio comunicación</h1>

    <p>{{ link_to_route('tipo_medio_comunicaciones.create', 'Add new Tipo medio comunicación') }}</p>

    @if ($tipoMedioComunicaciones->count())
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>img</th>
                <th>Activo</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($tipoMedioComunicaciones as $tipoMedioComunicacion)
                <tr>
                    <td>{{ $tipoMedioComunicacion->id }}</td>
                    <td>{{ $tipoMedioComunicacion->nombre }}</td>
                    <td>{{ $tipoMedioComunicacion->img }}</td>
                    <td>{{ $tipoMedioComunicacion->activo }}</td>
                    <td>{{ link_to_route('tipo_medio_comunicaciones.edit', 'Edit', array($tipoMedioComunicacion->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method'
              => 'DELETE', 'route' => array('tipo_medio_comunicaciones.destroy', $tipoMedioComunicacion->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    @else
        No hay Tipo medios de comunicación
    @endif

@stop