
    <!-- BEGIN MENUBAR-->
    <div id="menubar" class="menubar-inverse ">
        <div class="menubar-fixed-panel">
            <div>
                <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="expanded">
                <a href="../../html/dashboards/dashboard.html">
                    <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                </a>
            </div>
        </div>
        <div class="menubar-scroll-panel">

            <!-- BEGIN MAIN MENU -->
            <ul id="main-menu" class="gui-controls">

                <!-- BEGIN ADMIN -->
                <li>
                    <a href="../../html/dashboards/dashboard.html" >
                        <div class="gui-icon"><i class="md md-home"></i></div>
                        <span class="title">Admin  </span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END ADMIN-->

                <!-- BEGIN DASHBOARD -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-area-chart"></i></div>
                        <span class="title">Operaciones</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="/operaciones/dashboard" class="item-menu-bar"><span class="title">Dashboard</span></a></li>
                        <li><a href="/operaciones/locales" class="item-menu-bar"><span class="title">Locales</span></a></li>
                        <li><a href="/operaciones/asignaciones" class="item-menu-bar"><span class="title">Asignaciones</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN COMERCIAL -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-money"></i></div>
                        <span class="title">Comercial</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="/comercial/contrato" class="item-menu-bar"><span class="title">Contrato</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END COMERCIAL-->

                <!-- BEGIN RRHH -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-users fa-fw"></i></div>
                        <span class="title">RRHH</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li class="gui-folder">
                            <a href="javascript:void(0);" class="item-menu-bar"><span class="title">Colaborador</span></a>
                            <ul>
                                <li><a href="/rrhh/colaborador/crear" ><span class="title">Registrar</span></a></li>
                                <li><a href="/rrhh/colaborador/editar" ><span class="title">Editar</span></a></li>
                                <li><a href="/rrhh/colaborador/buscar" ><span class="title">Buscar</span></a></li>
                                <li><a href="/rrhh/colaborador/foto" ><span class="title">Foto</span></a></li>
                            </ul><!--end /submenu -->
                        </li>
                        <li><a href="/rrhh/programacion" class="item-menu-bar"><span class="title">Programacion</span></a></li>
                        <li><a href="/rrhh/asistencia" class="item-menu-bar" ><span class="title">Asistencia</span></a></li>

                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END RRHH -->

            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->
            <!--
            <div class="menubar-foot-panel">
                <small class="no-linebreak hidden-folded">
                    <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                </small>
            </div>
            -->
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->
