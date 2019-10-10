$(document).ready( function ()
{
    $( '#filtrar' ).keyup( function() { /* nombar el input  con una id o clase y ponerlo dentro de los parentesis */
        filtro( $( this ).val() );
    } );

    function filtro( value )
    {
        $( '#tabla tbody>tr' ).each( function() {   /* #tabla es id */
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