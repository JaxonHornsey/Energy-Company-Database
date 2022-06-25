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
<body style="background-color:red;">
</head>
<?php

include "db_connect.php";
//Second Query
$keywordRegionID =  $_GET["RegionID"];

//Title
echo "<h1> Show the Names and Addresses of Customers that live in Region $keywordfromform </h1>";

$sql = "SELECT customer.name, customer.Email, customer.phoneNum, region_has_customer.propertyDetails, bill.ammountDue FROM customer, region_has_customer, moneyatrisk, bill WHERE customer.idCustomer = moneyatrisk.idCustomer AND customer.idCustomer = region_has_customer.idCustomerRH AND bill.idBill = moneyatrisk.idBill AND region_has_customer.idRegionRH = ". $keywordRegionID ."";
$result = $mysqli->query($sql);




?>

<div id="accordion">


<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Name : " . $row["name"]. " - Province: " . $row["nameRegion"]. " -Address: " . $row["propertyDetails"]. "<br>";
	echo "<h3>$row[name]</h3>";
	echo "<div> <p> Email : $row[Email] <br> Phone Number : $row[phoneNum] <br> Address : $row[propertyDetails] <br> Amount Due : $row[ammountDue]$ </p></div>";
  }
} else {
  echo "0 results";
}




?>

</div>
