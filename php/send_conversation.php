

<?php


if ( isset( $_POST[ 'expediteur_id' ] ) ) {
    // $expediteur = $_POST[ 'expediteur_id' ] ;
    // $_SESSION['expediteur'] = $_POST[ 'expediteur_id' ];
  }

?>


<?php

// 
session_start();
// unset( $_SESSION['expediteur'] );

try {

  $db = new PDO( 'mysql:host=localhost;dbname=malicc', 'root', '', array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ) );
  
  /////////////////////////////////////////////////////////////////////
  // requetes pour afficher les messages et marque un message comme lue
  
  
  // on verifie si l'id expediteur a ete envoyee par ajax au moment du click
  // print( $_POST );
  if ( isset( $_POST[ 'expediteur_id' ] ) ){
    // on recupere l'id
    $expediteur = htmlspecialchars( $_POST[ 'expediteur_id' ] ) ;
    $_SESSION['expediteur'] = $expediteur;
  }
  
  if ( isset( $_SESSION['expediteur'] ) ) {
    // echo  '=>' .  $_SESSION[ 'expediteur' ];
    // ici je selectionne les informations suivantes, de l'expediteur(celui qui envoie le message) 
    $display_msg = $db->query( 'SELECT user.user_name nom, user.color color, chat.message, chat.expediteur_id, chat.destinataire_id, HOUR( chat.date_send ) heure, MINUTE( chat.date_send ) minute
    FROM chat
    INNER JOIN user
    ON user.id = chat.expediteur_id ' ) or die ( print_r( $db->errorInfo() ) );

    // permet de marquer un message comme lu
    $marquer_lu = $db->prepare( 'UPDATE conversation SET lu = 1 WHERE expediteur_id = :expediteur AND destinataire_id = :destinataire' );
    $marquer_lu->execute( array(
      'expediteur' => $_SESSION[ 'expediteur' ] ,
      'destinataire' =>  $_SESSION[ 'id' ] 
    ) );

    while( $data = $display_msg->fetch() ) {
      
      // ajoute un zero devant la date si il est inferieur a 10
      $heure = $data[ 'heure' ] < 10 ? '0' . $data[ 'heure' ] : $data[ 'heure' ];
      $minute = $data[ 'minute' ] < 10 ? '0' . $data[ 'minute' ] : $data[ 'minute' ];
      
      // verifie le destinatire et l'expediteur puis affiche les messages de l'expediteur(la personne qui envoie)
      if ( $data[ 'destinataire_id' ] == $_SESSION[ 'id' ] AND $data[ 'expediteur_id' ] == $_SESSION['expediteur'] ) {
        echo '
        <div class="msg2">
          <div class="profil" style="background:'. $data[ 'color' ] .';" >
            '. strtoupper( substr( $data[ 'nom' ], 0, 2 ) ) .'
            <i></i>
          </div>
          <div class="box-rigth">
            <div class="data-profil">
              <div class="name-profil">' . $data[ 'nom' ] . '</div>
              <div class="heure">'. $heure . ':' . $minute .'</div>
            </div>
            <div class="message">'. $data[ 'message' ] .'</div>
          </div>
        </div>
        ';
        
      // verifie l'expediteur et le destinataire puis affiche les messages du destinataire(la personne qui recoit)
      } else if ( $data[ 'expediteur_id' ] == $_SESSION[ 'id' ] AND $data[ 'destinataire_id' ] == $_SESSION['expediteur'] ) {
        echo '
        <div class="msg1">
          <div class="box-left">
            <div class="data-profil">
              <div class="heure">'. $heure . ':' . $minute .'</div>
              <div class="name-profil">Moi</div>
            </div>
            <div class="message">'. $data[ 'message' ]  .'</div>
          </div>
          <div class="profil" style="background:'. $_SESSION[ 'color' ] .';">
            '. strtoupper( substr( $_SESSION[ 'pseudo' ], 0, 2 ) ) . '
          </div>
        </div>
        ';
      }
    }
    $display_msg->closeCursor();
  }

  ////////////////////////////////////////////////////////////////////////////////
  // requete qui envoie les messages, marque nom lue et modifie le dernier message

  // verifie si le message et la session expediteur(celui qui a envoyer le message) existent
  if ( isset( $_POST[ 'message' ] ) AND isset( $_SESSION[ 'expediteur' ] ) ) {

    $message =  htmlspecialchars( $_POST[ 'message' ] );
    
    //on veririfie si le champ n'est pas vide 
    if ( !empty( $message ) ) {
      
      // envoie du message dans la table chat
      $send = $db->prepare( 'INSERT INTO chat VALUES( NULL, :message, :expediteur, :destinataire, NOW() )' ) or die ( print_r( $send->errorInfo() ) );
      $send->execute( array(
        'message' => $message,
        'expediteur' => $_SESSION[ 'id' ],
        'destinataire' => $_SESSION[ 'expediteur' ]
      ) );

      $bool = false;
      $verif = $db->query( 'SELECT expediteur_id, destinataire_id FROM conversation' ) or die ( print_r( $db->errorInfo() ) );
      
      while( $data = $verif->fetch() ) 
        // verifie s'il ya deja une conversasion 
        if ( $data[ 'expediteur_id' ] == $_SESSION[ 'id' ] AND $data[ 'destinataire_id' ] == $_SESSION[ 'expediteur' ] ) $bool = true;
      
      $verif->closeCursor();
      
      // si oui on modifie le dernier message  
      if ( $bool ) {
        $update_last_message = $db->prepare( 'UPDATE conversation SET message = :message, date_send = NOW() WHERE expediteur_id = :expediteur AND destinataire_id = :destinataire OR expediteur_id = :destinataire  AND destinataire_id = :expediteur' );

        $update_last_message->execute( array( 
          'message' => $message,
          'expediteur' => $_SESSION[ 'id' ], 
          'destinataire' => $_SESSION[ 'expediteur' ]
        ) );
        
        // on marque comme non seulement pour le destinataire si il n'a pas vue
        $db->exec( 'UPDATE conversation SET lu = 0 WHERE expediteur_id = ' . $_SESSION[ 'id' ] . ' AND destinataire_id = ' . $_SESSION[ 'expediteur'] );

        // si non on creer un dernier messages
      } else {
        $save_last_message = $db->prepare( 'INSERT INTO conversation VALUES( NULL, :expediteur, :destinataire, :message, 0, NOW() )' ) or die( print_r( $db->errorInfo() ) );

        $save_last_message->execute( array(
          'expediteur' => $_SESSION[ 'id' ],
          'destinataire' => $_SESSION[ 'expediteur' ],
          'message' => $message
        ) );
      }
    }
  }
  
} catch ( Exception $e ) {
    die ( 'Erreur de connection : ' . $e->getMessage() );
}


?>

