
/* Zone de connection */

let zoneConnection = document.querySelector('#_ZONE_CONNECTION');
let content = document.querySelector('.content');
let box2Inscrire = document.querySelector('.box2.inscrire');
let box2Connecte = document.querySelector('.box2.connecte');
let mobileMenu = document.querySelector('#mobile-menu');

if(zoneConnection != null) {
  box2Connecte.style.display = 'none';

  // zoneConnection.style.display = 'none';
  // zoneConnection.classList.add('eneable');

  // setTimeout(function() {
  //   zoneConnection.classList.add('eneable');
  // }, 3000);
    
  let box3Inscrire = document.querySelector('.box3.inscrire');
  let box3Connecte = document.querySelector('.box3.connecte');
  let box3Send = document.querySelector('.box3.send');
    
    // box3Inscrire.style.display = 'none';
    // box3Connecte.style.display = 'block';

  let btnInscrire = [...document.querySelectorAll('.btnInscrire')];
  btnInscrire.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      // zoneConnection.style.display = 'flex';
      zoneConnection.classList.add('eneable');
      box2Inscrire.style.display = 'block';
      box2Connecte.style.display = 'none';
      box3Inscrire.style.display = 'none';
      box3Connecte.style.display = 'none';
      box3Send.style.display = 'none';
      mobileMenu.classList.remove('eneable');
      
    })
  });
  let btnConnecter = [...document.querySelectorAll('.btnConnecter')];
  btnConnecter.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      // zoneConnection.style.display = 'flex';
      zoneConnection.classList.add('eneable');
      box2Connecte.style.display = 'block';
      box2Inscrire.style.display = 'none';
      box3Inscrire.style.display = 'none';
      box3Connecte.style.display = 'none';
      box3Send.style.display = 'none';
      mobileMenu.classList.remove('eneable');
    })
  });

  let closeConnect = document.querySelectorAll('.close_connect');
  closeConnect.forEach(item => {
    item.addEventListener('click', _ => {
      zoneConnection.classList.remove('eneable');
      // zoneConnection.style.display = 'none';
    });
  });

  let retour_inscrire = document.querySelector('.retour_inscrire');
  retour_inscrire.addEventListener('click', _ => {
    box2Inscrire.style.display = 'block';
    box3Inscrire.style.display = 'none';
    // box2Connecte.style.display = 'none';
    // box3Connecte.style.display = 'none';
  });
  let retour_connecte = document.querySelector('.retour_connecte');
  retour_connecte.addEventListener('click', _ => {
    box2Connecte.style.display = 'block';
    box3Connecte.style.display = 'none';
    // box2Inscrire.style.display = 'none';
    // box3Inscrire.style.display = 'none';
  });
  let retour_send = document.querySelector('.retour_send');
  retour_send.addEventListener('click', _ => {
    box3Connecte.style.display = 'block';
    box3Send.style.display = 'none';
  });

  zoneConnection.addEventListener('click', _ => {
    // zoneConnection.style.display = 'none';
    zoneConnection.classList.remove('eneable');
  }, true);
  content.addEventListener('click', _ => {
    // zoneConnection.style.display = 'flex';
    zoneConnection.classList.add('eneable');
  }, true);

  let connecter = document.querySelector('#connecter');
  connecter.addEventListener('click', (e) => {
    e.preventDefault();
    box2Inscrire.style.display = 'none'
    box2Connecte.style.display = 'block';
  });

  let inscrire = document.querySelector('#inscrire');
  inscrire.addEventListener('click', (e) => {
    e.preventDefault();
    box2Inscrire.style.display = 'block'
    box2Connecte.style.display = 'none';
  });

  //Zone de controle input

  let email = document.querySelectorAll('.email_input');
  let password = document.querySelectorAll('.password_input');
  let continuer = document.querySelectorAll('.continuer');

  let emailInscription = document.querySelector('#emailInscription');
  emailInscription.addEventListener('click', (e) => {
    e.preventDefault();
    box2Inscrire.style.display = 'none';
    box3Inscrire.style.display = 'block';
    email[0].value = '';
    password[0].value = '';
  });

  let emailConnection = document.querySelector('#emailConnection');
  emailConnection.addEventListener('click', (e) => {
    e.preventDefault();
    box2Connecte.style.display = 'none';
    box3Connecte.style.display = 'block';
    email[1].value = '';
    password[1].value = '';
  });

  let forget = document.querySelector('.forget');
  forget.addEventListener('click', (e) => {
    e.preventDefault();
    box3Connecte.style.display = 'none';
    box3Send.style.display = 'block';
  });

  //button see password
  let btnNoSeePassword = document.querySelectorAll('.no_see_password');
  let btnSeePassword = document.querySelectorAll('.see_password');

  let noSeePassword = document.querySelectorAll( '.no_see_password' );
  noSeePassword.forEach( item => {
    item.addEventListener( 'click', _ => {
      password[ item.id ].type = 'text'
      btnNoSeePassword[ item.id ].style.display = 'none';
      btnSeePassword[ item.id ].style.display = 'block';
    } );
  } );

  let seePassword = document.querySelectorAll( '.see_password' );
  seePassword.forEach( item => {
    item.addEventListener( 'click', _ => {
      password[item.id].type = 'password'
      btnSeePassword[item.id].style.display = 'none';
      btnNoSeePassword[item.id].style.display = 'block';
    } );
  } );
}


