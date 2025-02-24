

////////////////////////////////////////////////////////////
// affichage du menu filter via le bouton filtre pour mobile
( function() {
  // initialisation des variables
  let filter = document.querySelector( '.filter' );
  let zonefilter = document.querySelector( '#_ZONE_FILTER' );
  let filterClose = document.querySelector( '.close-filter' );

  // on affiche le menu filtre via le click
  filter.addEventListener( 'click', _ => zonefilter.classList.add( 'eneable') );
  // on ferme le menu filtre via le click
  filterClose.addEventListener( 'click', _ => zonefilter.classList.remove( 'eneable' ) );
})();


////////////////////////////////
// getion du menu filtre pour pc
( function() {
  // on recupere tout les de fitre
  let filterBtn = [ ...document.querySelectorAll( '.filter-btn' ) ];
  // permet d'afficher le menu de chaque option filtre et desactive celui qui est ouvert 
  function activeLink() {
    var bool = false;
    // verifie si cette options est deja active
    if( this.parentElement.className === "eneable" ) bool = true;
    
    filterBtn.forEach( item => {
      // desactive option ouvert
      item.parentElement.classList.remove('eneable');
      // active option clique
      this.parentElement.classList.add('eneable');
    } );
    
    // on le ferme si c'est le cas
    filterBtn.forEach( item => { if( bool ) item.parentElement.classList.remove( 'eneable' ) });
 
  }
  filterBtn.forEach( item => item.addEventListener( 'click', activeLink ) );
  
} )();

