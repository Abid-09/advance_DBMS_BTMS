<?php
    $conn = oci_connect("project","project","localhost/XE");
    if (!$conn) {
        exit("Connection Failed:" . $conn);
    }
    else{
        //echo"connection successfull";
    }
?>