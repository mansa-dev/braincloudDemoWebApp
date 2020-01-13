<?php
$mysqli = new mysqli("localhost", "root", "mysql", "braincloud");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;exit;
}

/*$res = $mysqli->query("SELECT * From contacts");
$row = $res->fetch_assoc();

if ($row = $res->fetch_assoc()) {
    echo $row['Name'];
}*/
function RunQuery($query, $fetch = false){
	global $mysqli;
	$res = $mysqli->query($query);
	if($res){
	//	return $res;
		if($fetch){
			return $res->fetch_assoc();
		}
	}
	else
		echo "<br>Error Encountered: ".$mysqli->error; die;

		
}


?>