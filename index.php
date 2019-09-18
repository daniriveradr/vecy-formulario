<?php
require_once 'funciones.php';

$fotos_por_pagina = 4;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion ('proyecto', 'root', '');

if (!$conexion) {
    die();
}

// $statement = $conexion->prepare('SELECT SQL_CALC_FOUND_ROWS * FROM foto_negocio LIMIT $inicio, $fotos_por_pagina');
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM negocios LIMIT $inicio, $fotos_por_pagina");

$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
    header('Location: index.php');
    // header('Location: error.php');
}


// print_r($fotos);

$statement = $conexion->prepare("SELECT FOUND ROWS() AS total_filas");
$statement->execute();
$total_negocios = $statement->fetch()['total_filas'];


$total_paginas = ceil($total_negocios / $fotos_por_pagina);



require_once 'header.php';
require_once 'nav-bar.php';


?>

<title>Vecy</title>



<div class="row">
    <div class="container">
        <div class="center-align">
            <h1>Vecy</h1>
        </div>
    </div>
</div>


<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content center">

    <div class="row">
      <div class="col s12 m12 l12 xl12">
        <h2 class="titulo-negocio-modal hide-on-med-and-up"><b>Diego Suarez EPS Automotriz</b></h2>
        <h2 class="hide-on-med-and-down"><b>Diego Suarez EPS Automotriz</b></h2>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m4 l4 xl4">
        <img class="responsive-img" src="https://picsum.photos/id/1051/500/500"> 
      </div>
    </div>

  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close btn green waves-effect waves-green green white-text">Ver Negocio</a>   
    <a href="#!" class="modal-action modal-close btn btn-floating red"><i class="fas fa-times"></i></a>
  </div>
</div>


<div class="row">
    <div class="container">
        <div class="card-panel">
            <div class="row">
                

                    <?php foreach ($fotos as $foto):?>
                        <div class="col s12 m3 l3 xl3">
                            <!-- <a href="negocio.php?id=<?php echo $foto['name_business'];?>"> -->
                            <a href="negocio.php?id_negocio=<?php echo $foto['id_negocio']; ?>">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="logos_negocios/<?php echo $foto['foto_negocio'];?>" alt="<?php echo $foto['foto_negocio']?>" class="responsive-img">
                                        <!-- <a href="#modal1" class="btn-floating halfway-fab waves-effect waves-light btn modal-trigger orange"><i class="material-icons">add</i></a> -->
                                        <a class="btn-floating halfway-fab waves-effect waves-light btn orange modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="titulo-negocio"><b><?php echo $foto['name_business'];?></b></h2>
                                    </div>
                                    <div class="card-action center">
                                        <a href="negocio.php" class="btn amber">Ir</a>                         
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    

              </div>
              <ul class="pagination center-align">
                    <?php if($pagina_actual > 1):?>
                        <li class="disabled"><a href="index.php?=p<?php echo $pagina_actual - 1 ?>"><i class="material-icons">chevron_left</i></a></li>
                    <?php endif; ?>

                    <?php if($total_paginas !== $pagina_actual):?>
                        <li class="waves-effect"><a href="index.php?=p<?php echo $pagina_actual + 1 ?>"><i class="material-icons">chevron_right</i></a></li>
                    <?php endif; ?>

<!--                     
                    <li class="active orange"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li> -->
                    
              </ul>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';

?>
