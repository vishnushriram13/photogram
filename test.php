<pre>
<?php
include 'libs/load.php';

//print("_SERVER\n");
//print_r($_SERVER);
//print("_GET\n");
//print_r($_GET);
//print("_POST\n");
//print_r($_POST);
//print("_FILES\n");
//print_r($_FILES);
//print("_COOKIE\n");
//print_r($_COOKIE);

if (signup("vishnu", "password", "vishnu@selfmade.ninja", "9999999999")) {
    echo "Success";
} else {
    echo "Fail";
}

?>
</pre>