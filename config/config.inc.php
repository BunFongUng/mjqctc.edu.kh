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



