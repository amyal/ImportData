/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package javaapplication1;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
/**
 *
 * @author Rachid
 */
public class ImportData {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        DBase db = new DBase();
        Connection conn = db.connect("jdbc:mysql://localhost/importData","root","");
        db.importD(conn,args[0]);
        
        String dirpath = "";
        Scanner scanner1 = new Scanner(System.in);
        while (true) {
            System.out.println("Please give the directory:");
            dirpath = scanner1.nextLine();
            File fl = new File(dirpath);
            if (fl.canRead())

                break;
            System.out.println("Error:Directory does not exists");
    }
    
}
    
}

