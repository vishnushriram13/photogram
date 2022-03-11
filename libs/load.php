<?php

function load_template($name)
{
    // this is one way but not constant include (DIR is tightly coupled whre that file is located)__DIR__ . "/../_template/$name.php";
    include $_SERVER['DOCUMENT ROOT'] . "/app/_template/$name.php"; //whereas SERVER is super globals particular entry will be same so far until using in the same server 
}
