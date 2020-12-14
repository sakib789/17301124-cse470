<?php
// require mysql Connection
require('model/DBController.php');

// require Product Class
require ('model/Product.php');
// require Cart Class
require ('model/Cart.php');


//DBController Object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle= $product->getData();

// Cart object
$Cart = new Cart($db );
