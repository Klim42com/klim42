<?php


const AUTHOR = 'Klim';
const YEAR = 2022;

define('DBHOST', 'localhost');
define('DBLOGIN', 'phpmyadmin');
define('DBPASS', 'KC8pS@KL!Mi9#DyN96');
define('DBNAME', 'eshop');

const ORDERS = 'orders.txt';
$db = mysqli_connect(DBHOST,DBLOGIN,DBPASS,DBNAME);
mysqli_query($db,'SET NAMES UTF-8');
//define('ORDERS', 'orders.txt');
session_start();
if (!isset($_SESSION['basket'])){
    $_SESSION ['basket'] = [];
}