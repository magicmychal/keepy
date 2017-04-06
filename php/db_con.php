<?php
// connection settings 

//connection to the real server 
//and yeag, it shoudn't be here, public on gitub. but whatever
/*
const HOSTNAME  = 'mysql597int.cp.az.pl'; //server
const MYSQLUSER = 'u1223200_mil'; //superuser
const MYSQLPASS = 'supadup@96'; //password EJ TU CHODZI O TO, ŻE PO DUŃSU SIĘ MUWI SUPER DUPER I TO SIĘ TAK CZYTA, OK!!!!::!:!!::!?!?!?!?!
const MYSQLDB   = 'db1223200_mil'; // DATABASE NAME
*/

// create database connection object
//$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
$con = mysqli_connect('localhost', 'root', '', 'keepy');
$con = mysqli_connect('mysql597int.cp.az.pl', 'u1223200_mil', 'supadup@96', 'db1223200_mil');
// set charset utf8 to mach coallation in db
$con->set_charset('utf8');

if ($con->connect_error){
    die('Error: '.$con->connect_error.' ('.$con->connect_errno.')');
}
?>