/////////////////////////////////////////
// affiche un menu pour choisir la langue
( function() {
  let language = [ ...document.querySelectorAll( '.language' ) ];
  let zoneLanguage = document.querySelector( '#_ZONE_LANGUAGE' );
  let box = document.querySelector( '.box' );
  let close = document.querySelector( '.close' );
  
  language.forEach( item => {
    item.addEventListener( 'click', ( e ) => {
      e.preventDefault();
      zoneLanguage.style.display = 'flex';
    } );
  } );
  zoneLanguage.addEventListener( 'click', _ => {
    zoneLanguage.style.display = 'none'
  }, true );
  box.addEventListener( 'click', _ => {
    zoneLanguage.style.display = 'flex'
  }, true );
  close.addEventListener( 'click', _ => {
    zoneLanguage.style.display = 'none';
  } );
} )();


////////////////////////////
// gestion du menu de gauche
( function() {
  let toggle = document.querySelector( '.toggle' );
  let mobileMenu = document.querySelector( '#mobile-menu' );
  let menu = document.querySelector( '.menu' );
  let dev = [ ...document.querySelectorAll( '.dev' ) ];
  
  toggle.addEventListener( 'click', _ => {
    mobileMenu.classList.add( 'eneable' );
  } );
  mobileMenu.addEventListener( 'click', _ => {
    mobileMenu.classList.remove( 'eneable' );
  }, true );
  menu.addEventListener( 'click', _ => {
    mobileMenu.classList.add( 'eneable' );
  }, true );
  
  dev.forEach( item => item.addEventListener( 'click', _ => item.parentNode.classList.toggle( 'eneable' ) ) );
} )();


/////////////////////////////////////
// gestion du header et du responsive
( function() {
  let headerWrapper = document.querySelector( '.header-wrapper' );
  let headerSearch = document.querySelector( '.header-search' );
  let subHeaderWrapper = document.querySelector( '.sub-header-wrapper' );
  
  let closeZone = document.querySelector( '.close_Zone' );
  closeZone.addEventListener( 'click', () => {
    closeZone.offsetParent.style.display = 'none';
  });
  
  window.addEventListener( 'load', () => {
    window.scrollY > 0 ? headerWrapper.classList.add( 'eneable' ) :  headerWrapper.classList.remove( 'eneable' );
    if( window.scrollY > 210 ) {
      headerSearch.classList.add( 'eneable' );
      subHeaderWrapper.classList.add( 'eneable' );
    
    } else {
      headerSearch.classList.remove( 'eneable' );
      subHeaderWrapper.classList.remove( 'eneable' );
    }
  });
  
  window.addEventListener( 'scroll', _ => {
    window.scrollY > 0 ? headerWrapper.classList.add( 'eneable' ) :  headerWrapper.classList.remove( 'eneable' );
    if( window.scrollY > 210 ) {
      headerSearch.classList.add( 'eneable' );
      subHeaderWrapper.classList.add( 'eneable' );
    
    } else {
      headerSearch.classList.remove( 'eneable' );
      subHeaderWrapper.classList.remove( 'eneable' );
    }
  });
  
} )();


////////////////////////////////
// gestion des element du footer
( function() {
  let footerMenu = document.querySelectorAll( '.footer-menu' );
  let year = document.querySelector( '.year' );
  // menu deroulant
  footerMenu.forEach( item => {
    item.addEventListener( 'click', _ => {
      item.parentNode.classList.toggle( 'eneable' );
    } );
  } );
  // pour afficher l'annee actuelle
  let date = new Date();
  year.textContent = date.getFullYear();
} )();


///////////////////////////////////////////////
// affiche le mini menu pour le client connecte
( function() {
  let profil = document.querySelector( '.list.profil.plus' );
  
  if ( profil != null ) {
    profil.addEventListener( 'click', _ => profil.classList.add('eneable' ) );
    document.addEventListener( 'click', _ => profil.classList.remove('eneable' ), true );
    window.addEventListener( 'scroll', _ => profil.classList.remove('eneable' ), true );
  }
} )();

