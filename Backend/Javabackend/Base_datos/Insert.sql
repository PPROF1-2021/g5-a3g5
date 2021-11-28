
/*-----------------------------------------------------------------------------*/
/* paso 01 cargar Tipo cliente                                                 */
/*-----------------------------------------------------------------------------*/
INSERT INTO `tipo_cliente` (`id_tipo_cliente`, `tipocliente`) 
VALUES 
(NULL, 'Consumidor Final'), 
(NULL, 'Monotributo'),
(NULL, 'Responsable inscripto');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `tipo_cliente`   WHERE 1;
/*-----------------------------------------------------------------------------*/
/* paso 02 cargar Provincia                                                    */
/*-----------------------------------------------------------------------------*/
INSERT INTO `provincia` (`id_provincia`, `provincia`) VALUES
(NULL, 'Buenos Aires'),
(NULL, 'Buenos Aires-GBA'),
(NULL, 'Capital Federal'),
(NULL, 'Catamarca'),
(NULL, 'Chaco'),
(NULL, 'Chubut'),
(NULL, 'Córdoba'),
(NULL, 'Corrientes'),
(NULL, 'Entre Ríos'),
(NULL, 'Formosa'),
(NULL, 'Jujuy'),
(NULL, 'La Pampa'),
(NULL, 'La Rioja'),
(NULL, 'Mendoza'),
(NULL, 'Misiones'),
(NULL, 'Neuquén'),
(NULL, 'Río Negro'),
(NULL, 'Salta'),
(NULL, 'San Juan'),
(NULL, 'San Luis'),
(NULL, 'Santa Cruz'),
(NULL, 'Santa Fe'),
(NULL, 'Santiago del Estero'),
(NULL, 'Tierra del Fuego'),
(NULL, 'Tucumán');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `provincia`   WHERE 1;


/*-----------------------------------------------------------------------------*/
/* paso 03 cargar Localidad                                                    */
/*-----------------------------------------------------------------------------*/
INSERT INTO `localidad` (`id_localidad`, `localidad`, `provincia`) 
VALUES 
('3333', 'Córdoba Capital', '32'),
(NULL, 'Alta Gracia', '32'),
(NULL, 'Unquillo', '32'),
(NULL, 'Calera', '32'),
(NULL, 'Villa Allende', '32'),
(NULL, 'Rio Tercero', '32');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `localidad`   WHERE 1;

/*-----------------------------------------------------------------------------*/
/* paso 04 cargar cliente                                                      */
/*-----------------------------------------------------------------------------*/
INSERT INTO `clientes` (`id_cliente`, 
`nombre`, 
`apellido`, 
`cuil`, 
`fecha_alta`, 
`telefono`, 
`e_mail`, 
`localidad`, 
`tipo_cliente`) 
VALUES 
('1', 'Mario', 'Gonzalez', '11111111111', '2021-11-21', '3516805703', 'mario@hotmail.com.ar', '3333', '4'),
('2', 'Gaston', 'Ferreyra', '22222222222', '2021-11-21', '3547989635', 'gastpn@gmail.com', '3333', '4'),
('3', 'Abril', 'Clavaguera', '33333333333', '2021-11-21', '3518789456', 'abril@hotmail.com.ar', '3333', '4'),
('4', 'Laura', 'Heredia', '44444444444', '2021-11-21', '3519852456', 'laura@gmail.com', '3333', '4'),
('5', 'Monica', 'zapata', '55555555555', '2021-11-21', '3535478963', 'monica@hotmail.com.ar', '3333', '4');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `clientes`   WHERE 1;

/*-----------------------------------------------------------------------------*/
/* paso 05 cargar tipo de factura                                              */
/*-----------------------------------------------------------------------------*/
INSERT INTO `tipo_factura` (`id_tipo_factura`, `tipo_factura`) 
VALUES
 ('1', 'A'),
 ('2', 'B'),
 ('3', 'C');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `tipo_factura`   WHERE 1;

/*-----------------------------------------------------------------------------*/
/* paso 06 cargar proveedor                                                    */
/*-----------------------------------------------------------------------------*/
INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `localidad`) 
VALUES 
('1', 'Papeplera del plata', '3333'),
('2', 'Oxigeno industrial', '3333'),
('3', 'Elemon Argentina', '3333'),    
('4', 'Cem Cordoba', '3333'),
('5', 'Geterson Saic', '3333');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `proveedor`   WHERE 1;

/*-----------------------------------------------------------------------------*/
/* paso 06 cargar productos                                                    */
/*-----------------------------------------------------------------------------*/
INSERT INTO `productos` (`id_numero_referencia`, 
`descripcion`, 
`stock`, 
`fecha_lote`, 
`nombre_articulo`, 
`precio_venta`, 
`estado`, 
`proveedor`) 
VALUES 
('1', 'Algodon de maxima densidad', '100', '2021-11-21', 'Algodon', '25', '1', '5'),
('2', 'Gasa super absorbente de maxima calidad industrial', '40', '2021-11-21', 'Gasa', '78', '1', '2'), 
('3', 'Tensiometro digital de alta resolucion', '60', '2021-11-21', 'Tensiometro Digital', '100', '1', '5');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `productos`   WHERE 1;

/*-----------------------------------------------------------------------------*/
/* paso 07 cargar Facturacion                                                  */
/*-----------------------------------------------------------------------------*/
INSERT INTO `facturacion` (`id_factura`, 
`fecha_factura`, 
`codigo_producto`, 
`tipo_factura`, 
`cliente`) 
VALUES 
('1', '2021-11-21', '2', '1', '4'),
('2', '2021-11-21', '2', '2', '2'), 
('3', '2021-11-21', '3', '1', '3');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `facturacion`   WHERE 1;

/*-----------------------------------------------------------------------------*/
/* paso 08 cargar Cargar Usuario                                               */
/*-----------------------------------------------------------------------------*/
INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `cliente`, `estado`) 
VALUES 
('1', 'mario', '111111', '1', '1'), 
('2', 'gaston', '222222', '2', '1'),
('3', 'abril', '333333', '3', '1'),
('4', 'laura', '444444', '4', '1'),
('5', 'monica', '555555', '5', '1');
/*-----------------------------------------------------------------------------*/
SELECT * FROM `usuario`   WHERE 1;
