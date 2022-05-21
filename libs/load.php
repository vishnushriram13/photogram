<?php
include_once 'includes/Session.class.php';
include_once 'includes/Mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/UserSession.class.php';



global $__site_config;
//Note: Change this path if you run this code outside lab.
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/../photogramconfig.json');

Session::start();

function get_config($key, $default = null)
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}


function load_template($name)
{
    // this is one way but not constant include (DIR is tightly coupled whre that file is located)__DIR__ . "/../_template/$name.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/photogram/_template/$name.php"; //whereas SERVER is super globals particular entry will be same so far until using in the same server, super globals are actually making the link between server and PHP
}

function validate_credentials($username, $password)
{
    if ($username == "vishnu@selfmade.ninja" and $password == "password") {
        return true;
    } else {
        return false;
    }
}

// function signup($user, $pass, $email, $phone)
// {
//     $servername = "mysql.selfmade.ninja";
//     $username = "Shnuvi";
//     $password = "shnuvi753";
//     $dbname = "Shnuvi_auth";


//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`,`active`)
//     VALUES ('$user', '$pass', '$email', '$phone','1');";
//     $error = false;
//     if ($conn->query($sql) === true) {
//         $error = false;
//     } else {
//         // echo "Error: " . $sql . "<br>" . $conn->error;
//         $error = $conn->error;
//     }

//     $conn->close();
//     return $error;
// }
