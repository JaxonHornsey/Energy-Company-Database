<html>
<head style="background-color:NavajoWhite;">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="mystyle.css">

</head>

<body> 

<h1> Kinwin Energy Provider Dashboard </h1>

<?php

include "db_connect.php";

//echo $mysqli->host_info . "<br>";

//First Query
//include "Query1.php";

?>


<form class="form-horizontal" action="Q1.php">
<fieldset>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h3>Find Monthly Expenses Of Specific Region</h3>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="RegionID">Search Input</label>
  <div class="col-md-4">
    <input id="RegionID" name="RegionID" type="search" placeholder="eg. 1,2,3" class="form-control input-md">
    <p class="help-block">Region ID you want</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="month">Search Input</label>
  <div class="col-md-4">
    <input id="month" name="month" type="search" placeholder="e.g 01 - 12" class="form-control input-md">
    <p class="help-block">Select Month</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Search Input</label>
  <div class="col-md-4">
    <input id="year" name="year" type="search" placeholder="e.g 2021, 2022" class="form-control input-md">
    <p class="help-block">Enter Year</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


<form class="form-horizontal" action="Q2.php">
<fieldset>

<!-- Form Name -->
<h3>Enter a Region ID to get Customers Address and Name</h3>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="RegionID">Search Input</label>
  <div class="col-md-4">
    <input id="RegionID" name="RegionID" type="search" placeholder="e.g. 1,2,3" class="form-control input-md" required="">
    <p class="help-block">Enter a Region ID to get Customer Info</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>



<form class="form-horizontal" action="Q3.php">
<fieldset>

<!-- Form Name -->
<h3>Find Paid Bills From a Region during a Specific Month</h3>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="RegionID">Search Input</label>
  <div class="col-md-4">
    <input id="RegionID" name="RegionID" type="search" placeholder="eg. 1,2,3" class="form-control input-md">
    <p class="help-block">Region you want</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="month">Search Input</label>
  <div class="col-md-4">
    <input id="month" name="month" type="search" placeholder="e.g 01 - 12" class="form-control input-md">
    <p class="help-block">Select Month</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Search Input</label>
  <div class="col-md-4">
    <input id="year" name="year" type="search" placeholder="e.g 2021, 2022" class="form-control input-md">
    <p class="help-block">Enter Year</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit">Submit</label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>




<form class="form-horizontal" action="Q4.php">
<fieldset>

<!-- Form Name -->
<h3>Gives Contact Information of Customers in specific Region who have an Overdue Bill</h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="RegionID">Enter Region ID</label>  
  <div class="col-md-4">
  <input id="RegionID" name="RegionID" type="text" placeholder="e.g. 1,2,3" class="form-control input-md">
  <span class="help-block">Enter a Region ID to bring up Bills that are expired</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>



<form class="form-horizontal" action="Q5.php">
<fieldset>

<!-- Form Name -->
<h3>Get The Average Price of a Product During Specific Month</h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Product">Enter Product</label>  
  <div class="col-md-4">
  <input id="Product" name="Product" type="text" placeholder="Crude Oil, Solar, Nuclear, Nuclear Gas" class="form-control input-md">
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="month">Enter Month</label>
  <div class="col-md-4">
    <input id="month" name="month" type="search" placeholder="1-12" class="form-control input-md">
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Enter Year</label>
  <div class="col-md-4">
    <input id="year" name="year" type="search" placeholder="2021,2022" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>









<?php
//Second Query
//include "Q2.php";


$mysqli->close();

?>

</body>

</html>