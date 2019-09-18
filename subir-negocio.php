<?php

require_once 'funciones.php';
// $conexion = conexion ('curso_galeria', 'root', '');

$conexion = conexion ('proyecto', 'root', '');

if (!$conexion) {
    die();
    // header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    // print_r($_FILES); Con este parametro leemos la información de la foto
    $check = @getimagesize($_FILES['foto_negocio']['tmp_name']);

    if ($check !== false) {
        $carpeta_destino = 'logos_negocios/';
        $archivo_subido = $carpeta_destino .  $_FILES['foto_negocio']['name'];
        // echo $archivo_subido; con esto revisamos como queda guardada la foto      
        move_uploaded_file($_FILES['foto_negocio']['tmp_name'], $archivo_subido);

        $statement = $conexion->prepare(
            'INSERT INTO negocios 
            (name_business, username_business, description_business, direccion_negocio, horario_negocio, telefono_negocio, telefono_negociocelular, foto_negocio)
            VALUES 
            (:name_business, :username_business, :description_business, :direccion_negocio, :horario_negocio, :telefono_negocio, :telefono_negociocelular, :foto_negocio)
            '
            );

            $statement->execute(array(
                ':name_business' => $_POST['name_business'],
                ':username_business' => $_POST['username_business'],
                ':description_business' => $_POST['description_business'],
                ':direccion_negocio' => $_POST['direccion_negocio'],
                ':horario_negocio' => $_POST['horario_negocio'],
                ':telefono_negocio' => $_POST['telefono_negocio'],
                ':telefono_negociocelular' => $_POST['telefono_negociocelular'],
                ':foto_negocio' => $_FILES['foto_negocio']['name'],
            ));

            // header('Location: subir-negocio.php');            
            header('Location: index.php');            
            // echo $foto['imagen']

    } else {
        $error = 'Hay un error en la imagen, por favor sube una foto con de menor tamaño';
    }
}

require_once 'header.php';
require_once 'nav-bar.php';
require_once 'views/subir-negocio.php';


require_once 'footer.php';


?>