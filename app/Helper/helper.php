<?php
function generateUuid(){
  return \App\Helper\UUID::uuid4();
}

/**
 * Dump the passed variables and end the script.
 *
 * @return void
 */
function d()
{
    
    array_map( function ( $x ) {
        
        ( new \Illuminate\Support\Debug\Dumper )->dump( $x );
    }, func_get_args() );
}