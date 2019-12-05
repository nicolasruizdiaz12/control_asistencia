$(document).ready( function ()
{
    $( '#filtrar' ).keyup( function() {
        filtro( $( this ).val() );
    } );

    function filtro( value )
    {
        $( '#tabla tbody>tr' ).each( function() {
            let encontrar = 'false';
            $( this ).each( function() {
                if( $( this ).text().toLowerCase().indexOf( value.toLowerCase() ) >= 0 )
                {
                    encontrar = 'true';
                }
            } );
            if( encontrar == 'true' )
            {
                $( this ).show();
            }
            else
            {
                $( this ).hide();
            }
        } );
    }
} );