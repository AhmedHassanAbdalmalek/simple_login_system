<?php
session_start();
            $username=$_SESSION["usernamesession"];
include "header.php";
include "menu.php";

echo "<h3 class='display-3'>this is services page</h3> $username";

include "footer.php";