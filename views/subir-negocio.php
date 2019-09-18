<title>Subir negocio</title>

<div class="container">
    <div class="col s12 m12 l12 xl12">
        <div class="center-align">
            <title><h1>Subir negocio</h1></title>
        </div>
    </div>
    <div class="row">       
        <div class="card-panel">

            <!-- <form action="" method="get">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name_business" type="text" name="name_business" class="validate" data-length="30">
                        <label class="active" for="name_business">Nombre Negocio</label>
                    </div>
                    <div class="row">
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field col s12 center">
                                <textarea id="description_business" name="description_business" class="materialize-textarea" data-length="155"></textarea>
                                <label for="description_business" >Descripción de tu Negocio</label>
                                <p class="left-align">Por favor al momento de colocar la Descripción no queremos que solo coloques lo que hace tu negocio como por ejemplo <a class="red-text">(Negocio de comida rápida)</a>. Queremos que seas más especifico, coloca el tipo de comida, imagina la forma en como buscan las personas, algo como, <a class="green-text">(Ricas hamburguesas tipo americanas en la zona de bogota, recetas unica, hamburguesas veganas, etc)</a> acá debes vender tu producto. </p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row center">
                        <div class="input-field col s6">
                            <input type="submit" value="subir-datos" class="btn orange"> 
                        </div>
                    </div>
                </div>
            </form> -->


 
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                <div class="row center">
                    <div class="input-field col s6">
                        <input id="name_business" type="text" name="name_business" class="validate" data-length="30">
                        <label class="active" for="name_business">Nombre Negocio</label>
                    </div>
                </div>

                <div class="row center">
                    <div class="input-field col s6">
                        <input id="username_business" type="text" name="username_business" class="validate" data-length="30">
                        <label class="active" for="username_business">Nombre de usuario negocio</label>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field col s12 center">
                                <textarea id="description_business" name="description_business" class="materialize-textarea" data-length="155"></textarea>
                                <label for="description_business" >Descripción de tu Negocio</label>
                                <p class="left-align">Por favor al momento de colocar la Descripción no queremos que solo coloques lo que hace tu negocio como por ejemplo <a class="red-text">(Negocio de comida rápida)</a>. Queremos que seas más especifico, coloca el tipo de comida, imagina la forma en como buscan las personas, algo como, <a class="green-text">(Ricas hamburguesas tipo americanas en la zona de bogota, recetas unica, hamburguesas veganas, etc)</a> acá debes vender tu producto. </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row center">
                    <div class="input-field col s6">
                        <input id="direccion_negocio" type="text" name="direccion_negocio" class="validate" data-length="50">
                        <label class="active" for="direccion_negocio">Dirección Negocio</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field col s12 center">
                                <textarea id="horario_negocio" type="text" name="horario_negocio" class="materialize-textarea"></textarea>
                                <label for="horario_negocio">Horario de atención en tu Negocio</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row center">
                    <div class="input-field col s6">
                        <input id="telefono_negocio" type="number" name="telefono_negocio" class="validate" data-length="50">
                        <label class="active" for="telefono_negocio">Telefono Negocio</label>
                    </div>
                </div> 

                <div class="row center">
                    <div class="input-field col s6">
                        <input id="telefono_negociocelular" type="number" name="telefono_negociocelular" class="validate" data-length="50">
                        <label class="active" for="telefono_negociocelular">Celular Negocio</label>
                    </div>
                </div>

                <div class="row center">
                    <div class="input-field col s6">
                        <?php if(isset($error)) :?>
                            <p class="red-text">
                                <b>
                                    <?php echo $error; ?>
                                </b>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <div class="file-field input-field">
                            <div class="btn orange ">

                                <input type="file" name="foto_negocio" id="foto_negocio">
                                <label for="foto_negocio" class="white-text"></label>
                                <span>File</span>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row center">
                    <div class="input-field col s6">
                        <input type="submit" value="subir-datos" class="btn orange"> 
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>