<?php
$serverName = "191.252.93.202";
$connectionInfo = array( "Database"=>"Attender_CRM", "UID"=>"megatronix", "PWD"=>"Lorentz@2020",'ReturnDatesAsStrings'=> true);
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
  die( print_r( sqlsrv_errors(), true));
}
else{
  echo 'Successfully Connected';
}
?>