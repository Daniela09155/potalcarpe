<div class="leftbar">
            <!-- inicio de slidebar-->
            <div class="sidebar">
                <!-- Añadir logo de la empresa dentro de este div -->
                <div class="logobar">
                    <a href="{{ url('index') }}" class="logo logo-large">
                        <img src="{{ asset('assets/images/logonombre.png') }}" class="img-fluid" alt="logo">
                        
                </a>
                    <a href="index.html" class="logo logo-small"><img src="{{ asset('assets/images/logosm.png') }}" class="img-fluid" alt="logo"></a>
                </div>
                <!-- final de logo empresa -->
                <!-- inicia Profilebar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        @canany('haveaccess',['user.index','role.index', 'permission.index', 'category.index'])
                        <li class="vertical-header">Principal</li>
                        @endcanany
                        @can('haveaccess','user.index')
                        <li>
                            <a href="{{route('user.index')}}">
                              <img src="{{ asset('assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="dashboard"><span>Usuarios</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            
                        </li>
                        @endcan
                        @can('haveaccess','role.index')
                        <li>
                            <a href="{{route('role.index')}}">
                                <i class="ti-alarm-clock"  class="img-fluid" alt="layouts"></i><span>Roles</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                           
                        </li>
                        @endcan
                        @can('haveaccess','permission.index')
                        <li>
                            <a href="{{route('permission.index')}}">
                                <i class="ti-thumb-up"  class="img-fluid" alt="layouts"></i><span>Permisos</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                           
                        </li>
                        @endcan
                        @can('haveaccess','category.index')
                        <li>
                            <a href="{{route('category.index')}}">
                                <i class="ti-thumb-up"  class="img-fluid" alt="layouts"></i><span>Modulos</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                           
                        </li>
                        @endcan
                        @canany('haveaccess',['empleado.index','informes.index', 'calendar.index', 'horarios.index','bandejasolicitud.index'])
                        <li class="vertical-header">Control de asistencias</li>
                        @endcanany
                        @can('haveaccess','empleado.index')
                        <li>
                            <a href="{{ url('admin/empleados') }}">
                                <img src="{{ asset('assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="dashboard"><span>Empleados</span><i class="feather icon-chevron-right pull-right"></i>
                              </a>
                        </li>
                        @endcan
                        @can('haveaccess','informes.index')
                        <li>
                            <a href="{{ url('admin/informes') }}">
                                <i class="ti-book" class="img-fluid" alt="layouts"></i><span>Informes</span><i class="feather icon-chevron-right pull-right"></i>
                              </a>
                        </li>
                        @endcan
                        @can('haveaccess','calendar.index')
                        <li>
                            <a href="{{ url('admin/calendario') }}">
                                <i class="ti-calendar" class="img-fluid" alt="widgets"></i><span>Calendario</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                        </li>
                        @endcan
                        @can('haveaccess','horarios.index')
                        <li>
                            <a href="#">
                                <i class="ti-alarm-clock"  class="img-fluid" alt="layouts"></i><span>Horarios</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{ url('admin/horarios') }}"><i class="mdi mdi-circle"></i>Horarios Fijos</a></li>
                                <li><a href="{{ url('admin/hrflex') }}"><i class="mdi mdi-circle"></i>Horarios Flexibles</a></li>
                            </ul>
                        </li>
                        @endcan
                        @can('haveaccess','solicitud.index')
                        <li>
                            <a href="{{ url('admin/solicitud') }}">
                                <i class="ti-write" class="img-fluid" alt="widgets"></i><span>Solicitudes</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{ url('admin/solicitudcrear') }}"><i class="mdi mdi-circle"></i>Crear solicitud</a></li>
                             
                            </ul>
                        </li> 
                        @endcan 
                        @can('haveaccess','bandejasolicitud.index')
                        <li>
                            <a href="{{ url('solicitudes') }}">
                                <i class="ti-write" class="img-fluid" alt="widgets"></i><span>Filtro solicitudes</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                        </li> 
                        @endcan     
                        @canany('haveaccess',['asistencia.index','estadisticas.index', 'solicitud.index'])
                        <li class="vertical-header">Registro de Asistencias</li>
                        @endcanany 
                        @can('haveaccess','asistencia.index')
                        <li>
                            <a href="{{ url('asistencia') }}">
                                <i class="ti-write" class="img-fluid" alt="widgets"></i><span>Asistencia</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                        </li> 
                        @endcan 
                        @can('haveaccess','estadisticas.index')
                        <li>
                            <a href="{{ url('estadisticas') }}">
                                <i class="ti-write" class="img-fluid" alt="widgets"></i><span>Estadisticas</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                        </li> 
                        @endcan   
                        
                                                   
                    </ul>
                </div>
                <!-- End Profilebar -->
                <!-- Start Navigationbar -->
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->