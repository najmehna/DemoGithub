 <?php
 function openDB(){
	
    global $mysqli;
    $servername="localhost";
	$username="root";
	$password="";
	$database="nora";
	$mysqli= new mysqli($servername,$username,$password, $database);
	if($mysqli->connect_error){
        echo"No connection! <br>";
        $mysqli=Null;
    }
	return $mysqli;
}

?>