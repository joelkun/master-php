<h1>Listado de frutas</h1>
<h3><a href="{{route('fruta.crear')}}">Crear fruta</a></h3>

@if(session('status'))
	<p style="background: green; color:white">
		{{session('status')}}
	</p>
@endif

<ul>
	@foreach($frutas as $fruta)
		<li> 
			<a href="{{ route('fruta.detail', $fruta->id) }}">
			{{$fruta->nombre}}
		    </a>
		</li>
	@endforeach
</ul>
