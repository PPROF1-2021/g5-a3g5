package Principal;
//import java.sql.*;
//import Conector.Conectar_bd;


import Conector.Conectar_bd;

public class Principal {
    public static void main(String[] args) throws Exception {
        Conectar_bd C1=new Conectar_bd();
        C1.setConecto("15");



        
        System.out.println("carga direccion  "+C1.getConecto());


        System.out.println("Hello, World!");
=======
public class Principal {//clase principal
    public static void main(String[] args) throws Exception {//metodo principal
        int accion=0;//variable para el switch
        Class.forName("com.mysql.jdbc.Driver");//cargo driver de java para mysql
        LimpiarPantalla();//clase que limpia la pantalla
        Operaciones dire=new Operaciones();//instancio la clase operaciones
        dire.setUrl("jdbc:mysql://localhost:3306/proyecto_1_ispc", "root", "1234");
        CabeceraDoc();//clase que imprime la cabecera del documento
        Thread.sleep(6500);//espero 4 segundos
        LimpiarPantalla();//clase que limpia la pantalla
        Opciones_menu();//clase que imprime las opciones del menu   
    //---------------------------------------------------------------------- 
        try {//inicio try
            boolean salir=false;//declaro variable boleana para el while Switch
    //----------------------------------------------------------------------      
            while (salir==false) {//verifico si entro o no al while
    //----------------------------------------------------------------------            
                Scanner opcion = new Scanner(System.in);//capturo el valor ingresado por el usuario
                    try {//try que restringe errores de ingreso de opcion 
                        accion=opcion.nextInt();//metodo scanner captura dato ingresado solo si es entero
                        } catch(Exception e) {//se da la exeption si se ingresa caracteres no permitidos
                        System.out.println("ERROR: el valor ingresado no es una opcion");//mensaje de error
                        accion=0;//restablecemos el valor de la variable a cero para que entre por defecto
                        }
    //----------------------------------------------------------------------
    //Switch para decidir el valor ingresado por el usuario
    //----------------------------------------------------------------------
            switch(accion) {//Inicia el switch
    //---------------------------------------------------------------------- 
                    case 1://generar una conexion
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op1 = Prueba de conexion con base de datos  |");
                            System.out.println("=================================================");
                            System.out.println(""); //salto   
                            Operaciones IA=new Operaciones();  //instancio la clase Insertar
                            IA.verificarConexion();//llamo al metodo verificar conexion       
                            Thread.sleep(2000);//espero 2 segundos
                            LimpiarPantalla();//clase que limpia la pantalla
                            Opciones_menu();//clase que imprime las opciones del menu
                    break;//fin case 1
    //---------------------------------------------------------------------- 
                    case 2://Listar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            Menu_clientes();
                            //System.out.println("=================================================");                    
                            //System.out.println("|   Op2 = Menu clientes             Grupo 5 ISP |");
                            //System.out.println("=================================================");
                            //System.out.println(""); //salto
                            //Operaciones I0=new Operaciones();//instancio la clase insertar
                            //I0.mostrarDatos(); //llamo al metodo mostrarDatos
                    break;//fin case 2
    //---------------------------------------------------------------------- 
                    case 3://Insertar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op3 = Menu Productos           Grupo 5 ISPC |");
                            System.out.println("=================================================");
                            System.out.println(""); //salto
                            Operaciones I1=new Operaciones();//instancio la clase insertar
                            I1.insertarDatos(); //llamo al metodo insertarDatos
                    break;//fin case 3
    //----------------------------------------------------------------------              
                    case 4://Modificar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op4 = Menu Facturas           Grupo 5 ISPC  |");
                            System.out.println("=================================================");
                            System.out.println("");//salto
                            Operaciones I2=new Operaciones();//instancio la clase insertar                         
                            I2.modificarDatos();//llamo al metodo modificarDatos
                    break;//fin case 4
    //-----------------------------------------------------------------------
                    case 5://Eliminar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op5 = Menu tablas soporte      Grupo 5 ISPC |");
                            System.out.println("=================================================");
                            System.out.println("");//salto
                            Operaciones I3=new Operaciones();//instancio la clase insertar
                            I3.eliminarDatos();//llamo al metodo eliminarDatos
                    break;//fin case 5
    //---------------------------------------------------------------------- 
                    case 9://sale del programa
                            System.out.println("");//espacio en blanco
                            System.out.println("    Fin de programa      ");//Fin del programa
                            System.out.println("");//espacio en blanco
                            opcion.close();//cierra scanner
                            salir=true;// sale del while
                    break;//fin case 9
    //---------------------------------------------------------------------- 
                    case 0://Limpia y reinicia opciones
                            LimpiarPantalla();//clase que limpia la pantalla
                            Opciones_menu();//llama a la funcion que muestra las opciones            
                            salir=false;// sale del while
                    break;//fin case 0                
    //----------------------------------------------------------------------                 
                    default://cae a default solo si es reiniciado por la exeption 
                            System.out.println("    Opcion no valida");
                            System.out.println("");
                            Thread.sleep(1000);//espero 1 segundo
                            LimpiarPantalla();//clase que limpia la pantalla
                            Opciones_menu();
                    break; //fin default                   
                    }
                }
            } catch (Exception e) {//cae a la exeption si se ingresa una opcion no valida
                            System.out.println(e);//imprime el error
        }
    }
//--------------------------------------------------------------------------------------
//Void de ayuda al programa principal 
//--------------------------------------------------------------------------------------
    public static void LimpiarPantalla() {//metodo que limpia la pantalla
        try {//inicio try
            new ProcessBuilder("cmd", "/c", "cls").inheritIO().start().waitFor();//limpia la pantalla
                } catch (Exception e) {   
            System.out.println(e);//imprime el error
        }
    }
}
