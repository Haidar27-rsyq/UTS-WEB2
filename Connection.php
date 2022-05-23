<?php

$hostDB = 'ec2-44-195-169-163.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'd5gqs9772810cf';
$userDB = 'fjuoxmwlvcpwrs';
$pwDB = '2734c4f9ab173b66d569714090c4cd6abf134813e7a9743dfa0b5b901bb3d0bf';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

 session_start();
if($connection){

}else{
 
}
?>