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
echo "<h1> Shows The Paid Bills From Region $keywordRegion During $keywordYear-$keywordMonth </h1>";

$sql = "SELECT customer.name, bill.ammountDue, bill.PaymentDue, bill.Products FROM customer, customer_owes_bill, bill,region_has_customer,region WHERE customer.idCustomer = customer_owes_bill.idCustomerCOB AND bill.idBill = customer_owes_bill.idBillCOB AND region.idRegion = ". $keywordRegion ." AND customer.idCustomer = region_has_customer.idCustomerRH AND region.idRegion = region_has_customer.idRegionRH AND billPayed = 1 AND MONTH(PaymentDue) =". $keywordMonth ." AND YEAR(PaymentDue) = ". $keywordYear ."";
$result = $mysqli->query($sql);




?>

<div id="accordion">


<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Name : " . $row["name"]. " - Province: " . $row["nameRegion"]. " -Address: " . $row["propertyDetails"]. "<br>";
	echo "<h3>$row[name]</h3>";
	echo "<div> <p> Date: $row[PaymentDue] <br> Bill Amount: $row[ammountDue]$ <br> Product Used : $row[Products] <br> </p></div>";
  }
} else {
  echo "0 results";
}




?>

</div>
