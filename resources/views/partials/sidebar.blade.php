@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">

            <!-- Principal - Home -->
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i>
                    <span class="title">Bienvenido</span>
                </a>
            </li>

                        <!-- Configuración Ususarios y Roles -->
            @can('user_management_access')
                <li class="">
                    <a href="#">
                        <i class="fa fa-cog"></i>
                        <span class="title">Manejo de Usuarios</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <!-- Roles - Permisos -->
                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-desktop"></i>
                                    <span class="title">Roles</span>
                                </a>
                            </li>
                        @endcan

                        <!-- Usuarios -->
                        @can('user_access')
                            <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-user-circle-o"></i>
                                    <span class="title">Usuarios</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            <!-- Cambiar Contraseña -->
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Cambiar Contraseña</span>
                </a>
            </li>

            <!-- Cerrar Sesión -->
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span class="title">Cerrar Sesión</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
