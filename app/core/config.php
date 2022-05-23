<?php

/**
 * app info
 */
define("APPNAME", "educator app");
define("APPDESC", "Free and paid tutorials");
define("APPVERSION", "1.0.0");


if ($_SERVER['SERVER_NAME'] == 'localhost') {

    //local server 
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBNAME", "educator");
    define("DBPASS", "");
    define("DBDRIVER", "mysql");
} else {
    //live server
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBNAME", "educator");
    define("DBPASS", "");
    define("DBDRIVER", "mysql");
}