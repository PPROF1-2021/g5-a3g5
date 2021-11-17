package Conector;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.sql.*;


public class Conectar_bd {
private String conecto;

//---------------------------------------
//metodo Setter para guardar la conexion
//---------------------------------------
    public void setConecto(String conecto){
        this.conecto=conecto;
    }   
//---------------------------------------
//metodo Getter recuperar la conexion
//---------------------------------------
    public String getConecto(){
        return conecto;
    }
}