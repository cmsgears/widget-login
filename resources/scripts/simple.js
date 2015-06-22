jQuery( '#box-signup-show' ).click( function( e ) {

	e.preventDefault();

	jQuery( '#box-login' ).slideUp( 'fast' );
	jQuery( '#box-signup' ).slideDown( 'slow' );
});

jQuery( '#box-login-show' ).click( function( e ) {

	e.preventDefault();

	jQuery( '#box-signup' ).slideUp( 'fast' );
	jQuery( '#box-login' ).slideDown( 'slow' );
});