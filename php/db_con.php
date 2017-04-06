<?php
// connection settings 

const HOSTNAME  = 'localhost'; //server
const MYSQLUSER = 'root'; //superuser
const MYSQLPASS = ''; //password
const MYSQLDB   = 'keepy'; // DATABASE NAME

// create database connection object
//$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
$con = mysqli_connect('localhost', 'root', '', 'keepy');
// set charset utf8 to mach coallation in db
$con->set_charset('utf8');

if ($con->connect_error){
    die('Error: '.$con->connect_error.' ('.$con->connect_errno.')');
}
?>