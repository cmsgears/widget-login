jQuery( '#box-signup-show' ).click( function( e ) {

	e.preventDefault();

	if( jQuery( '#box-signup' ).is( ":visible" ) ) {

		jQuery( '#box-signup' ).slideUp( 'fast' );
	}
	else {

		jQuery( '#box-login' ).slideUp( 'fast' );
		jQuery( '#box-signup' ).slideDown( 'slow' );
	}
});

jQuery( '#box-login-show' ).click( function( e ) {

	e.preventDefault();

	if( jQuery( '#box-login' ).is( ":visible" ) ) {

		jQuery( '#box-login' ).slideUp( 'fast' );
	}
	else {

		jQuery( '#box-signup' ).slideUp( 'fast' );
		jQuery( '#box-login' ).slideDown( 'slow' );
	}
});