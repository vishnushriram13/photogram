<?php

function load_template($name)
{
    // this is one way but not constant include (DIR is tightly coupled whre that file is located)__DIR__ . "/../_template/$name.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/php-class/_template/$name.php"; //whereas SERVER is super globals particular entry will be same so far until using in the same server, super globals are actually making the link between server and PHP
}

function validate_credentials($username, $password)
{
    if ($username == "vishnu@selfmade.ninja" and $password == "password") {
        return true;
    } else {
        return false;
    }
}
