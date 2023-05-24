<h3><?=$nota->getTitulo()?></h3>
<h4><?=$nota->getDescripcion()?></h4>

<h1>Listado de notas</h1>
<?php while ($nota=$notas->fetch_object()): ?>
<?=$nota->titulo?> -- <?=$nota->fecha?> </br>
<?php endwhile; ?>