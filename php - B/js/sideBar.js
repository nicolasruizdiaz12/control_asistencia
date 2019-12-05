$( document ).ready( function() 
{
    let $informacion = $( '.informacion' ),
        $cabecera = $( '.cabecera' );

    $informacion.first().slideDown();

    $cabecera.click( function( e ) 
    {
        e.preventDefault();
        $('.informacion').not( this ).each( function() 
        {
            $( this ).slideUp().css( {'background-color':'#a22eee', 'color':'#ffffff'} );
        });

        $( this ).siblings( '.informacion' ).slideToggle();
    } ).hover( function() {
        $( this ).css( 'background','#0769ad' );
    }, function() {
        $( this ).css( 'background-color', 'darkgray' );
    } );
} );