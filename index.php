<?php
include('classes/ApiCall.php');

$api = new ApiCall;

$api->makeCall("london","metric","forecast");
