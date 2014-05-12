import javaapplication1.Clavier;
import java.sql.* ;

public class DBase {
	
    static final String CONN_URL = "jdbc:oracle:thin:@hopper.e.ujf-grenoble.fr:1521:ufrima";   // test
	static Connection conn = null;
	static Statement requete; 
	static final String USER = "baiy";
	static final String PASSWD = "bd2010";
	
	 
	private static void menu() {
		System.out.println("*** Choisir une action a effectuer : ***");
		System.out.println("0 : Quitter");
		System.out.println("1 : Selection (consultation des comptes)");
		System.out.println("2 : Insertion (creation d'un compte)");
		System.out.println("3 : Debit");
		System.out.println("4 : Credit");
		System.out.println("5 : Commit");
		System.out.println("6 : Rollback");
		System.out.println("7 : getIsolation"); // Obtenir le niveau d'isolation courant 
		System.out.println("8 : setIsolation");  // définir le niveau d'isolation
	}
     
	private static void selection() throws SQLException {
		    requete = conn.createStatement();
            ResultSet resultat =requete.executeQuery("select * from Comptes");
            while(resultat.next()){
            System.out.println("Numero Compte = " + resultat.getString("NC") + ", Nom = " + resultat.getString("NOM") + ",Solde = " + resultat.getString("SOLDE")); 
			}
			resultat.close();
			requete.close();
       }
	private static void insertion() throws SQLException {
		//static Statement requete = conn.createStatement();
		requete = conn.createStatement();
		int nc = Clavier.lireEntier("Entrez un numero de compte");
                System.out.println("entrez le nom du titulaire du compte");
		String nom = Clavier.lireChaine();
		int solde = Clavier.lireEntier("Entrez un solde pour ce compte");
		requete.executeQuery("insert into comptes values("+nc+",'"+nom+"',"+solde+")");
		System.out.println("Insertion effectuée");
		requete.close();
	}	 

	private static void debit() throws SQLException {
	//static Statement requete = conn.createStatement();
	    requete = conn.createStatement();
		int a = Clavier.lireEntier("Entrez le numero du compte de debiter ");
		int b = Clavier.lireEntier("Entrez Le montant à debiter");
		requete.executeQuery("update comptes set solde = (solde - "+b+")where nc ="+a);
		System.out.println("debit effectué");
		requete.close();
	}		

	private static void credit() throws SQLException {
		//static Statement requete = conn.createStatement();
		requete = conn.createStatement();
		int a = Clavier.lireEntier("Entrez le numero du compte de crediteur");
		int b = Clavier.lireEntier("Entrez Le montant à crediteur");
		requete.executeQuery("update comptes set solde = (solde + "+b+")where nc ="+a);
		System.out.println("crediteur effectué");
		requete.close();
	}			

	private static void commit() throws SQLException {
		conn.commit();
		System.out.println("commit effectué");
	}				

	private static void rollback() throws SQLException {
		conn.rollback();
		System.out.println("rollback effectué");
	}		
	
	private static void getIsolation() throws SQLException {
		System.out.println(conn.getTransactionIsolation());
	}
// l'utilisateur a le choix entre les 5 types de niveaux mais, seuls les niveaux 2 et 8 sont gérés par Oracle
	private static void setIsolation() throws SQLException {
		int a = Clavier.lireEntier("Entrez le numero du niveau d'isolation souhaité,8=serializable");
	    conn.setTransactionIsolation(a);
		System.out.println("Changement du niveau d'isolation effectué");
	}	
	
    public static void main(String args[]) {

        try {
        
        int action;
        boolean exit = false;

  	    // Enregistrement du driver Oracle
  	    System.out.print("Loading Oracle driver... "); 
  	    DriverManager.registerDriver(new oracle.jdbc.driver.OracleDriver());
  	    System.out.println("loaded");
  	    
  	    // Etablissement de la connection
  	    System.out.print("Connecting to the database... "); 
  	    conn= DriverManager.getConnection(CONN_URL,USER,PASSWD) ;
  	    System.out.println("connected");
  	    
  	    // Desactivation de l'autocommit
  	    conn.setAutoCommit(false);
  	    System.out.println("Autocommit disabled");

  	    while(!exit) {
  	    	menu();
  	    	action = Clavier
                        .lireEntier("votre choix ?");
  	    	switch(action) {
  	    		case 0 : exit = true; break;
  	    		case 1 : selection(); break;
  	    		case 2 : insertion(); break;
  	    		case 3 : debit(); break;
  	    		case 4 : credit(); break;
  	    		case 5 : commit(); break;
  	    		case 6 : rollback(); break;
  	    		case 7 : getIsolation(); break;
  	    		case 8 : setIsolation(); break;
  	    		default : System.out.println("=> choix incorrect"); menu();
  	    	}
  	    } 	    

  	    // Liberation des ressources et fermeture de la connexion...
		
  	    conn.close();
  	    System.out.println("au revoir");
  	    
  	    // traitement d'exception
          } 
		  catch (SQLException e) {
              System.err.println("failed");
              System.out.println("Affichage de la pile d'erreur");
  	          e.printStackTrace(System.err);
              System.out.println("Affichage du message d'erreur");
              System.out.println(e.getMessage());
              System.out.println("Affichage du code d'erreur");
  	          System.out.println(e.getErrorCode());	 
			  if(e.getErrorCode()==60 || e.getErrorCode()==8177){
			  //conn.rollback();
		      System.out.println("rollback effectué");}
			 		  
			

          }
     }
	}