

<?php
// on veirfie si les champs exitent puis on recupere leurs valeurs
$email = isset( $_POST['email']) ? htmlspecialchars( $_POST[ 'email' ] ) : '';
$password = isset ($_POST['password'] ) ? htmlspecialchars( $_POST[ 'password' ] ) : '';

try {
  $db = new PDO( "mysql:host=localhost;dbname=malicc", 'root', '', array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ) );
  
  // selection tous les elements liste
  $requete = $db->query( 'SELECT id, user_name, email, password, color FROM user' ) or die( print_r( $db->errorInfo() ) );
  
  while( $data = $requete->fetch() ) {

    // verifie si les informations de connexion son correct
    if ( $data[ 'email' ] == $email AND password_verify( $password, $data[ 'password' ] ) OR $data[ 'user_name' ] == $email AND password_verify( $password, $data[ 'password' ] ) ) {

      session_start();
      $_SESSION[ 'id' ] = $data[ 'id' ];
      $_SESSION[ 'pseudo' ] = $data[ 'user_name' ];
      $_SESSION[ 'email' ] = $data[ 'email' ];
      $_SESSION[ 'color' ] = $data[ 'color' ];
      header( 'location:../search.php' );
    } else {
        header( 'location:../index.php' );
    }
  }

  // fermerture du curseur d'analyse de resultat  
  $requete->closeCursor();
    
} catch( Exception $e ) {
    die( 'ERREUR : ' . $e->getMessage() );
  }
  
header( 'location:../index.php' );

?>

