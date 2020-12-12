@section('navbar')
    <div class="nav">
        <div class="wrap">
            <div class="logo logo_small">" Poets "</div>
            <nav>
                <ul>
                    <li><a href="{{action('Crud@index')}}">Inicio</a></li>
                    <li><a href="{{action('Crud@create')}}">Agregar Poet</a></li>
                    <li><a href="https://www.instagram.com/lilianalopez_1948/?hl=es-la">Contacto</a></li>
                    <li><a href="https://github.com/L1liana">Git Hub</a></li>
                </ul>
            </nav>
        </div>
    </div>
@show
