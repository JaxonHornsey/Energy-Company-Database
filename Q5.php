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
$keywordProduct =  $_GET["Product"];
$keywordmonth =  $_GET["month"];
$keywordyear =  $_GET["year"];

//Title
echo "<h1> Average Bill price for $keywordProduct Users during $keywordyear-$keywordmonth</h1>";

$sql = "Select AVG(ammountDue) AS avg FROM bill, region WHERE Products = \"". $keywordProduct ."\" AND MONTH(PaymentDue) = ". $keywordmonth ." AND YEAR(PaymentDue) = ". $keywordyear ."";
$result = $mysqli->query($sql);


?>

<div id="accordion">


<?php


	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Name : " . $row["name"]. " - Province: " . $row["nameRegion"]. " -Address: " . $row["propertyDetails"]. "<br>";
    echo "<h3>$keywordProduct</h3>";
	echo "<div> <p> Average Price : $row[avg] </p></div>";
	 }
} else {
  echo "0 results";
}








?>

</div>
