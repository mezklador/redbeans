<?php
 require 'rb.php';

R::setup('mysql:host=127.0.0.1;dbname=oauth', 'root','');

// BEANS
$test = R::dispense('test');

// Preventing adding rows in Database with FREEZE
R::freeze(1);

// Create TABLE IN DB WITH fields
/*$api = R::dispense("api");
$api->api_id = 1;
$api->api_key = sha1("1234");
$api->api_secret = md5("1234");
$api->user = "sam";
$api->response = "http://api.at.zef";

$id = R::store($api);

echo $id;*/

// Read ALL
var_dump(R::findAll('api')); // Object list
echo "<hr>";
var_dump(R::getAll("SELECT * FROM api")); // Array list
echo "<hr>";
var_dump(R::getRow("SELECT * FROM api")); // first row in DB Table
echo "<hr>";
var_dump(R::getRow("SELECT * FROM api WHERE user = :user", ["user" => "anna"])); // query something in DB Table (column query)

// Update
/*$u = R::load('api', 3);
// var_dump($u);
$u->user = 'jeff';
R::store($u);
$u = R::load('api', 4);
// var_dump($u);
$u->user = 'anna';
R::store($u);*/

// Delete
/*$u = R::load('api', 2);
R::trash($u);*/

