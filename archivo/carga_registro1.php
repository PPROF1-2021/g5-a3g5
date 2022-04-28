
<?php   

include 'conexion_be.php';//conexion a base de datos





$tipo_form=$_POST['tipo'];//variable que recibe el tipo de formulario que se va a cargar

//---------------------------------------------------------------------------------
//establezco de que formulario vienen los datos con el id campo tipo
//---------------------------------------------------------------------------------
    if ($tipo_form=="1") {//formulario registro cliente nuevo

    echo "formulario registro Cliente nuevo";
    /*
    $nombre=$_POST['nombre'];//recibimos el nombre
    $apellido=$_POST['apellido'];//recibimos el apellido
    $email=$_POST['email'];//recibimos el email
    $pass1=$_POST['clave1'];//recibimos la clave
    $pass2=$_POST['clave2'];//recibimos la clave

    $insertar="INSERT INTO`usuario`(`id_usuario`,`usuario`,`clave`, `cliente`, `estado`)
           VALUES (NULL,'$nombre','$pass1','1','1')";//insertamos los datos en la tabla usuarios

    $ejecutar = mysqli_query($conexion, $insertar);//conectamos y ejecutamos la Carga
        */
    }else

//---------------------------------------------------------------------------------
    if ($tipo_form=="2") {//formulario registro producto nuevo


    echo "formulario registro producto nuevo";
        /*
    //$nombre=$_POST['nombre'];//recibimos el nombre


    //$insertar="INSERT INTO usuario (nombre, apellido, email, clave) 
    //$insertar="INSERT INTO`usuario`(`id_usuario`,`usuario`,`clave`, `cliente`, `estado`)
    //       VALUES (NULL,'$nombre','$pass1','1','1')";//insertamos los datos en la tabla usuarios

    //$ejecutar = mysqli_query($conexion, $insertar);//conectamos y ejecutamos la Carga
        */
    }









?>