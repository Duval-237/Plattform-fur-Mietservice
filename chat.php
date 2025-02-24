<?php

session_start();

if ( !isset( $_SESSION[ 'pseudo' ] ) ) {
  header( 'location:index.php' );
  exit();
}

?>

<?php include('php/lang.php') ?>
<!DOCTYPE html>
<html lang="<?php echo $symbole[$lang]; ?>">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre[$lang]; ?></title>
    <link rel="shortcut icon" href="img/Malik.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/chat.css">
  </head>
  <body>
    <?php include("php/header.php"); ?>
    <div class="chat-wrapper">
      <section id="chat">
        <div id="discusion">
          <div class="chat-search">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.77 263.68"><defs><style>.cls-1,.cls-2{fill:none;stroke-width:25px;}.cls-1{stroke-miterlimit:10;}.cls-2{stroke-linejoin:round;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><circle class="cls-1" cx="108.26" cy="108.26" r="95.76"></circle><path class="cls-2" d="M176.45,175.73l65.82,75.45Z"></path></g></g></svg>
            <input type="text" placeholder="Rechercher">
          </div>
          <!-- <span>Discussions</span> -->
          <div class="profiles">
            <?php
            try {
              
              $db = new PDO( 'mysql:host=localhost;dbname=malicc', 'root', '', array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ) );
            
              // affiche les utilisateurs de la conversation
              $requete = $db->query( 'SELECT user.id id, user.user_name nom, user.color color, conversation.message message, HOUR(conversation.date_send) heure, MINUTE(conversation.date_send) minute, conversation.lu lu
              FROM user
              INNER JOIN conversation
              ON user.id = conversation.expediteur_id
              WHERE conversation.destinataire_id = ' . $_SESSION[ 'id' ] . ' ORDER BY conversation.date_send DESC ' ) or die( print_r( $db->errorInfo() ) );
            
              while( $data = $requete->fetch() ) {
            
                // ajoute un zero devant la date si il est inferieur a 10
                $heure = $data[ 'heure' ] < 10 ? '0' . $data[ 'heure' ] : $data[ 'heure' ];
                $minute = $data[ 'minute' ] < 10 ? '0' . $data[ 'minute' ] : $data[ 'minute' ];
            
                // si le message n'est pas lu on affiche la notification
                $notif_lu = $data[ 'lu' ] == 1 ? '' : '<div class="non-lue"></div>' ;
            
                echo '
                  <div class="profiles-box" id="' . $data['id'] . '">
                    <div class="bloc-left">
                      <div class="img" style="background:'. $data[ 'color' ] .' ;">
                        <span>'. strtoupper( substr( $data[ 'nom' ], 0, 2 ) ) . '</span>
                        <i class="online"></i>
                      </div>
                    </div>
                    <div class="bloc-right">
                      <div class="bloc-top">
                        <span class="name">'. $data[ 'nom' ] . '</span>
                        <span class="date">'. $heure . ':' . $minute . '</span>
                      </div>
                      <div class="bloc-bottom">
                        <span class="message">'. $data[ 'message' ] . '</span>
                        '. $notif_lu .'
                      </div>
                    </div>
                  </div>
                '; 
              }
                $requete->closeCursor();
            } catch( Exception $e ) {
                die( 'Erreur : '. $e->getMessage() );
            }
            
            ?>
            
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ? Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisicing elit. Animi?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div> 
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div>
            <div class="profiles-box">
              <div class="bloc-left">
                <div class="img">
                  <span>JO</span>
                  <i class="online"></i>
                </div>
              </div>
              <div class="bloc-right">
                <div class="bloc-top">
                  <span class="name">John doe</span>
                  <span class="date">09:00</span>
                </div>
                <div class="bloc-bottom">
                  <span class="message">Hi there, how are you ?</span>
                  <div class="non-lue"></div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        
        <div id="conversation">
          
          <div class="box-chat"></div>

          <!-- <div class="date">Aujourd'hui</div> -->
          <form action="chat.php" method="post" class="write-message">
            <div class="inputbox">
              <textarea name="message" class="msg" placeholder="ecris un message"></textarea>
            </div>
            <div class="plane">
              <input type="submit" value="" class="send">
              <svg viewBox="0 0 512 512"><path d="M511.6 36.86l-64 415.1c-1.5 9.734-7.375 18.22-15.97 23.05c-4.844 2.719-10.27 4.097-15.68 4.097c-4.188 0-8.319-.8154-12.29-2.472l-122.6-51.1l-50.86 76.29C226.3 508.5 219.8 512 212.8 512C201.3 512 192 502.7 192 491.2v-96.18c0-7.115 2.372-14.03 6.742-19.64L416 96l-293.7 264.3L19.69 317.5C8.438 312.8 .8125 302.2 .0625 289.1s5.469-23.72 16.06-29.77l448-255.1c10.69-6.109 23.88-5.547 34 1.406S513.5 24.72 511.6 36.86z"/></svg>
            </div>
          </form>
          
        </div>
      </section>
    </div>
    
    
    <?php include("php/footer.php"); ?>

    <script src="js/jquery-3.7.1.js" ></script>
    <script src="js/chat.js" ></script>
    <script src="js/script.js"></script>
  </body>
</html>

