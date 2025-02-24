

//////////////////////////////////////////
// creation du caroussel service populaire
( function() {
  // on recupere des elements necessaire
  let carousel = document.querySelector( '.carousel' );
  let carouselBtn = document.querySelectorAll( '.container i' );
  let firstCardWidth = document.querySelector( '.carousel' ).firstElementChild.offsetWidth;
  let isDragging = false, startX, startScrollLeft;
  
  // defilement du carousel par les bouttons
  carouselBtn.forEach( item => {
    item.addEventListener( 'click', _ => {
      carousel.scrollLeft += item.classList.value == 'left' ? - firstCardWidth : firstCardWidth;
    } );
  } );

  // pour initialiser les valeurs du caroussel lorsque le bouton de la souris est presse
  carousel.addEventListener( 'mousedown', ( e ) => {
    isDragging = true;
    carousel.classList.add( 'eneable' );
    startX = e.clientX;
    startScrollLeft = carousel.scrollLeft;
  } );

  // faire defiller les element du caroussel au moment du deplacement de la souris
  carousel.addEventListener( 'mousemove', ( e ) => {
    if( !isDragging ) return;
    carousel.scrollLeft = startScrollLeft - ( e.clientX - startX );
  } );

  // arrete le defillement du caroussel lorsque le bouton de la souris est relache
  document.addEventListener( 'mouseup', _ => {
    isDragging = false;
    carousel.classList.remove( 'eneable' );
  } );
  
} )();

