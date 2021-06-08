






<h3><?= $nota->getNombre();?></h3>
<h4><?= $nota->getContenido();?></h4>





<?php var_dump($nota->fetch_object()); ?>





<h1>Listado de notas: </h1>
<!-- devuelve un array de objetos  fetch_object -->
<?php while( $nota = $notas->fetch_object() ): ?>

    

<?= $nota->titulo ?> - <?= $nota->fecha ?> <br>

<?php endwhile; ?>