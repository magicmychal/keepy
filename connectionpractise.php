<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez tytułu</title>
</head>

<body>

</body>
</html>

<?php
	$connectionInfo = array("UID" => "system@vehspectech", "pwd" => "Password123", "Database" => "vehiclespecification", 
			"LoginTimeout" => 30, "Encrypt" =>1, "TrustServerCertificate" => 0);
	$serverName = "tcp:vehspectech.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);//do wykucia na pale
	
	if($conn){
	}
	else
	{
		echo "Connection could not be established.\n"; //  \n -- tak jakby enter, kolejna rzecz bedzie zapisana ponizej
		die(print_r(sqlsrv_errors(), true));
	}
	
	if(!empty($_POST['search']))
	{
		$word = $_POST['search'];
	}
	
	$sql = "SELECT * FROM xxx WHERE y LIKE '%" . $word . "%'"; // tak wrzucasz do zapytan sql w PHP zmienne
	
	$params = array(1, "veh data");
	$stmt = sqlsrv_query($conn, $sql, $params);
	if($stmt === false)
	{
		die(print_r(sqlsrv_errors(), true));
	}
	
	
	$end_result = '<table border width="50%"><tr><td>Marka</td><td>Typ</td></tr>';


    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                
        $result = '<td>' . $row['Marka'] . '</td><td>' . $row['Typ'] . '</td>;

        $end_result     .= '<tr>' . $result . '</tr>';

    }



    echo '<div class="CSSTableGenerator">';
    $end_result     .= '</table></div>';
    echo  $end_result;
	
	



?>