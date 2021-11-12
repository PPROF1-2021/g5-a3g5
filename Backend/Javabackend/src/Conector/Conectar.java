package Conector;
import java.sql.*;
public class Conectar {

    public static void main(String[] args) {
        Connection conexion = null;
        try {
            Class.forName("com.mysql.jdbc.Driver");//Carga Driver
            conexion = DriverManager.getConnection("jdbc:mysql://localhost/proyecto_1_ispc", "", ""); //Conexion             
            Statement s = conexion.createStatement();// Se crea un Statement, para realizar la consulta
            ResultSet rs = s.executeQuery("select * from usuario");// Se realiza la consulta.
            while (rs.next()) {//Se recorre el ResultSet, mostrando por pantalla los resultados.
                System.out.println(rs.getInt("Id") + " " + rs.getString(2) + " " + rs.getDate(3));                
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        } catch (ClassNotFoundException e) {
            System.out.println(e.getMessage());
        } finally { // Se cierra la conexión con la base de datos.
            try {
                if (conexion != null) {
                    conexion.close();
                }
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        }
    }
}