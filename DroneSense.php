<html>

<?

function OpenConnection()
{
    try
    {
        $serverName = "djdux8m8ie.database.windows.net,1433";
        $connectionOptions = array("Database"=>"DroneSense_db",
            "Uid"=>"DroneSense", "PWD"=>"Micro$oft");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false)
            die(FormatErrors(sqlsrv_errors()));
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
        $tsql = "SELECT Humid,TempC,Gas_Sensor FROM DroneSense.Data";
        $getProducts = sqlsrv_query($conn, $tsql);
        if ($getProducts == FALSE)
            die(FormatErrors(sqlsrv_errors()));
        $productCount = 0;
        while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
        {
            echo($row['Humid']);
            echo($row['TempC']);
            echo($row['Gas_Sensor']);
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
<body>
    Hey, Its working!!
</body>
</html>