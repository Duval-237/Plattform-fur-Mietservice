

//////////////////////////////////////////////////
// ajuster automatique la taille du champ textarea
var textarea_height;
( function() {
  const textarea = document.querySelector( 'textarea' );
  // recuperer la taille du champ
  const textareaHeight = parseInt( getComputedStyle( textarea, null ).height );
  textarea_height = textareaHeight;
  // on ajoute la taille en fonction de la taille du scrollHeight
  textarea.addEventListener( 'keyup', (e) => {
    textarea.style.height = `${ textareaHeight }px`;
    let scHeight = e.target.scrollHeight;
    textarea.style.height = `${ scHeight - 1 }px`;
  } );
} )();


/////////////////////////////////////////////////////////////////
// active le background blue au moment du click sur l'utilisateur
( function() {
  var user_display = [ ...document.querySelectorAll( '.profiles-box' ) ];

  function activeLink()  {
    user_display.forEach( item => {
      item.classList.remove( 'eneable' );
      this.classList.add( 'eneable' );
    } );
  }
  user_display.forEach( item => item.addEventListener( 'click', activeLink ) );
} )();


////////////////////////////////////////////////////////////////////
// gestion de l'affichage des user, l'envoie et la reception de chat

// on attend que jQuery fini de charger
$( document ).ready( function() {
  // un booleen qui verife si un utilisateur est selectione
  var user_select = false;

  // action a excecute au moment du click sur l'utilisateur
  $( '.profiles-box' ).click( function() {
    // puis on l'active
    user_select = true;

    // affiche la partie conversation pour mobile
    $( '#conversation' ).css( 'display', 'flex');
    
    // actualise les messages dans l'intervale donnee
    setInterval( () => {
      $( '.box-chat' ).load( 'php/send_conversation.php' );
    }, 500);

    // affiche la partie pour ecrit le message
    $( '.write-message' ).css( 'display', 'flex' );

    $.ajax( {
      url: 'php/send_conversation.php',
      type: 'POST',
      data: 'expediteur_id=' + this.id,
      success: function( data ) {
        console.log( data );
      }
    } );
  } );

  // envoie le message au click sur envoyer
  $( '.send' ).click( function( e ) {
    // je bloque le competement par default du buttom
    e.preventDefault();

    // si un utilisateur est selectione
    if ( user_select ) {

      // verifie si le champ n'est pas vide
      if ( $( '.msg' ).val() != '' ) {
        $.ajax( {
          url: 'php/send_conversation.php',
          type: 'POST',
          data: 'message=' + $( '.msg' ).val(),
          success: function( data ) {
            $( '.msg' ).val( '' );
            $( 'textarea' ).css( 'height', textarea_height );

              // console.log( data ); 
          }
        } );
      }
    }
  } );
} );




// newsletter
// E-commerce: droppshing, produit, google trens, similarweb, shophunter,
//alibaba: shopiphy: 
//print ondeman : printful, printifill


//bien enoncer son idee bien presenter       nba

// busness modele