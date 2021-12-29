<?php
// show error reporting
error_reporting(E_ALL);

// sets default time-zone
date_default_timezone_set('US/Eastern');

// variables used for jwt
$key = "example_key";
$issued_at = time();
$expiration_time = $issued_at + (60 * 60); // valid for 1 hour
$issuer = "http://localhost/CodeOfaNinja/RestApiAuthLevel1/";
