// remap jQuery to $
(function ( $ )
{
})( window.jQuery );

/* trigger when page is ready */
$( document ).ready( function ()
{

  $( '#page-wrap' ).scrollspy( {
    min     : 100,
    max     : 999999999,
    onEnter : function ( element, position )
    {
      $( "#header" ).addClass( 'hide-up' );
    },
    onLeave : function ( element, position )
    {
      $( "#header" ).removeClass( 'hide-up' );
    }
  } );

//  var docElem = $( '#page-wrap' ),
//    header = $( '#header' ),
//    didScroll = false,
//    changeHeaderOn = 100;
//
//  function init()
//  {
//    window.addEventListener( 'scroll', function ( event )
//    {
//      if ( !didScroll ) {
//        didScroll = true;
//        setTimeout( scrollPage, 250 );
//      }
//    }, false );
//  }
//
//  function scrollPage()
//  {
//    var sy = scrollY();
//
//    console.log( sy );
//    console.log( docElem.get(0).scrollTop );
//
//    if ( sy >= changeHeaderOn ) {
//      header.addClass( 'hide-up' );
//    }
//    else {
//      header.removeClass( 'hide-up' );
//    }
//    didScroll = false;
//  }
//
//  function scrollY()
//  {
//    return window.pageYOffset || docElem.get(0).scrollTop;
//  }
//
//  init();

} );

/* optional triggers

 $(window).load(function() {

 });

 $(window).resize(function() {

 });

 */