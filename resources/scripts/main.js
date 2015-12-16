// Show/Hide login and signup -------------------------------

jQuery( '.btn-login' ).click( function( event ) {

	event.preventDefault();

	if( jQuery( '#box-login' ).is( ":visible" ) ) {

		jQuery( '#box-login' ).slideUp( 'fast' );
	}
	else {

		jQuery( '#box-signup' ).slideUp( 'fast' );
		jQuery( '#box-forgot-password' ).slideUp( 'fast' );
		jQuery( '#box-login' ).slideDown( 'slow' );
	}
});

jQuery( '.btn-forgot-password' ).click( function( event ) {

	event.preventDefault();

	if( jQuery( '#box-forgot-password' ).is( ":visible" ) ) {

		jQuery( '#box-forgot-password' ).slideUp( 'fast' );
	}
	else {

		jQuery( '#box-signup' ).slideUp( 'fast' );
		jQuery( '#box-login' ).slideUp( 'fast' );
		jQuery( '#box-forgot-password' ).slideDown( 'slow' );
	}
});

jQuery( '.btn-signup' ).click( function( event ) {

	event.preventDefault();

	if( jQuery( '#box-signup' ).is( ":visible" ) ) {

		jQuery( '#box-signup' ).slideUp( 'fast' );
	}
	else {

		jQuery( '#box-login' ).slideUp( 'fast' );
		jQuery( '#box-forgot-password' ).slideUp( 'fast' );
		jQuery( '#box-signup' ).slideDown( 'slow' );
	}
});