
    
<?php

// on veirfie si les champs exitent puis on recupere leurs valeurs
$email = isset( $_POST[ 'email' ] ) ? htmlspecialchars( $_POST[ 'email' ] ) : '';
$password = isset( $_POST[ 'password' ] ) ? htmlspecialchars( $_POST[ 'password' ] ) : '';
  
// permet de generer un nom d'utilisateur grace a l'email recu
$username = substr( $email, 0, strpos( $email, '@' ) ) . date( 's' );
  
// permet de generer aleatoirement le code de code pour chaque utitlisateur
function getcolor() {
  $tabcolor = array( "#d50000", "#d57800", "#00acb5", "#06c200", "#cdcd01", "#6e00d5", "#cc00ad", "#8bbe01" );
  return $tabcolor[ rand( 0, count( $tabcolor ) ) ];
}
$color = getcolor();

// on verifie si les champ recupere ne sont pas vide
if ( !empty( $email ) AND !empty( $password ) ) {

  try {
    $db = new PDO( 'mysql:host=localhost;dbname=malicc', 'root', '', array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ) );

    // puis on enregistre dans la base de donnee
    $requete = $db->prepare( 'INSERT INTO user VALUES( NULL, :username, :email, :password, NOW(), :addrip, :color )' ) or die( print_r( $db->errorInfo() ) );
    $requete->execute(
      array(
        'username' => $username,
        'email' => $email,
        'password' => password_hash( $password, PASSWORD_BCRYPT, [ 'cost' => 14 ] ),
        'addrip' => $_SERVER[ 'REMOTE_ADDR' ],
        'color' => $color
      )
    );

    session_start();
    $_SESSION['id'] = $db->lastInsertId(); // on recupere le dernier element id inserer
    $_SESSION[ 'pseudo' ] = $username;
    $_SESSION[ 'email' ] = $email;
    $_SESSION[ 'color' ] = $color;
    header( 'location:../search.php' );

  } catch( Exception $e ) {
      die( 'Erreur : '. $e->getMessage() );
    }
} else {
    header( 'location:../index.php' );
  }

?>

