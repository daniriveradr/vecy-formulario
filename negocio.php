<?php

require_once 'funciones.php';

$conexion = conexion ('proyecto', 'root', '');

if (!$conexion) {
    die();
    // header('Location: error.php');
}


$id = isset($_GET['id_negocio']) ? (int)$_GET['id_negocio'] : false;



if (!$id) {
    header('Location:index.php');
}

$statement = $conexion->prepare('SELECT * FROM negocios WHERE id_negocio = :id_negocio');
$statement->execute(array(':id_negocio' => $id));

$foto = $statement->fetch();

if (!$foto) {
    header('Location:index.php');
}

require_once 'header.php';
require_once 'nav-bar.php';


?>


<div class="row">
    <div class="container">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m3 l3 xl3">
                    <div class="">
                        <img src="logos_negocios/<?php echo $foto['foto_negocio'];?>" alt="<?php echo $foto['foto_negocio']?>" class="responsive-img">
                    </div>
                </div>
                <div class="col s12 m9 l9 xl9">
                    <div class="">
                        <div class="center">
                            <h1 class="nombre-negocio hide-on-med-and-up">
                                <b>
                                    <?php if (!empty($foto['name_business'])) {
                                        echo $foto ['name_business'];
                                    }
                                    ?>
                                </b>
                            </h1>
                            <h1 class="hide-on-med-and-down">
                                <?php if (!empty($foto['name_business'])) {
                                        echo $foto ['name_business'];
                                    }
                                ?>
                            </h1>
                        </div>
                        <div class="center">
                            <a href="#" class="black-text amber darken-1">Restaurante</a> <a href="#" class="black-text">Asadero de pollos</a>
                        </div>
                        <div class="center">
                            <p><?php echo $foto['description_business'];?></p>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l6 xl6">
                                <div class="">
                                    <div class="center">
                                        <p><b>Horario</b></p>
                                    </div>
                                    <p><?php echo $foto['horario_negocio'];?></p>
                                </div>
                            </div>
                            <div class="col s12 m6 l6 xl6">
                                <div class="">
                                    <div class="center">
                                        <p><b>Dirección</b></p>       
                                        <p><?php echo $foto['direccion_negocio'];?><a href="" class="btn blue">Ir</a></p> 
                                        
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col s12">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab"><a href="#test1" class="active">Test 1</a></li>
            <li class="tab"><a class="" href="#test2">Test 2</a></li>
            <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
            <li class="tab"><a href="#test4">Test 4</a></li>
            <li class="tab"><a href="#test5">Test 5</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="card-panel">
            <div class="row">                
                <div id="test1" class="col s12">Test 1</div>
                <div id="test2" class="col s12">Test 2</div>
                <div id="test3" class="col s12">Test 3</div>
                <div id="test4" class="col s12">Test 4</div>
                <div id="test5" class="col s12">Test 5</div>
            </div>
        </div>
    </div>
</div>


<div class="fixed-action-btn toolbar">
    <a class="btn-floating pulse btn-large">
      <i class="large material-icons">add</i>
    </a>
    <ul>
        <li class="waves-effect waves-light light-green accent-4">
            <a href="#!">
                <i class="material-icons"><i class="fab fa-whatsapp"></i></i>
            </a>
        </li>
        <li class="waves-effect waves-light blue darken-4">
            <a href="<?php echo $foto['telefono_negocio'];?>">
                <i class="material-icons">phonelink_ring</i>
            </a>
        </li>
        <li class="waves-effect waves-light deep-orange accent-4">
            <a href="<?php echo $foto['telefono_negociocelular'];?>">
                <i class="material-icons">call</i>
            </a>
        </li>      
    </ul>
  </div>




<?php

require_once 'footer.php';


?>