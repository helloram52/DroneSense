<html>
<head>
    <title>new page...</title>
</head>
<body>
<?

function OpenConnection()
{
    try
    {
        $serverName = "djdux8m8ie.database.windows.net,1433";
        $connectionOptions = array("Database"=>"DroneSense_db",
            "Uid"=>"DroneSense", "PWD"=>"Micro\$oft");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false){
            die(FormatErrors(sqlsrv_errors()));
        }
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}

function ReadData()
{
    try
    {
        $conn = OpenConnection();
        $tsql = "SELECT Humid,TempF,Gas_Sensor,__createdAt FROM DroneSense.Data ORDER BY __createdAt DESC";    
        $getProducts = sqlsrv_query($conn, $tsql);
        echo ("After the query execution");
        if ($getProducts == FALSE){
            echo ("Failed");
            die(FormatErrors(sqlsrv_errors()));
        }
        $productCount = 1;

        while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC) && $productCount<=20)
        {
            echo($row['Humid']);
            echo($row['TempF']);
            echo($row['Gas_Sensor']);
            echo($row['__createdAt']);
            echo("<br/>");
            $productCount++;
        }
        sqlsrv_free_stmt($getProducts);
        sqlsrv_close($conn);
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}

ReadData();

?>
    Hey, Its working!!

</body>

</html>