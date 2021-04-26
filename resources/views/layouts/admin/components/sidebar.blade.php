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

            <div class="navbar-collapse">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>



                <!--  inicio -->
                <li>
                    <a href="{{route('index.index')}}">
                        <i class="metismenu-icon fas fa-home " style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Inicio</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">USUARIOS</h6>
                </li>

                <!--  Usuarios -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-users" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Usuarios</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('usuario.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Usuarios</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('usuario.create')}}" >
                                <p style="color:#6eacfd";>Crear Usuarios</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Tipo de Documento  -->
                <li>
                    <a href="#">

                        <i class="metismenu-icon fas fa-address-card" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Tipo de Documento</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('tipo_documento.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Tipo de Documento</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tipo_documento.create')}}" >
                                <p style="color:#6eacfd";>Crear Tipo de Documento</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Rol  -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-user-shield" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Rol</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('rol.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Rol</p>
                                <i class="metismenu-icon "></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('rol.create')}}" >
                                <p style="color:#6eacfd";>Crear Rol</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- genero -->
                <li>
                    <a href="#">

                        <i class="metismenu-icon fas fa-venus-mars" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Genero</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('genero.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Genero</p>
                                <i class="metismenu-icon "></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('genero.create')}}" >
                                <p style="color:#6eacfd";>Crear Genero</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PRODUCTOS</h6>
                </li>

                <!-- Material -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-tshirt" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Material</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('material.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Material</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('material.create')}}">
                                <p style="color:#6eacfd";>Crear Material</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--  producto -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-tshirt" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Producto</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down " style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('producto.index')}}" >
                                <p style="color:#6eacfd";>Mostrar producto</p>
                                <i class="metismenu-icon" style="color:#6eacfd";></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('producto.create')}}" >
                                <p style="color:#6eacfd";>Crear producto</p>
                                <i class="metismenu-icon" style="color:#6eacfd";></i>
                            </a>
                        </li>

                    </ul>
                </li>

                <!--  Categoria -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-user-tie" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Categoria</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('categoria.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Categorias</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('categoria.create')}}" >
                                <p style="color:#6eacfd";>Crear Categoria</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Clasificación -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-book-open" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Clasificación</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('clasificacion.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Clasificaciones</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('clasificacion.create')}}" >
                                <p style="color:#6eacfd";>Crear Clasificaciones</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- talla -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-ruler-combined" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Tallas</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('talla.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Tallas</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('talla.create')}}" >
                                <p style="color:#6eacfd";>Crear Talla</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- color -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon fas fa-palette" style="color:#ffffff";></i>
                        <p style="color:#6eacfd";>Color</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down"  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('color.index')}}" >
                                <p style="color:#6eacfd";>Mostrar Tallas</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('color.create')}}" >
                                <p style="color:#6eacfd";>Crear Talla</p>
                                <i class="metismenu-icon"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            </li>
        </div>
    </div>
</div>
