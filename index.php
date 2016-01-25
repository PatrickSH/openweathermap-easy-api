<?php
//Includes the class ApiCall
include('classes/ApiCall.php');

//Make a new instanc of the ApiCall class
$api = new ApiCall("YOUR API KEY HERE");

//Making the call with london as city metric as units and a 5 day forecast
$api->makeCall("london","metric","forecast");
