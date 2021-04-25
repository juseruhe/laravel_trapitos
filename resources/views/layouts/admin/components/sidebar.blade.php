<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fas fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
    </div>
    <!--content sidebar -->
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>

                <!--  producto -->
                <li>
                    <a href="{{route('index.index')}}">
                        <i class="metismenu-icon fas fa-home "></i> Inicio
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "></i>
                    </a>
                </li>


                <!-- Material -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-tshirt"></i>Material
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('material.index')}}" >
                                <i class="metismenu-icon"></i>Mostrar Materiales
                            </a>
                        </li>
                        <li>
                            <a href="{{route('material.create')}}">
                                <i class="metismenu-icon"></i>Crear Material
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- Tipo de Documento  -->
                <a href="#">

                        <i class="metismenu-icon fas fa-address-card"></i>Tipo de Documento
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('tipo_documento.index')}}" >
                                <i class="metismenu-icon"></i>Mostrar Tipo de Documento
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tipo_documento.create')}}" >
                                <i class="metismenu-icon"></i>Crear Tipo de Documento
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Rol  -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-user-tag"></i>Rol
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('rol.index')}}" >
                                <i class="metismenu-icon "></i>Mostrar Rol
                            </a>
                        </li>
                        <li>
                            <a href="{{route('rol.create')}}" >
                                <i class="metismenu-icon"></i>Crear Rol
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- genero -->
                <li>
                    <a href="#">

                        <i class="metismenu-icon fas fa-venus-mars"></i>Genero
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('genero.index')}}" >
                                <i class="metismenu-icon "></i>Mostrar Genero
                            </a>
                        </li>
                        <li>
                            <a href="{{route('genero.create')}}" >
                                <i class="metismenu-icon"></i>Crear Genero
                            </a>
                        </li>
                    </ul>
                </li>
                <!--  Categoria -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-user-tie"></i>Categoria
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('categoria.index')}}" >
                                <i class="metismenu-icon"></i> Mostrar Categorias
                            </a>
                        </li>
                        <li>
                            <a href="{{route('categoria.create')}}" >
                                <i class="metismenu-icon"></i>Crear Categoria
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Clasificación -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-book-open"></i>Clasificación
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('clasificacion.index')}}" >
                                <i class="metismenu-icon"></i>Mostrar Clasificaciones
                            </a>
                        </li>
                        <li>
                            <a href="{{route('clasificacion.create')}}" >
                                <i class="metismenu-icon"></i>Crear Clasificación
                            </a>
                        </li>
                    </ul>
                </li>



                <!--  Usuarios -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-users"></i>Usuarios
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('usuario.index')}}" >
                                <i class="metismenu-icon"></i>Mostrar Usuarios
                            </a>
                        </li>
                        <li>
                            <a href="{{route('usuario.create')}}" >
                                <i class="metismenu-icon"></i>Crear Usuario
                            </a>
                        </li>

                    </ul>
                </li>

                <!--  producto -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-tshirt"></i>Producto
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('producto.index')}}" >
                                <i class="metismenu-icon"></i>Mostrar producto
                            </a>
                        </li>
                        <li>
                            <a href="{{route('producto.create')}}" >
                                <i class="metismenu-icon"></i>Crear producto
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
            </li>
        </div>
    </div>
</div>
