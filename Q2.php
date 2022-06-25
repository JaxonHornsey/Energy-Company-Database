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
$keywordfromform =  $_GET["RegionID"];


//Title
echo "<h1> Show the Names and Addresses of Customers that live in Region $keywordfromform </h1>";

$sql = "SELECT customer.name, region.nameRegion, region_has_customer.propertyDetails, customer.Email, customer.phoneNum FROM ((region_has_customer INNER JOIN customer ON region_has_customer.idCustomerRH = customer.idCustomer) INNER JOIN region ON region_has_customer.idRegionRH = region.idRegion) WHERE idRegionRH = ". $keywordfromform ."";
$result = $mysqli->query($sql);

?>

<div id="accordion">


<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Name : " . $row["name"]. " - Province: " . $row["nameRegion"]. " -Address: " . $row["propertyDetails"]. "<br>";
	echo "<h3>$row[name]</h3>";
	echo "<div> <p> Province: $row[nameRegion] <br> Address: $row[propertyDetails] <br> Email : $row[Email] <br>  Phone Number : $row[phoneNum]</p></div>";
  }
} else {
  echo "0 results";
}




?>

</div>
