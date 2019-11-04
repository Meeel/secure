$( document ).ready( function() {
  $( "#contactform" ).on( "submit", function( e ) {
    e.preventDefault();
    block_cf();
    var cfdata = {
      name: $( "#cf-name" ).val(),
      email: $( "#cf-email" ).val(),
      msg: $( "#cf-message" ).val()
    }
    $.ajax( {
      url: '/microservices/contactform.php',
      type: 'post',
      dataType: 'json',
      data: cfdata,
      success: function ( data ) {
        console.log( data );
        setTimeout( function() {
          cf_show_successmsg();
        }, 1000 );
      },
      error: function() {
        setTimeout( function() {
          cf_show_errormsg();
        }, 1000 );
      }
    } );
  } );
} );

function block_cf() {
  $( ".cf-blockmask" ).addClass( "shown" );
}

function cf_show_successmsg() {
  $( ".cf-successmsg" ).addClass( "shown" );
  $( [ document.documentElement, document.body ] ).animate( {
      scrollTop: $( "#contactform" ).offset().top - 120
  }, 500 );
}

function cf_show_errormsg() {
  $( ".cf-errormsg" ).addClass( "shown" );
  $( [ document.documentElement, document.body ] ).animate( {
      scrollTop: $( "#contactform" ).offset().top - 120
  }, 500 );
}