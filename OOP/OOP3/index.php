<?php

include_once "database.php";
include_once "productModel.php";

$db = new Database();
$db->connection("localhost","root","","oop");

$productModel = new productModel();