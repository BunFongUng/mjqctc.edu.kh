<?php

#**************#
#***SETTING****#

//Send the error message to this email
$contact_email = "bun.fong2009@gmail.com";


//Determine whether we're working on local serve
//or on the real server

if(stristr($_SERVER["HTTP_HOST"], "local") || (substr($_SERVER["HTTP_HOST"], 0,  7) == "192.168")) {
    $local = true;
} else {
    $local = false;
}

//determine location of files and the URL of the sites:
//Allow for development an different server

if($local) {
    //Always Debug when running local:
    $debug = true;

    define("IMG_PATH", "imgs");
    define("BASE_URL", "http://localhost/mjqctc.edu.kh/");
    define("DB_PATH", "config/Database.php");

} else {
    define("IMG_UPLOADS", "mjqctc_dashboard/uploads");
    define("BASE_URL", "http://mjqctc.edu.kh/");
    define("DB_PATH", "config/Database.php");
}

#Most important setting..
#The $debug variable is used to set error management.
#to debug a specific page, add this to the index.php page
if($p == "thismodule") {
    $debug = true;
    require_once("config.inc.php");
}

//to debug the entire site, do
$debug = true;

//Assume debugging is off.
if(!isset($debug)) {
    $debug = false;
}

//end of the setting