<link rel="stylesheet" href="mystyle.css">
<head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

</head>
<?php

include "db_connect.php";
//Second Query
$keywordRegion =  $_GET["RegionID"];
$keywordMonth =  $_GET["month"];
$keywordYear =  $_GET["year"];


//Title
echo "<h1> Show the Expenses from Region $keywordRegion During $keywordMonth-$keywordYear </h1>";

$sql = "SELECT region.nameRegion, expenses.Date, expenses.Description, expenses.cost FROM expenses, regionexpenses, region WHERE region.idRegion = regionexpenses.idRegion AND expenses.idExpenses = regionexpenses.idExpense AND region.idRegion = $keywordRegion AND MONTH(Date) = $keywordMonth  AND YEAR(Date) = $keywordYear";

$result = $mysqli->query($sql);

?>

<div id="accordion">


<?php

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    //echo "Name : " . $row["name"]. " - Province: " . $row["nameRegion"]. " -Address: " . $row["propertyDetails"]. "<br>";
	echo "<h3>$row[Description]</h3>";
	echo "<div> <p>Cost :$row[cost]$ <br> Date: $row[Date] <br> </p></div>";
  }
} else {
  echo "0 results";
}






?>

</div>
