<!DOCTYPE html>
<html>

<head>
<title>Biological Drone Informatics</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php
  // DB connection info

  echo $_SERVER['SERVER_ADDR'];
  echo "hi";
  error_reporting(-1);
  ini_set('display_errors', 'On');

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
  ?>

  <div class = "nav">
    <div class = "container">
      <div class="right">
        <ul>
          <li><a href="#">Preliminary Information</a></li>
          <li><a href="#">Toxicology</a></li>
          <li><a href="#">Environmental Information</a></li>
          <li><a href="#">Drone Flyby Images</a></li>
          <li><a href="#">Send Report</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="jumbotron">
    <div class="container">
      <hr>
      <h1>Biological / Ecological Drone Informatics</h1>
      <hr>
    </div>
  </div>

  <div class="Opening_Image">
    <!-- add first image taken in here -->
  </div>

  <div class="dataPoints">
    <h3>Preliminary Information | </h3>
    <div class="Preliminary_Information">
      <p><b>Name: </b> Johnny Appleseed</p>
      <p><b>Sex: </b> Male</p>
      <p><b>Age: </b> 20- 25</p>
      <p><b>Height: </b> 5' 11"</p>
      <p><b>Onsite Report: </b> At vero eos et accusamus et iusto odio
        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
         atque corrupti quos dolores et quas molestias excepturi sint
         occaecati cupiditate non provident, similique sunt in culpa qui
         officia deserunt mollitia animi, id est laborum et dolorum fuga.
         Et harum quidem rerum facilis est et expedita distinctio. Nam
         libero tempore, cum soluta nobis est eligendi optio cumque nihil
         impedit quo minus id quod maxime placeat facere possimus, omnis
         voluptas assumenda est, omnis dolor repellendus. Temporibus autem
         quibusdam et aut officiis debitis aut rerum necessitatibus saepe
         eveniet ut et voluptates repudiandae sint et molestiae non
         recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
         ut aut reiciendis voluptatibus maiores alias consequatur aut
         perferendis doloribus asperiores repellat.
      </thead></p>
    </div>

    <h3>Toxicology | </h3>
    <div class="Preliminary_Information">
      <p><b>Breathalyzer: </b> <!-- add true false value here for a high enough point. --></p>
      <p><b>Harmful Gasses Measurement: </b> <!-- add percentage here --></p>
      <!-- add graph showing gas levels -->
    </div>

    <h3>Environmental Information | </h3>
    <div class="Preliminary_Information">
      <p><b>Average Temperature: </b> <!-- add temperature here --> F</p>
      <p><b>Average Sunlight Exposure: </b> <!-- add light here --> %</p>
      <p><b>Humidity: </b> <!-- add humidity percentage here --> %</p>
      <!-- add light and humidity graphs here -->
    </div>

    <h3>Drone Flyby Images | </h3>
    <!-- add a carasol for drone captured images here -->

</div>
<hr>
<div class="dataPoints">
  <h3>Send Report | </h3>
    <div class="formStuff">
      <form action="MAILTO:someone@example.com" method="post" enctype="text/plain">
Name:<br>
      <input type="text" name="name" value=""><br>
    </br>
E-mail:<br>
      <input type="text" name="mail" value=""><br>
    </br>
Profession:<br>
      <input type="text" name="subject" value=""><br>
    </br>
Comment:<br>
      <input type="text" name="comment" value="" size="50"><br></br>
      <input type="submit" value="Send">
      <input type="reset" value="Reset">
    </form>
  </br>
  </div>
</div>
</hr>

<div class="footer">
  <hr>
  <p>Copyright Info Bla Bla Bla... Don't sue us if you hurt yourself.</p>
</div>
</body>
</html>
