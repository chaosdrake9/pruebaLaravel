@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('Roles')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('Ingresar nuevo')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Rol*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('Agregar'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    <a href="{{ route('admin.roles.index') }}" class="btn btn-default">@lang('Volver')</a>
@stop
