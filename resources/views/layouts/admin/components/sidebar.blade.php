<div class="app-sidebar sidebar-shadow">
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <!--content sidebar -->
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner fondo2">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li>
                    <a class="nav-link  active"  href="{{route('usuario.index')}}">
                        <i class="metismenu-icon fas fa-home " style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Inicio</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                </li>




                <li class="app-sidebar__heading">Usuarios</li>
                <li>
                    <a class="nav-link  active"  href="#">
                        <i class="metismenu-icon fas fa-users" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Usuario</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('usuario.index')}}">
                                <i class="metismenu-icon"></i>Mostrar usuarios
                            </a>
                        </li>
                        <li>
                            <a href="{{route('usuario.create')}}" >
                                <i class="metismenu-icon"></i>Crear usuarios
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-address-card" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Tipo de Documento</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('tipo_documento.index')}}">
                                <i class="metismenu-icon"></i>Mostrar tipo de documento
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tipo_documento.create')}}" >
                                <i class="metismenu-icon"></i>Crear tipo de documento
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-user-shield" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Rol</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('rol.index')}}">
                                <i class="metismenu-icon"></i>Mostrar rol
                            </a>
                        </li>
                        <li>
                            <a href="{{route('rol.create')}}" >
                                <i class="metismenu-icon"></i>Crear rol
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-venus-mars" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Genero</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('genero.index')}}">
                                <i class="metismenu-icon"></i>Mostrar genero
                            </a>
                        </li>
                        <li>
                            <a href="{{route('genero.create')}}" >
                                <i class="metismenu-icon"></i>Crear genero
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="app-sidebar__heading">Productos</li>
                <li>
                    <a class="nav-link  active"  href="#">
                        <i class="metismenu-icon fas fa-tshirt" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Producto</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('producto.index')}}">
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

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-user-tie" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Categoria</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('categoria.index')}}">
                                <i class="metismenu-icon"></i>Mostrar categoria
                            </a>
                        </li>
                        <li>
                            <a href="{{route('categoria.create')}}" >
                                <i class="metismenu-icon"></i>Crear categoria
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-book-open" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>clasificacion</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('clasificacion.index')}}">
                                <i class="metismenu-icon"></i>Mostrar clasificacion
                            </a>
                        </li>
                        <li>
                            <a href="{{route('clasificacion.create')}}" >
                                <i class="metismenu-icon"></i>Crear clasificacion
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-tshirt" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Material</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('material.index')}}">
                                <i class="metismenu-icon"></i>Mostrar material
                            </a>
                        </li>
                        <li>
                            <a href="{{route('material.create')}}" >
                                <i class="metismenu-icon"></i>Crear material
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-ruler-combined" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Talla</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('talla.index')}}">
                                <i class="metismenu-icon"></i>Mostrar talla
                            </a>
                        </li>
                        <li>
                            <a href="{{route('talla.create')}}" >
                                <i class="metismenu-icon"></i>Crear talla
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link  active" href="#">
                        <i class="metismenu-icon fas fa-palette" style="color:#f12121fb";></i>
                        <p style="color:#ffffffe3";>Color</p>
                        <i class="metismenu-state-icon fas fa-arrow-circle-down "  style="color:#6eacfd";></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('color.index')}}">
                                <i class="metismenu-icon"></i>Mostrar color
                            </a>
                        </li>
                        <li>
                            <a href="{{route('color.create')}}" >
                                <i class="metismenu-icon"></i>Crear color
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
