<html>
<head>
    <title>new page...</title>
</head>
<body>
<?php
// DB connection info

echo("hi");

$host = "tcp:djdux8m8ie.database.windows.net,1433";
$user = "DroneSense";
$pwd = "Micro\$oft";
$db = "DroneSense_db";
try{
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(print_r($e));
}

$sql_select = "SELECT * FROM DroneSense.Data";
$stmt = $conn->query($sql_select);
$result = $stmt->fetchAll()
echo $result;
print_r($result);

?>
    Hey, Its working!!

</body>

</html>