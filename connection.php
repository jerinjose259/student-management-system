<?php

/**
 * Configuration for database connection
 * Author: JERIN
*/

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "studreg"; 

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );