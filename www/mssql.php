<?php
$serverName = "192.168.1.9";
$connectionInfo = array( "Database"=>"<database-name>", "UID"=>"<UID>", "PWD"=>"<PWD>",'ReturnDatesAsStrings'=> true);
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
  die( print_r( sqlsrv_errors(), true));
}
else{
  echo 'Successfully Connected';
}
?>