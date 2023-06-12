<h1>{{$titulo}}</h1>
<p>(acción index del controlador PeliculasController)</p>

@if(isset($pagina))
<h3> La pagina es {{$pagina}}</h3>
@endif

<a href="{{route('detalle.pelicula')}}">Ir al detalle</a>