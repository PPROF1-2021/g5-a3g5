package Principal;//package Principal;
import java.util.Scanner;//
import Clases.*;//importa clases
import java.time.LocalDateTime;//importa clase
import java.time.format.DateTimeFormatter;//importa clase

public class Principal {//clase principal
    public static void main(String[] args) throws Exception {//metodo principal
        int accion=0;//variable para el switch
        Class.forName("com.mysql.jdbc.Driver");//cargo driver de java para mysql
        LimpiarPantalla();//clase que limpia la pantalla
        Operaciones dire=new Operaciones();//instancio la clase operaciones
        dire.setUrl("jdbc:mysql://localhost:3306/proyecto_1_ispc", "root", "1234");
        CabeceraDoc();//clase que imprime la cabecera del documento
        Thread.sleep(6000);//espero 4 segundos
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
                            System.out.println("=================================================");                    
                            System.out.println("|   Op2 = Listado de alumnos Grupo 5 ISPC       |");
                            System.out.println("=================================================");
                            System.out.println(""); //salto
                            Operaciones I0=new Operaciones();//instancio la clase insertar
                            I0.mostrarDatos(); //llamo al metodo mostrarDatos
                    break;//fin case 2
    //---------------------------------------------------------------------- 
                    case 3://Insertar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op3 = Carga nuevo alumno Grupo 5 ISPC       |");
                            System.out.println("=================================================");
                            System.out.println(""); //salto
                            Operaciones I1=new Operaciones();//instancio la clase insertar
                            I1.insertarDatos(); //llamo al metodo insertarDatos
                    break;//fin case 3
    //----------------------------------------------------------------------              
                    case 4://Modificar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op4 = Modificar DNI de alumno Grupo 5 ISPC  |");
                            System.out.println("=================================================");
                            System.out.println("");//salto
                            Operaciones I2=new Operaciones();//instancio la clase insertar                         
                            I2.modificarDatos();//llamo al metodo modificarDatos
                    break;//fin case 4
    //-----------------------------------------------------------------------
                    case 5://Eliminar datos
                            LimpiarPantalla();//clase que limpia la pantalla
                            System.out.println("=================================================");                    
                            System.out.println("|   Op5 = Eliminar registro alumno Grupo 5 ISPC |");
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
//--------------------------------------------------------------------------------------
        public static void CabeceraDoc() {//metodo que imprime la cabecera del programa
            DateTimeFormatter cfecha = DateTimeFormatter.ofPattern("dd/MM/yyyy");//formato de fecha
            DateTimeFormatter chora = DateTimeFormatter.ofPattern("HH:mm");//formato de hora
            String cmotivo="Practica profesionalizante";//motivo de la ejecucion del programa
            String institucion="| Institucion : ISPC  Materia : Practica profesionalizante 1";//institucion del programa
            String total="| Aula  3  Grupo 5  :  Ejercicio : "+cmotivo+" |";//total del programa
            String Abril=("| Integrantes :  Clavaguera, Abril");//integrantes del programa
            String Laura=("|                Heredia, Laura ");//integrantes del programa
            String Monica=("|                Zapata, Monica ");//integrantes del programa
            String Gaston=("|                Ferreyra, Gaston ");//integrantes del programa
            String Mario=("|                Gonzalez, Mario ");//integrantes del programa
            String fecha=("| Cordoba Argentina - Fecha : "+cfecha.format(LocalDateTime.now())+"  Hora : "+chora.format(LocalDateTime.now()));//fecha del programa
                try {//try catch para imprimir la cabecera
                    new ProcessBuilder("cmd", "/c", "cls").inheritIO().start().waitFor();//limpia la pantalla
                    } catch (Exception e) {
                }
                for (int x=0; x<total.length(); x++) {//for para imprimir la cabecera
                    System.out.print("="); //imprime una linea de =          
                }          
        System.out.println();//salto
        System.out.print(fecha);//imprime la institucion
        Relleno(total, fecha);//metodo que rellena la linea con espacios
        System.out.print(institucion);//imprime la institucion   
        Relleno(total, institucion);//metodo que rellena la linea con espacios
        System.out.println(total);//imprime la linea total
        System.out.print(Abril);//imprime el integrante
        Relleno(total, Abril);//metodo que rellena la linea con espacios
        System.out.print(Laura);//imprime el integrante
        Relleno(total, Laura);//metodo que rellena la linea con espacios     
        System.out.print(Monica);//imprime el integrante
        Relleno(total, Monica);//metodo que rellena la linea con espacios
        System.out.print(Gaston);//imprime el integrante
        Relleno(total, Gaston);//metodo que rellena la linea con espacios       
        System.out.print(Mario);//imprime el integrante
        Relleno(total, Mario);//metodo que rellena la linea con espacios
            for (int k=0; k<3; k++) {
            if (k==0) {//if para imprimir la linea de =
                for (int z=0; z<total.length(); z++) {//for para imprimir la linea de =
                    System.out.print("="); //imprime una linea de =          
                }
            }
            System.out.println();//salto de linea 
            }
}
//--------------------------------------------------------------------------------------
    public static void Relleno(String t1, String t2){//metodo que rellena la linea con espacios
        for (int z=0; z<t1.length(); z++) {//for para rellenar la linea con espacios
            if (z!=t1.length()-t2.length()-1) {//if para rellenar la linea con espacios
                System.out.print(" ");//imprime un espacio
                }else{//else para rellenar la linea con espacios
                System.out.println("|");//imprime una linea de |
                t1="";//vacio la variable t1
                t2="";//vacio la variable t2
                break;                          
            }      
        } 
    }
//--------------------------------------------------------------------------------------
    public static void Opciones_menu(){//metodo que muestra las opciones del programa
        int ancho=98;//ancho de la linea       
        String opcion1="|   Conectar con base de datos presione :  1    |";//opcion 1
        String opcion2="|   Listar registro alumnos    presione :  2    |";//opcion 2
        String opcion3="|   Insertar registro alumnos  presione :  3    |";//opcion 3
        String opcion4="|   Modificar registro alumnos presione :  4    |";//opcion 4
        String opcion5="|   Eliminar registro alumno   presione :  5    |";//opcion 5
        String opcion6="|   Salir del programa         presione :  9    |";//opcion 6
        String opcion7="|   Menu de ayuda              presione :  0    |";//opcion 7
        for (int x=0; x<ancho; x++) {//for para imprimir la linea de =
            if(ancho==0){//if para salir del for
                break;//      
            }else{//else para imprimir la linea de =
                System.out.print("=");//imprime una linea de =
                ancho--;//resta uno al ancho    
            }          
        } 
        System.out.println("");//salto de linea
        System.out.println(opcion1);//imprime la opcion 1
        System.out.println(opcion2);//imprime la opcion 2
        System.out.println(opcion3);//imprime la opcion 3
        System.out.println(opcion4);//imprime la opcion 4
        System.out.println(opcion5);//imprime la opcion 5
        System.out.println(opcion6);//imprime la opcion 6
        System.out.println(opcion7);//imprime la opcion 7
        ancho=98;//vuelve el ancho a 98
        for (int z=0; z<ancho; z++) {//for para imprimir la linea de =
            if(ancho==0){//if para salir del for
                break;  //final del for
            }else{//else para imprimir la linea de =
                System.out.print("=");//
                ancho--;    //resta uno al ancho
            }          
        }
        System.out.println("");//salto de linea
        System.out.println("");//salto de linea
        System.out.print("    Ingrese opcion >>>>>>>>  : ");//imprime el mensaje
    }   
//--------------------------------------------------------------------------------------
//finde clase
//--------------------------------------------------------------------------------------
}