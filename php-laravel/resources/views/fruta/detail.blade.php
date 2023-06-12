<h1>{{$fruta->nombre}}</h1>
<p>
	{{$fruta->descripcion}}
</p>
<a href="{{route('fruta.delete', $fruta->id)}}">Eliminar</a>
<a href="{{route('fruta.edit', $fruta->id)}}">Actualizar</a>