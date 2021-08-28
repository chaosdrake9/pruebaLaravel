@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('Usuarios')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('Detalles')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('Nombre')</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('Email')</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('Rol')</th>
                            <td>{{ $user->role->title or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('Volver')</a>
        </div>
    </div>
@stop
