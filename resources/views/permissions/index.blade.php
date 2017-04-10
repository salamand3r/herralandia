@extends('layout')
@section('title')
    <h3>Permisos
        <small>Lista</small>
    </h3>
@endsection
@section('right_title')
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"
                                                                       aria-hidden="true"></i></button>
                    </span>
        </div>
    </div>
@endsection

@section('content')
    <div class="clearfix"></div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                    <a href="{{ route('permissions.create') }}"><button type="button">Agregar</button></a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">ID </th>
                            <th class="column-title">Descripci&oacute;n </th>
                            <th class="column-title">Creado </th>
                            <th class="column-title">Modificado </th>
                            <th class="column-title">Acciones </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $p)
                            <tr class="even pointer" data-id="{{ $p->id }}">
                            <td class=" ">{{ $p->id }}</td>
                            <td class=" ">{{ $p->description }} </td>
                            <td class=" ">{{ $p->created_at }}</td>
                            <td class=" ">{{ $p->updated_at }}</td>
                            <td class=" ">
                                <a style="color: #7E87A9 !important" href="{{ route('permissions.edit', $p->id)}}">Editar</a> |
                                <a style="color: #7E87A9 !important" href="#" class="btn-delete"><i class="fa fa-remove"></i> Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['route' => ['permissions.destroy',':ROW_ID'], 'method' => 'DELETE',
                                    'id' => 'form-delete']) !!}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ '/build/css/sweetalert.css' }}">
@endsection

@section('js')
    <script src="{{ '/build/js/sweetalert.min.js' }}"></script>
    @include('template.partials.delete_row')
@endsection