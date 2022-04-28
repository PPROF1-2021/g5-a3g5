<?php   

    //Formulario 1 - Carga registro cliente
    //Formulario 2 - consulta de login
    //Formulario 3 - carga producto
    //Formulario 4 - carga registro factura



    //include 'conexion_be.php';//conexion a base de datos

    $tipo_form=$_POST['tipo'];//variable que recibe el tipo de formulario que se va a cargar

//---------------------------------------------------------------------------------
//establezco de que formulario vienen los datos con el id campo tipo
//---------------------------------------------------------------------------------
    if ($tipo_form=="1") {//formulario registro cliente nuevo

    echo "formulario registro Cliente nuevo   TIPO = 1";
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
    
    }

//---------------------------------------------------------------------------------
    if ($tipo_form=="3") {//formulario registro producto nuevo

    echo "formulario registro producto nuevo TIPO = 3";

    }

//---------------------------------------------------------------------------------
    if ($tipo_form=="4") {//formulario registro factura nuevo

    echo "formulario registro factura nuevo  TIPO = 4";

    }







?>