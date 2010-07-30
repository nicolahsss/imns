<?php
$include_path = ini_get( 'include_path' ) . PATH_SEPARATOR . realpath( '../application' );

ini_set( 'include_path' , implode( PATH_SEPARATOR , array_unique( explode( PATH_SEPARATOR , $include_path ) ) ) );

function loader( $class ){
	require sprintf( '%s.php' , implode( DIRECTORY_SEPARATOR , explode( '\\' , $class ) ) );
}

spl_autoload_register( 'loader' , true );